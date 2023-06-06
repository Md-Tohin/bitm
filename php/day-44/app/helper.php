<?php

function view($val='', $arr = []){
    extract($arr);
    // print_r($arr);
    foreach($arr as $i){
        // echo $i;
    }
    include_once "pages/".$val.".php";
    // include "pages/{$val}.php";
}

function assets($path){
    echo "assets/{$path}/";
}

function route($path)
{
    echo "action.php?page={$path}";
}