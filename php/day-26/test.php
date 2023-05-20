<?php

require_once 'vendor/autoload.php';

use App\classes\Home;

$obj = new Home(20, 30);

$obj->index();