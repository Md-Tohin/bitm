<?php

use App\Http\Controllers\backend\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

Route::get('/', [FrontendController::class, "index"])->name("frontend.home");
Route::get('/shop', [FrontendController::class, "shop"])->name("frontend.shop");
Route::get('/single-product', [FrontendController::class, "singleProduct"])->name("frontend.single_product");
Route::get('/cart', [FrontendController::class, "cart"])->name("frontend.cart");
Route::get('/checkout', [FrontendController::class, "checkout"])->name("frontend.checkout");






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminController::class, "dashboard"])->name('dashboard');
});
