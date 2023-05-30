<?php

if(isset($_GET['page'])){
    if("home" == $_GET['page']){
        include "pages/home.php";
    }
    elseif("con" == $_GET['page']){
        include "pages/contact.php";
    }
}