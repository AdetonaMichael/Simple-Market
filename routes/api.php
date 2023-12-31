<?php

use App\Http\Controllers\BuyersController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UsersController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('buyers', BuyersController::class)->only(['index','show']);
Route::resource('categories', CategoryController::class)->except(['create','edit']);
Route::resource('products', ProductController::class)->only(['index','show']);
Route::resource('sellers', SellerController::class)->only(['index','show']);
Route::resource('transactions', TransactionController::class)->only(['index','show']);
Route::resource('users', UsersController::class)->except(['create','edit']);

