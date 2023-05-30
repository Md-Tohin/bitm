<?php

namespace App\classes;

class Contact
{
    public function index(){
        return header("location: route.php?page=con");
    }

}