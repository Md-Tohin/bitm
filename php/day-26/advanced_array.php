<?php

$info = [
    "name" => "Md. Tohin",
    "age"  => "30",
    "address" => [
        "present" => "Uttara, Dhaka.",
        "permanent" => "Jamalpur sadar, Jamalpur",
    ],
    "mobile" => [
        "artel" => "1245795221",
        "gp" => "1245795221",
        "ban" => "98510",
        "ruby" => [
            "one" => "7845125",
            "two" => "3132135",
        ],
    ],
];

echo "<pre>";
print_r($info);

echo "<br>";
echo $info["address"]["present"];

echo "<br>";
echo $info["mobile"]["ruby"]["two"];