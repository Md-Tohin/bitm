<?php

if (isset($_GET['page'])) {
    if ("home" == $_GET['page']) {
        include "pages/home.php";
    }
    elseif ("about" == $_GET['page']) {
        include "pages/about.php";
    }
    elseif ("service" == $_GET['page']) {
        include "pages/services.php";
    }
}