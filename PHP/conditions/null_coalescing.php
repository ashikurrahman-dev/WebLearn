<?php 

$name = "Ashikur Rahman";

echo $name ?? "Guest";

$user = null;
$nickname = null;
$default = "User123";

echo $user ?? $nickname ?? $default; // Output: User123


// ternary
echo (5 % 2 === 0) ? "Even" : "Odd";

$mark = 55;
echo ($mark >= 80) ? "A" : (($mark >= 60) ? "B" : (($mark >= 40) ? "C" : "F"));