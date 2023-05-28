<?php

require_once 'vendor/autoload.php';

use App\classes\About;
use App\classes\Home;

$home = new Home();

$about = new About();

$home->index();
$about->about();