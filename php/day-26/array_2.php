<?php

$tohin = [
    "name" => "Md. Tohin",
    "age" => 23,
    "education" => [
        "SSC" => "Jamalpur High School",
        "passing_year" => "2020",
        "board" => "Dhaka",
    ],
    "mobile" => [
        "gp" => "01754825962",
        "ruby" => "01854229285",
    ],
];

echo "<pre>";
print_r($tohin);

echo "<br>";
echo $tohin["education"]['SSC'];
echo "<br>";
echo $tohin["mobile"]['gp'];

