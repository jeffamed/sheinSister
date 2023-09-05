<?php

use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::apiResource('products', Product::class);
Route::apiResource('orders', Order::class);
Route::apiResource('customers', Customer::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
