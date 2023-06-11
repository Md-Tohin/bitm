<?php

interface One{
    function test($a, $b);
}

class Two implements One{
    function test($a, $b)
    {
        echo $a, $b;   
    }
}

$obj = new Two();

$obj->test(20, 10);