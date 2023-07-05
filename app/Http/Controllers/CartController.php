<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $current_user = auth()->user();
        $product_id = $request->product_id;
        $qty = 1;
        $product = Product::find($product_id)->first();
    }
}
