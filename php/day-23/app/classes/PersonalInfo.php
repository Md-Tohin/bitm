<?php

namespace App\classes;

class PersonalInfo{

    public $motherName, $fatherName, $maritalStatus, $address, $phoneNumber;

    function __construct()
    {
        $this->motherName = "Mallika Begum";
        $this->fatherName = "Md. Habibur Rahman";
        $this->maritalStatus = false;
        $this->address = "Dhaka";
        $this->phoneNumber = "01819810909";
    }

    function motherName()
    {
        echo $this->motherName;
    }

    function fatherName()
    {
        echo $this->fatherName;
    }

    function maritalStatus()
    {
        echo $this->maritalStatus;
    }

    function address()
    {
        echo $this->address;
    }
    
    function phoneNumber()
    {
        echo $this->phoneNumber;
    }


}
