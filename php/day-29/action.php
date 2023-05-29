<?php

require_once 'vendor/autoload.php';

$page = $_GET['page'];

// echo "<pre>";
// echo $page;
// print_r($GLOBALS['_GET']['page']);
// print_r($blog->blogs);

if (isset($page)) {
    if ("home" == $page) {
        $blogs = new \App\classes\Blogs();        
        include "pages/home.php";
    }
    elseif ("about-us" == $page) {
        include "pages/about.php";
    }
    elseif ("details" == $page) {
        include "pages/details.php";
    }
}

// echo $page;