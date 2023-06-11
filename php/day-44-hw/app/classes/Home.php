<?php

namespace App\classes;

use App\classes\traits\Check;
use App\classes\traits\Index;

class Home{
    use Check, Index;

    function action($val){  
        // $this->check($val);
        $this->index();
    }

    function decision($val)
    {
        $this->check($val);
    }

}