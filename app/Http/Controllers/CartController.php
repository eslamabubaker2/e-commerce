<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index(){
        $id=Auth::user()->id;

        $carts=Cart::join('products','carts.product_id','=','products.id')

            ->where('user_id',$id)

            ->select('carts.*','products.price','products.name','products.img','products.store_id')->get();
    $amount=0;
        return  view('website.cart',compact('carts','amount'));


    }

    public function addTocart($id){

if(isset(Auth::user()->id)){
        $product=Product::findOrFail($id);

        $cart=new Cart();
        $cart->user_id=Auth::user()->id;
        $cart->product_id=$id;
        $cart->save();
        return bacK();
    }
    else{
 return view('auth.login');}
    }

    public function decrease($id){
        $cart=Cart::findOrFail($id);
        if($cart->contity!=0)
        $cart->contity=$cart->contity-1;
        $cart->update();
        return back();
    }

    public function increase($id){
        $cart=Cart::findOrFail($id);

        $cart->contity=$cart->contity+1;
        $cart->update();

        return back();
    }

    public function removecart($id){
        $cart=Cart::findOrFail($id);


        $cart->delete();

        return back();
    }

}
