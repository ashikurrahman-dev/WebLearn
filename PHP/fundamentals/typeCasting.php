<?php 

$a = 10;
$b = (bool) $a;
var_dump($a); // int
var_dump($b); // outputs: bool(true)

$x = 10;
var_dump((string) $x); // outputs: string(2) "10"

$str = "Ashik";
var_dump((array) $str); // convert to array