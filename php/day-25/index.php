<?php

require_once 'vendor/autoload.php';

use App\classes\FunctionDemo;


$objFunction = new FunctionDemo();

$objFunction->summation();

// $objFunction->personal('Md. Tohin', 24, 'Web Developer', "BASIS", 50000, "O+");
echo "<br>";
echo "<br>";
// $objFunction->personal('Md. Riaz', 33, 'Web Designer', 'BITM', 10000, "AB+");

// $objFunction->test();
// $objFunction->test();
// $objFunction->test();
// $objFunction->test();
// $objFunction->test();
// $objFunction->test();

$person = "Md. Tohin";

function running(){
    // function Global scope example
    // echo $GLOBALS['person'];     
    global $person;
    // echo $person;
    $age = 50;
    person($age);
}

function person($a){
    echo "<br> The age of this person is : {$a}";
}

// running();


function tohin(){
    $name = "Md. Tohin";
    $info = "is a Web Developer";
    
    $information = [$name, $info];
    return $information;
}

function information(){
    $information = tohin();
    echo $information[0] . " " . $information[1] ;
}

// function test():int{
//     return 20;
// }
function test(int $a){
    return $a;
}
echo test(200);

// information();