<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/a', function () {
    return view('welcome');
});

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/product/{product}', [MainController::class, 'productShow'])->name('productShow');
Route::get('/cart', [CartController::class, 'index'])->name('cart-index');
Route::post('/cart/add/{product}', [CartController::class, 'addProductToCart'])->name('addProduct');
Route::post('/cart/remove/{product}', [CartController::class, 'removeProductFromCart'])->name('removeProduct');


