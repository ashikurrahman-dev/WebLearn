<?php 

$x = 10;
$sum = fn($y) => $x + $y;
echo $sum(10);


$paymentMethods = [
    "credit_card" => fn($amount) => $amount * 0.98, // 2% fee
    "paypal" => fn($amount) => $amount * 0.97, // 3% fee
    "bank_transfer" => fn($amount) => $amount * 0.99, // 1% fee
];

$method = "paypal";
$amount = 1000;

$finalAmount = $paymentMethods[$method]($amount);
echo $finalAmount;

$cube = fn() => $x * $x * $x;
echo $cube();


$numbers = [1, 2, 3, 4, 5];
$square = array_map(fn($n) => $n * $n, $numbers);
print_r($square);