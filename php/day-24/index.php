<?php

require_once 'vendor/autoload.php';

use App\classes\PersonalInfo;

$obj = new PersonalInfo();

$num1 = 20;
$num2 = 20;

function ourFirstFunc($a, $b)
{ 
    echo "I am Md. Tohin {$a} and " . $b;
    return $a + $b;
}

$output = ourFirstFunc(20, 30);

echo $output;
echo "<br>";
echo $obj->age();
