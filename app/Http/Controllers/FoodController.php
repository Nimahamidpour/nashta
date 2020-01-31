<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\Category;
use App\ContactUs;
use App\Food;
use App\News;
use App\SocialMedia;
use Illuminate\Http\Request;

class FoodController extends Controller
{

    /* LIST DAY ORDER */
    public function showDayOrder(){
        $aboutus=AboutUs::all()->first();
        $contactus=ContactUs::orderBy('type','ASC')->get();
        $socialmedia=SocialMedia::all();
        $categories=Category::where('id','<>','200')->orderBy('id','ASC')->get();
        $foods=Food::where([['category','<>',200],['dayorder','=',1]])->get();


        if (session()->get('kind')!=1)
        {
            session()->put('kind', 1);
            session()->forget('cart');
        }


        return view('front.page.order.dayorder',compact('aboutus','contactus','socialmedia','foods','categories'));
    }
    /* LIST DAY ORDER */

    /* LIST PREORDER */
    public function showPreOrder(){
        $aboutus=AboutUs::all()->first();
        $contactus=ContactUs::orderBy('type','ASC')->get();
        $socialmedia=SocialMedia::all();
        $categories=Category::where('id','<>','200')->orderBy('id','ASC')->get();
        $foods=Food::where([['category','<>',200],['dayorder','=',1]])->get();


        if (session()->get('kind')!=2)
        {
            session()->put('kind', 2);
            session()->forget('cart');
        }
        return view('front.page.order.preorder',compact('aboutus','contactus','socialmedia','foods','categories'));
    }
    /* LIST PREORDER */


    /* ADD TO CART */
    public function addToCart(Request $request){

        $food=Food::find($request->id);
        if(!$food) {
            return 'محصول مورد نظر یافت نشد';
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
            if(!$cart) {
                $cart = [
                    $request->id => ["id"=>$food->id,
                                     "name" => $food->name,
                                     "quantity" => 1,
                                     "price" => $food->price,
                                      "img" => $food->img,
                                      "kind" => $request->kind
                    ]
                ];
                session()->put('cart', $cart);
                return 'successnew';
            }
        // if cart is empty then this the first product

            else {
                // if cart not empty then check if this product exist then increment quantity
                if (isset($cart[$request->id])) {
                    if ($cart[$request->id]['quantity'] < 15) {
                        $cart[$request->id]['quantity']++;
                        session()->put('cart', $cart);

                        return 'success';
                    } else
                        return 'full';

                }
                // if cart not empty then check if this product exist then increment quantity

                // if item not exist in cart then add to cart with quantity = 1
                $cart[$request->id] = [
                    "id"=>$food->id,
                    "name" => $food->name,
                    "quantity" => 1,
                    "price" => $food->price,
                    "img" => $food->img
                ];
                session()->put('cart', $cart);
                return 'successnew';

                // if item not exist in cart then add to cart with quantity = 1
            }
    }
    /* ADD TO CART */

    /* MINES TO CART */
    public function minesCart(Request $request){
        $cart = session()->get('cart');

        if (isset($cart[$request->id]))
        {
            if ($cart[$request->id]['quantity']>1)
            {
                $cart[$request->id]['quantity']--;
                session()->put('cart', $cart);
                return 'mines';
            }

            else
            {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                return 'delete';
            }
        }
    }
    /* MINES TO CART */

    /* REMOVE FROM CART */
    public function removecart($id)
    {
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
                return 'delete';
            }

            return $id;
    }
    /* REMOVE FROM CART */

    /* UPDATE CART */
    public function updateCart(Request $request){
        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if($cart) {
            if (isset($cart[$request->id])) {
                if ($cart[$request->id]['quantity'] < 15) {
                    $cart[$request->id]['quantity']=$request->quantity;
                    session()->put('cart', $cart);

                    return 'success';
                } else
                    return 'full';

            }
        }
    }
    /* UPDATE CART */


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


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
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        //
    }


}
