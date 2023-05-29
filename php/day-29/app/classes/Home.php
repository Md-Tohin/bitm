<?php

namespace App\classes;

class Home{

    public function index(){
        return header("location: action.php?page=home");
    }

}

?>