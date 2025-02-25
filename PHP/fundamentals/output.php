<?php

// echo 
// ‘echo’ is a language construct in PHP, and it is commonly used to output one or more strings to the browser. 

echo "Hello World";
echo "Hello World!", " Hello Everyone";

$fruits = ["lemon", "orange", "banana"];
echo implode(" and ", $fruits);

// print

print "Hello World";
// print "Hello", "World"; // Error
print "My name is Ashikur Rahman.\nMy age 21.";

// var_dump 
// var_dump outputs data types and value

$a = [1, 2, ['a', 'b']];
var_dump($a);

$b = 3.14;
$c = true;
var_dump($b, $c); // outputs: float(3.14) and bool(true)

// print_r
// print_r — Prints human-readable information about a variable
// print_r commonly used in return array
print_r("Hello");
$arr = ['a', 'b', 'x' => 'c'];
print_r($arr);

$b = array('m' => 'monkey', 'foo' => 'bar', 'x' => array('x', 'y', 'z'));
print_r($b);




// echo vs print
/* 
    * echo no return value
    * print returns 1
*/
/* 
    * echo output multiple string value
    * print output single string value
*/
/* 
    * echo faster
    * print slightly slower
*/