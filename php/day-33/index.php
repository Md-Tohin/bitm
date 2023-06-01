<?php

//  const variable

define('hello', "Hello Bangladesh");
CONST hello1 = "Hello form another home";

// echo hello1;

abstract class Person{
    static public function one(){
        echo "Hello form parent";
    }

    abstract function square($a, $b);
    abstract function triangle($c, $m, $n);
    // function communication(){

    // }

    // function eat(){

    // }

    // function angry(){

    // }

    // function walk(){

    // }
}

class WebProgrammer{

    private $a = 2;

    public function setValue($val){
        $this->a = $val;
    }
    public function getValue(){
        echo $this->a;
    }

    CONST hello1 = "Hello form another home";

    static public function one(){
        Person::one();
        // echo "Hello form child";
    }

    private $name, $age, $profession;



    // function programming(){

    // }

    // function problemSolving(){

    // }

    // function product()
    // {

    // }

}

class Doctor extends Person{

    public function square($a, $b){
        echo $a + $b;
    }

    function triangle($c, $m, $n){
        
    }

    static public function one(){
        echo "Hello form child";
    }

    // function detectProblemHB(){

    // }

    // function hBpS(){

    // }

    // function expertImedicine(){

    // }
    
}

// WebProgrammer::one();

// echo WebProgrammer::hello1;

$per = new WebProgrammer;
$per->setValue(20);
$per->getValue();