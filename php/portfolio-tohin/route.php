<?php

if (isset($_GET['page'])) {
    if ("home" == $_GET['page']) {
        include "pages/home.php";
    }
    elseif ("about" == $_GET['page']) {
        include "pages/about.php";
    }
    elseif ("services" == $_GET['page']) {
        include "pages/services.php";
    }
    elseif ("skills" == $_GET['page']) {
        include "pages/skills.php";
    }
    elseif ("teams" == $_GET['page']) {
        include "pages/teams.php";
    }
    elseif ("contact" == $_GET['page']) {
        include "pages/contact.php";
    }
}