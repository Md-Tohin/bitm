<?php

namespace App\classes;

use App\classes\traits\Index;
use App\classes\traits\Check;

class Home{

    use Index, Check;

    public function index(){
        $this->action();
    }

    public function redirect($page){
        $this->check($page);
    }

}