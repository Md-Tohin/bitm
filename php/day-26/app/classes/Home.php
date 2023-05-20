<?php

namespace App\classes;

class Home
{
    public function __construct($a, $b)
    {
        echo $a . $b;
    }

    public function index(){
        return header("route.php");
    }


}