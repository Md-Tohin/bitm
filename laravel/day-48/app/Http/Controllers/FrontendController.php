<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //  home
    public function index(){
        return view("frontend.home");
    }

    //  shop
    public function shop(){
        return view('frontend.shop');
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
