<?php
function sayHello($name)
{
    return "Hello, $name";
}

function greetUser($cb, $name)
{
    return $cb($name);
}
echo greetUser("sayHello", "Ashik");


function processNumber($num, $cb)
{
    return $cb($num);
}
$square = processNumber(5, function ($n) {
    return $n * $n;
});
echo $square;


$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$cube = array_map(function($n){
    return $n * $n * $n;
}, $arr);
print_r($cube);