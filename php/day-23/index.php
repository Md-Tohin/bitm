<?php

require_once 'vendor/autoload.php';

use App\classes\HelloWorld;
use App\classes\PersonalInfo;
use App\classes\Profession;

$msg = new HelloWorld;
$profession = new Profession;
$myPersonalInfo = new PersonalInfo;

// echo gettype($msg);

$msg->index();
echo "<br>";
$profession->myProfession();
echo "<br>";
$myPersonalInfo->motherName();
echo "<br>";
$myPersonalInfo->fatherName();
echo "<br>";
$myPersonalInfo->maritalStatus();
echo "<br>";
$myPersonalInfo->phoneNumber();
echo "<br>";
$myPersonalInfo->address();

