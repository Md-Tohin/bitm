<?php

namespace App\classes;

class Blogs{

    public $blogs;

    public function __construct()
    {
        $this->blogs = [
            0 => [
                "title" => "Banana Fresh Foots",
                "s_des" => "Banana Short Description. Some text to build on the card title",
                "l_des" => "Banana Long Description. Some quick example text to build on the card title and make up the bulk of the card's content.",
                "img"   => "assets/images/products/product-2.jpg",
            ],
            1 => [
                "title" => "Mango Foots",
                "s_des" => "Mango Short Description. Some quick example text  on the card title",
                "l_des" => "Mango Long Description. Some quick example text to build on the card title and make up the bulk of the card's content.",
                "img"   => "assets/images/products/product-4.jpg",
            ],
            2 => [
                "title" => "Apple Fresh Foots",
                "s_des" => "Apple Short Description. example text to build on the card title",
                "l_des" => "Apple Long Description. Some quick example text to build on the card title and make up the bulk of the card's content.",
                "img"   => "assets/images/products/product-5.jpg",
            ],
            3 => [
                "title" => "Fresh Burger",
                "s_des" => "Fresh Burger Short Description. example text to build on the card title",
                "l_des" => "Fresh Burger Long Description. Some quick example text to build on the card title and make up the bulk of the card's content.",
                "img"   => "assets/images/products/product-3.jpg",
            ],
            
        ];
    }

}