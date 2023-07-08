<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $current_user = auth()->user();
        $user_id = $current_user->id;
        $product_id = $request->product_id;
        $qty = 1;
        $product = Product::find($product_id)->first();

        //insert inside cart if not exist and update if exists
        $cart = Cart::where('product_id',$product_id)->where('user_id', $user_id)->first();

        if(!$cart){
            Cart::create([
                'product_id' => $product_id,
                'user_id' => $user_id,
                'qty' =>  1,
                'price' => $product->sale_price
            ]);
        }else{
                $cart->qty = $cart->qty + 1;
                $cart->price += $product->sale_price;
                $cart->save();
        }

        $cart_count = Cart::where('product_id',$product_id)->where('user_id', $user_id)->count();
        return response()->json(['cart_count' => $cart_count], 200);
    }
}
