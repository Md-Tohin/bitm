<?php

function view($val){
    include "resources/views/".$val.".php";
}  

function asset($path){
    echo "public/{$path}/";
}

function route($path){
    echo "web.php?page={$path}";
}

function include_path($path){
    echo "resources/views/".$path;
}