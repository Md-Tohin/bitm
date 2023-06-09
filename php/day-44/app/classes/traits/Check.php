<?php

namespace App\classes\traits;

trait Check{

    protected function check($val){
        if(isset($val)){
            if("home" == $val){
                $k = ['kk', 'hh'];
                view("home", ["compact" => $k]);
            }
            elseif("about" == $val){
                $k = ['kk', 'hh'];
                view("about");
            }
            elseif("contact" == $val){   
                view("contact");
            }
            elseif("timeline" == $val){   
                view("timeline");
            }
            elseif("reviews" == $val){   
                view("reviews");
            }
            else{
                // echo "404 page not found";
                header("location: pages/not_found.php");
            }
        }
    }

}