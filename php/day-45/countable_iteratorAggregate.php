<?php

class District implements Countable, IteratorAggregate{



    public $district = [

        'Barguna',
        'Comilla',
        "Cox's Bazar",
        'Feni',
        'Manikganj',
        'Narayanganj',
        'Khulna',
        'Jamalpur',
        
    ];

    public function __construct($name)
    {
        array_push($this->district, $name);
    }

    function count()
    {
        return count($this->district);
    }

    function getIterator(){
        return new ArrayIterator($this->district);
    }

}

$obj = new District("Dinajpur");

echo "Total District:- ". count($obj) ."<br>";

foreach ($obj as $key => $value) {
    echo $value ."<br>";
}

// echo $obj->count();