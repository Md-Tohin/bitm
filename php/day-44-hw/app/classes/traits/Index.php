<?php

namespace App\classes\traits;

trait Index{

    protected function index(){
        return header("location: action.php?page=home");
    }

}

