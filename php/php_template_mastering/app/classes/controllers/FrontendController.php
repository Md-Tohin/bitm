<?php

namespace App\classes\controllers;

class FrontendController {

    //  home page
    public function index(){
        view('frontend/home');
    }

    //  single product details
    public function singleProductDetails(){
        view('frontend/single_product');
    }

}