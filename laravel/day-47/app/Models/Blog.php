<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    static function getData(){
        return [
            ['title' => "This is title one", 's_desc' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'l_desc' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'img' => '01.jpg'],
            ['title' => "This is title one", 's_desc' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'l_desc' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'img' => '02.jpg'],
            ['title' => "This is title one", 's_desc' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'l_desc' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'img' => '03.jpg'],
            ['title' => "This is title one", 's_desc' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'l_desc' => "Some quick example text to build on the card title and make up the bulk of the card's content.", 'img' => '04.jpg'],
        ];
    }
}
