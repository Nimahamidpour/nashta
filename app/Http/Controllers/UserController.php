<?php

namespace App\Http\Controllers;

use App\order;
use App\OrderDetail;
use App\Pay;
use App\timeOrder;
use App\User;
use App\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Shetabit\Payment\Facade\Payment;
use Shetabit\Payment\Invoice;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $carts = session()->get('cart');
        return view('front.user.page.basket',compact('carts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
       return view('front.user/page/edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'mobile' => 'required',
            'tell' => 'required',
            'name' => 'required',
        ]);

        $user->name=$request->name;
        $user->mobile=$request->mobile;
        $user->tell=$request->tell;
        $user->birthday=date("Y-m-d H:i:s", $request->birthdaytimestamp);
        $user->gender=$request->gender;
        try
        {
          $user->save();
        }
        catch (Exception $exception)
        {
            return redirect()->back()->with('warning',$exception->getCode());
        }
        return redirect()->back()->with('success','عملیات با موفقیت انجام شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // get time and address for user to complete order
    public function timeAndAddress()
    {
        $time=timeOrder::orderBy('id','ASC')->get();
        $address=UserAddress::where('user_id','=',Auth::user()->id)->get();
        return view('front.user.page.time',compact('time','address'));
    }
    // get time and address for user to complete order

    // the final step to buy
    public function finalorder(Request $request)
    {

        $cart=session()->get('cart');
        $priceall=0;
        if ($cart)
        {
            foreach ($cart as $cart_item)
            {
                $priceall+=$cart_item['quantity']*$cart_item['price'];
            }
            if ($request->date=="")
            {
                $request->date=jdate()->getTimestamp();
                $request->time=jdate()->format('H : i') .'  -  '.jdate(jdate()->getTimestamp()+2400)->format('H : i');
            }

            $order_details = ["user"=>Auth::user()->id,
                                "date"=>date("Y-m-d H:i:s", $request->date),
                                "time"=>$request->time,
                                "address"=>$request->address,
                                "price"=>$priceall,
                                "kind"=>session()->get('kind')
                            ];
            session()->put('order_details',$order_details);
            return view('front.user.page.final',compact('priceall','cart','order_details'));
        }

    }
    // the final step to buy

    public function buy(){
        $cart=session()->get('cart');
        $priceall=0;
        // if cart not empty
        if ($cart)
        {
            foreach ($cart as $cart_item) {
                $priceall += $cart_item['quantity'] * $cart_item['price'];
            }
            $order_details=session()->get('order_details');
            if ($order_details!='')
            {
                $order=new order([
                    'user_id'=>$order_details['user'],
                    'kind'=>$order_details['kind'],
                    'date'=>$order_details['date'],
                    'time'=>$order_details['time'],
                    'price'=>$order_details['price'],
                    'address'=>$order_details['address'],
                    'pay'=>0,
                    'discount'=>0,
                    'finalprice'=>((100-0)*$order_details['price']/100),
                ]);
                if ($order->save())
                {
                    $id=$order->id;
                    foreach ($cart as $cart_item)
                    {
                        $orderdetails=new OrderDetail([
                                    "order_id"=>$id,
                                    "name"=>$cart_item['name'],
                                    "quantity"=>$cart_item['quantity'],
                                    "price"=>$cart_item['price'],
                                ]);
                        $orderdetails->save();
                    }
                    // zarinpall Payment gateway
                    $invoice = new Invoice;
                    $invoice->amount($order_details['price']);
                    $invoice->detail('order_id',$id);
                    $invoice->detail('user_id',$order_details['user']);
                    $invoice->detail('price',$order_details['price']);
                    Payment::purchase($invoice,function($driver, $transactionId) {});

                    $pay=new Pay([
                        "order_id"=>$id,
                        "user_id"=>$order_details['user'],
                        "price"=>$order_details['price'],
                        "authority"=>$invoice->getTransactionId(),
                    ]);
                     $pay->save();
                     session()->forget('order_details');
                     return Payment::pay();
                    // zarinpall Payment gateway
                }

            }


        }
    }

    // callback from zarinpall Payment gateway
    public function callBack(Request $request){
        if ($request->Status =="OK" && isset($request->Authority))
        {
            try
            {
                $pay=Pay::where('authority','=',$request->Authority)->first();
                $receipt = Payment::amount($pay->price)->transactionId($pay->authority)->verify();
                $pay->refid=$receipt->getReferenceId();
                if ($pay->save())
                {
                    $order=Order::where('id','=',$pay->order_id)->first();
                    $order->pay=1;
                    $order->save();
                    session()->forget('cart');
                   return redirect()->route('listorder');
                }


             }
            catch (InvalidPaymentException $exception)
            {
                echo $exception->getMessage();
            }
        }

    }

    public function listorder(){
        $orders=Order::where('user_id','=',Auth::user()->id)->paginate(5);

        return view('front.user.page.listorder',compact('orders'));
    }

    public function moreinfo(Order $order)
    {
        $order_details=OrderDetail::where('order_id','=',$order->id)->get();
        return view('front.user.page.moreinfo',compact('order','order_details'));
    }

    public function addAddress(Request $request)
    {
        $useraddress=new UserAddress([
            "user_id"=>Auth()->user()->id,
            "address_address"=>$request->address
        ]);
        if($useraddress->save())
        {
            $id=$useraddress->id;
            return $id;
        }
        else
            return 'false';
    }
}
