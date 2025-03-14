<?php 
$fruit = 'Apple';

switch($fruit){
    case 'Lichi':
        echo 'You choose Lichi.';
        break;
    case 'Apple':
        echo 'You choose Apple';
        break;
    case 'Banana':
        echo 'You choose Banana';
        break;
    default:
        echo 'Unknown';
}

$score = 89;
switch ($score) {
    case ($score >= 90 && $score <= 100):
        echo "A";
        break;
    case ($score >= 80 && $score < 90):
        echo "B";
        break;
    case ($score >= 70 && $score < 80):
        echo "C";
        break;
    case ($score >= 60 && $score < 70):
        echo "D";
        break;
    case ($score >= 0 && $score < 60):
        echo "F";
        break;
    default:
        echo "Invalid score";
}