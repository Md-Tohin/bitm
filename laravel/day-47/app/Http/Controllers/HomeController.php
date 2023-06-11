<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $names = ['Rahman', 'Kalam', 'Jalal', 'Habib'];
        $blogs = Blog::getData();
        // echo "<pre>";
        // print_r($blogs);
        return view('frontend.home', ['blogs' => $blogs]);
    }

    function about(){
        return view('frontend.about');
    }

    function contact(){
        return view("frontend.contact");
    }
}
