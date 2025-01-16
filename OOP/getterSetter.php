<?php 

class GetterSetter
{

    public function __construct(protected $name, protected $email){

    }

    public function intro(){
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            return "Email not valid";
        }
        $email = strtolower($this->email);
        return "Hello, My name is {$this->name} and email {$email}.";
    }
}

$user = new GetterSetter('Ashikur Rahman', 'Ashikurrahman@gmail.com');
echo $user->intro();