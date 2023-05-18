<?php

namespace App\classes;

class PersonalInfo{

    public $name, $x, $y, $z;

    public function __construct()
    {
        $this->name = "Md. Tohin";
        $this->x = 20;
        $this->y = 30;
        $this->z = 40;
        // echo $this->z;
    }

    public function age(){
        return "I am {$this->x} year's old";
    }


}