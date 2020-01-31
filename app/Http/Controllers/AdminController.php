<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Food;
use App\Order;
use App\OrderDetail;
use App\User;
use App\UserAddress;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        return view('back.page.dashboard');
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
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }


    /*  customer */
    public function listCustomer(){
        $customers=User::orderBy('id','ASC')->paginate(10);
        return view('back.page.customer.ListCustomer',compact('customers'));
    }

    public function customerOrder($id){
        $orders=Order::where([['user_id','=',$id],['pay','=','1']])->orderBy('id','ASC')->paginate(10);
        return view('back.page.order.ListOrder',compact('orders'));
    }

    public function customerAddress($id){
        $addresses=UserAddress::where('user_id','=',$id)->orderBy('id','ASC')->get();
        return view('back.page.customer.ListAddress',compact('addresses'));
    }
    /*  customer */

    /*  order */
    public function listOrder(){
        $orders=Order::where('pay','=','1')->orderBy('id','ASC')->paginate(10);
        return view('back.page.order.ListOrder',compact('orders'));
    }

    public function moreinfo(Order $order)
    {
        $order_details=OrderDetail::where('order_id','=',$order->id)->get();
        return view('back.page.order.moreinfo',compact('order','order_details'));
    }
    /*  order */

    /*  food */
    public function listFood(){
        $foods=Food::orderBy('name','ASC')->paginate(10);

        return view('back.page.food.listFood',compact('foods'));
    }

    public function listFoodOrder(Food $food){
        $order_id=Order::where('pay','=','1')->pluck('id');
        $orders=OrderDetail::where('name','=',$food->name)->whereIn('order_id',$order_id)->paginate(10);
        return view('back.page.order.ListOrderFood',compact('orders'));

    }

    public function updateFoodDayOrder(Food $food)
    {
        $day_order=$food->dayorder;
        if ($day_order==1)
            $food->dayorder=0;
        else
            $food->dayorder=1;
        $food->save();
        $foods=Food::orderBy('name','ASC')->paginate(10);

        return view('back.page.food.listFood',compact('foods'));
    }
    /*  food */


}
