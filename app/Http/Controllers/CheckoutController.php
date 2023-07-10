<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('checkout');
    }

    public function getPaymentMethods()
    {
        $user = auth()->user();
        $methods = [];

        foreach ($user->paymentMethods() as $method){
            array_push($methods, [
                'id' => $method->card->id,
                'brand' => $method->card->brand,
                'last_four' => $method->card->last4,
                'exp_month' => $method->card->exp_month,
                'exp_year' => $method->card->exp_year,
            ]);
        }
        return response()->json(['methods' => $php_errormsg]);
    }
}
