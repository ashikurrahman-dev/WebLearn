<?php 

class Basics{
    public $userName = "Ashikur Rahman"; // property

    public function intro(){ // method
        return "Hello, my name is {$this->userName}.";
    }

    public function avatar($size = 600)
    {
        return "This avatar size {$size}.";
    }
}

$user = new Basics; // object
echo $user->userName;
echo $user->intro();
echo $user->avatar(800);