<?php

$n = [1, 2, 30, 4, 5];



$min = array_reduce($n, function($a, $b){
    return $a * $b;
}, $n[0]);
echo $min;

// $max = $n[0];
// foreach($n as $v){
//     if($max < $v){
//         $max = $v;
//     }
// }
// // echo $max;