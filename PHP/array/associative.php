<?php 

// syntax
$car = [
    'Brand' => 'Ford',
    'Model' => 'Mustang',
    'Year' => 1994
];
var_dump($car);

// change value
$car['Year'] = 1964;
var_dump($car);

// add value
$car['color'] = 'Black';
var_dump($car);

// access all value
foreach($car as $key => $value){
    echo $key . ': ' . $value . "\n";
}