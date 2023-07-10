<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware', 'web'], function (){
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/cart', [CartController::class, 'store']);

    Route::get('/checkout', [CheckoutController::class, 'index']);

    Route::get('/user/setup-intent', [UserController::class, 'getSetupIntent']);

    Route::get('/user/payment-methods', [UserController::class, 'getPaymentMethods']);
});
