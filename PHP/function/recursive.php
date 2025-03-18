<?php
function countDown($count)
{
    echo $count;
    if ($count > 0) {
        countDown($count - 1);
    }
}
countDown(5);

// factorial number

function factorial($n)
{
    if ($n == 0 || $n == 1) {
        return 1;
    }
    return $n * (factorial($n - 1));
}

echo factorial(5);


// fibonacci 
function fibonacci($n)
{
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}
// echo fibonacci(10);
for ($i = 0; $i <= 10; $i++) {
    echo fibonacci($i) . " ";
}