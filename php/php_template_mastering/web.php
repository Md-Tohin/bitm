<?php

require_once "vendor/autoload.php";

use App\classes\Home;

$obj = new Home;

$obj->redirect($_GET['page']);