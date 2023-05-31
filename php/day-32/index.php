<?php

class Animal{

    public static $a = 20;

    public function walking(){
        echo self::$a ."Can Walk";
    }
    private function eat(){
        echo "Can Eat";
    }
    protected function sleep($n){
        $this->eat();
        echo " {$n} Protected Can Sleep ";
    }
    // $this->eat();

    public static function info(){
        echo "Info ";
    }

}

class Cat extends Animal{
    
    public function meow(){
        // $this->info();
        echo "Call Meow";
    }

}

class Man extends Animal{

    public function speak($name){
        $this->sleep($name);
        echo "Can Speak";
    }
    public function age(){
        echo "Age is : ". $this->a;
    }


}

// $person = new Man();
// $person->walking();
// $person->speak('Md. Tohin');

// echo Animal::info();