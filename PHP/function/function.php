<?php

function message()
{
    return "Hello world!";
}
echo message();

function great($name)
{
    return "Good Morning, $name";
}
echo great('Ashikur Rahman');
echo great('Hasan Mahmud');

function addSomeString(&$string)
{
    $string .= 'Something.';
}
$string = "This is string, ";
addSomeString($string);
echo $string;

function getAppleColor($color = 'Red')
{
    return "Apple color is $color.";
}
echo getAppleColor();

// named arguments
function createUser($name, $age, $email, $country = "Bangladesh")
{
    return [
        'name' => $name,
        'age' => $age,
        'email' => $email,
        'country' => $country
    ];
}
$user = createUser(
    name: 'Ashikur Rahman',
    age: 21,
    email: 'ashikurrahman7133@gmail.com'
);
print_r($user);

// type hinting
function multiply(int $a, int $b): int{
    return $a * $b;
}
echo multiply(4, 6);


function sum(...$nums){
    return array_sum($nums);
}

echo sum(2, 5, 7, 9, 7);