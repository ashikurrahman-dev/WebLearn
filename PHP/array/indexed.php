<?php 

$books = ["The Great Gatsby", "Moby Dick", "To Kill a Mockingbird"];
echo $books[0]; // The Great Gatsby
print_r($books);

$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array); // outputs: 1 => "d"

// change value
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = 'RR';
var_dump($cars);

// add value
$cars = array("Volvo", "BMW", "Toyota");
$cars[] = 'RR';
var_dump($cars);

// access all value 
$cars = array("Volvo", "BMW", "Toyota");
foreach($cars as $car){
    echo $car . "\n";
}