<?php

namespace App\classes;

class Person{
    static public function one(){
        echo "Hello form parent";
    }
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

    static public function one(){
        echo "Hello form child";
    }

    // function programming(){

    // }

    // function problemSolving(){

    // }

    // function product()
    // {

    // }

}

class Doctor{

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

WebProgrammer::one();