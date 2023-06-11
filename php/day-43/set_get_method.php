<?php

class One{
    private $a, $b, $c;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    
}

$obj = new One;
$obj->a = 56;

// echo $obj->a = 55;
