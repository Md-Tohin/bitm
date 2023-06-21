<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/single-product', [FrontendController::class, 'singleProduct'])->name('single');
Route::get('/cart-product', [FrontendController::class, 'cartProduct'])->name('cart');
Route::get('/checkout-product', [FrontendController::class, 'checkout'])->name('checkout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    //  dashboard routes
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    //  product routes
    Route::get('/products', [ProductController::class, 'manageProduct'])->name('manage.product');
    Route::get('/product/add', [ProductController::class, 'addProduct'])->name('add.product');
    Route::post('/product/store', [ProductController::class, 'storeProduct'])->name('store.product');

});
