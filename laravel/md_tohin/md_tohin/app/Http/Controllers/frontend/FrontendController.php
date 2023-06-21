<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //  index
    public function index(){
        $products = Product::orderBy('id', 'desc')->get();
        return view('frontend.home', compact('products'));
    }

    //  shop
    public function shop(){
        $products = Product::orderBy('id', 'desc')->get();
        return view('frontend.shop', compact('products'));
    }

    //  shop
    public function singleProduct(){
        return view('frontend.single',);
    }

    //  cart
    public function cartProduct(){
        return view('frontend.cart',);
    }

    //  checkout
    public function checkout(){
        return view('frontend.checkout',);
    }
}
