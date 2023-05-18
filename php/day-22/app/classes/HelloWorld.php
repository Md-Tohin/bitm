<?php

namespace App\classes;

class HelloWorld    // specification
{ 
    public $name;   //  property

    public function __construct()   //  method
    {
        $this->name = "Md. Tohin";
    }

    public function index()     //  method
    {
        echo $this->name;
    }

}