<?php 

function a($a, $b){
    $c = $a + $b;
    $d = $a - $b;
    $sum = b($c, $d);
    echo $sum;
}
function b($a, $b){
    return $a + $b;
}

a(20, 10);