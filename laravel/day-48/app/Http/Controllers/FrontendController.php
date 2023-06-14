<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //  home
    public function index(){
        $products = Product::orderBy('id', 'desc')->get();
        return view("frontend.home", compact('products'));
    }

    //  shop
    public function shop(){
        $products = Product::orderBy('id', 'desc')->get();
        return view('frontend.shop', compact('products'));
    }

    //  single product
    public function singleProduct(){
        return view('frontend.single_product');
    }

    //  cart
    public function cart(){
        return view("frontend.cart");
    }

    //  cart
    public function checkout(){
        return view("frontend.checkout");
    }


    public function dashboard(){
        return view('backend.dashboard');
    }



}
