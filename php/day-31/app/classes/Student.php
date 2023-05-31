<?php

namespace App\classes;

class Student{

    public $students;

    public function __construct()
    {
        $this->students = [
            0 => [
                "id" => 01,
                "name" => "Md. Jamal",
                "class" => "One",
                "mobile" => "01854229083",
                "dob" => "15 April, 1999",
            ],
            1 => [
                "id" => 02,
                "name" => "Md. Habibur Rahman",
                "class" => "Ten",
                "mobile" => "01659808325",
                "dob" => "27 May, 1968",
            ],
            2 => [
                "id" => 03,
                "name" => "Md. Riaz Uddin",
                "class" => "One",
                "mobile" => "01854229083",
                "dob" => "15 April, 1999",
            ],
            3 => [
                "id" => 04,
                "name" => "Abdur Rahman",
                "class" => "One",
                "mobile" => "01854229083",
                "dob" => "15 April, 1999",
            ],
            4 => [
                "id" => 05,
                "name" => "Mina Dawan",
                "class" => "One",
                "mobile" => "01854229083",
                "dob" => "15 April, 1999",
            ],
            5 => [
                "id" => 06,
                "name" => "Habiba Khatun",
                "class" => "Five",
                "mobile" => "01854229083",
                "dob" => "15 April, 1999",
            ],
        ];
    }

}