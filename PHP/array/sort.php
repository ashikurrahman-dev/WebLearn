<?php 

// sort() - sort arrays in ascending order
$country = ['BD', 'PAK', 'AFG', 'AUS', 'SL', 'IND'];
sort($country);
var_dump($country);

$num = [2, 4, 1, 7, 3, 5, 8];
sort($num);
var_dump($num);

// rsort() - sort arrays in descending order
$countries = ['BD', 'PAK', 'AFG', 'AUS', 'SL', 'IND'];
rsort($countries);
var_dump($countries);

$n = [2, 4, 1, 7, 3, 5, 8];
rsort($n);
var_dump($n);

// asort() - sort associative arrays in ascending order, according to the value

$peoples = [
    21 => 'Ashikur Rahman',
    33 => 'Shahina Akhter',
    25 => 'Arif Hossen',
    35 => 'Nasir Uddin',
    27 => 'Emon Islam',
];
asort($peoples);
var_dump($peoples);

// ksort() - sort associative arrays in ascending order, according to the key
ksort($peoples);
var_dump($peoples);

// arsort() - sort associative arrays in descending order, according to the value
arsort($peoples);
var_dump($peoples);

// krsort() - sort associative arrays in descending order, according to the key
krsort($peoples);
var_dump($peoples);