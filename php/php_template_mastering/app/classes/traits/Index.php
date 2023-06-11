<?php

namespace App\classes\traits;

trait Index{

    public function action(){
        return header('location: web.php?page=home');
    }    

}