<?php 

    $age = 21; // global scope
    $email = "ashikurrahman7133@gmail.com";

    function test(){
        $name = "Ashikur Rahman"; // local scope
        global $age; // Global variable

        echo $GLOBALS['email'];
        echo "My name is " . $name . " and age is " . $age;
    }

    test();



    $a = 10;
    $b = 20;

    function sum(){
        global $a, $b;

        $b = $a + $b;
    }

    sum();
    echo $b; // output: 30



?>


<?php

class sample_class
{
    // public $value;
  public function func_having_static_var($x = NULL)
  {
    static $var = 0;
    if ($x === NULL)
    { return $var; }
    $var = $x;
    // var_dump($var);
    // $this->value = $var;
    return $var;
  }
}

$a = new sample_class();
$b = new sample_class();

echo $a->func_having_static_var()."\n";
echo $b->func_having_static_var()."\n";
// this will output (as expected):
//  0
//  0

$a->func_having_static_var(3);
// echo $a->value;


echo $a->func_having_static_var()."\n";
echo $b->func_having_static_var()."\n";
// this will output:
//  3
//  3
// maybe you expected:
//  3
//  0

?>

<?php


$age = 21;

$printAge = function() use ($age) {
    return $age;
};
echo $printAge(); // output: 21

?>