<?php

namespace App\classes;

class HelloWorld
{

    public $name, $age;

    function __construct()
    {
        $this->name = "Md. Tohin";
    }

    function index()
    {
        echo $this->name;
    }


}
