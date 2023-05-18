<?php

namespace App\classes;

class Profession
{
    public $profession;

    function __construct()
    {
        $this->profession = 'Web Developer';
    }

    function myProfession()
    {
        echo $this->profession;
    }


}