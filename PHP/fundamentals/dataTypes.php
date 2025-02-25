<?php

// PHP data types list
/*
    * String
    * Array
    * Integer
    * Float
    * Boolean
    * Null
    * Object 
    * Resource
*/

$isAdmin = true;
$str = "Foo Bar";
$n = 10;
$price = 99.99;
$a = null;
$country = ['BD', 'PAK', 'SL', 'AUS'];

echo get_debug_type($isAdmin);
echo get_debug_type($str);
var_dump($n);
var_dump($country);

if (is_double($price)) {
    echo $price;
}
if (is_null($a)) {
    echo "The value is null.";
}


// Booleans
/* 
    * The bool type has only two values:
    * true
    * false
*/
/*
    * When converting to bool, the following values are considered false:

    * the boolean false itself
    * the integer 0 (zero)
    * the floats 0.0 and -0.0 (zero)
    * the empty string "", and the string "0"
    * an array with zero elements
    * the unit type NULL (including unset variables)
*/

$code = true;
if ($code) {
    echo "codeblock.....";
}
$a = 0;
if ($a) {
    echo $a;
} else {
    echo "Output: {$a}"; // output
}

var_dump((int) (25/4)); // Integer(6)
var_dump(round(25/4)); // Float(6)




$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;
echo abs($a-$b);

if(abs($a-$b) < $epsilon) {
    echo "true";
}


