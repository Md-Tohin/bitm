<?php

namespace App\classes;

class Home
{
    function index() {
        return header("location: route.php?name=Tohin");
    }
}