<?php 

$statusCode = 500;

$message = match($statusCode){
    200, 201 => "OK",
    319 => "Invalid Token",
    404 => "Not Found",
    500 => "Internal Error",
    default => "Unknown Status Code"
};
echo $message;

$age = 18;

$output = match(true){
    $age <= 2 => "Baby",
    $age <= 13 => "Child",
    $age <= 19 => "Teenager",
    $age >= 40 => "Old Adult",
    $age >= 19 => "Young Adult"
};

echo $output;
