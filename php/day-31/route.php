<?php

require_once "vendor/autoload.php";

use App\classes\Product;

if (isset($_GET['page'])) {
    if ('home' == $_GET['page']) {
        $products = new Product();
        include "pages/includes/home.php";
    }
    elseif('details' == $_GET['page']){
        include "pages/template-parts/details.php";
    }
    elseif('about' == $_GET['page']){
        include "pages/includes/about.php";
    }
    elseif('contact' == $_GET['page']){
        include "pages/includes/contact.php";
    }
}