<?php 
$greeting = function($name){
    return "Hello, $name";
};
echo $greeting("Ashikur Rahman.");

$message = "Hello, My name is Ashik. I am 21 years old.";
$example = function() use ($message){
    return $message;
};
echo $example();

function applyFunction($func, $value){
    return $func($value);
}

$square = function($n){
    return $n * $n;
};
echo applyFunction($square, 5);

$operations = [
    'sum' => function($a, $b){
        return $a + $b;
    },
    'multiply' => function($a, $b){
        return $a * $b;
    }
];

echo $operations['sum'](5, 3);
echo $operations['multiply'](5, 3);


$paymentMethods = [
    "credit_card" => function($amount) { return $amount * 0.98; }, // 2% fee
    "paypal" => function($amount) { return $amount * 0.97; }, // 3% fee
    "bank_transfer" => function($amount) { return $amount * 0.99; }, // 1% fee
];

$method = "paypal";
$amount = 1000;

$finalAmount = $paymentMethods[$method]($amount);
echo $finalAmount;


$taxRate = 0.10;

$calculateTotal = function($subTotal) use ($taxRate){
    return $subTotal + ($subTotal * $taxRate);
};

echo $calculateTotal(1000);