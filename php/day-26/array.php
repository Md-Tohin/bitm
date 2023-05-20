<?php

$names = [];

$names[0] = "Karim";
$names[1] =  5.20;
$names[2] = 30;
$names[3] = [];

// echo "<pre/>";
// print_r($names);

$products = [
    'mobile' => "iphone 13 pro", 
    "price" => 2000, 
    "ram" => "64GB"
];


// echo "<pre/>";
// print_r($products);

// for($i = 0; $i < count($products); $i++){
//     echo $names[$i]."<br>";
// }

$keys = array_keys($products);
$values = array_values($products);
echo "<pre>";
print_r($keys);
print_r($values);

echo "<br>";
for($i = 0; $i < count($products); $i++){
    echo $keys[$i]. " => " . $products[$keys[$i]] . "<br>";
}