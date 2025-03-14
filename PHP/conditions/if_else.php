<?php

$age = 21;

if ($age < 18) {
    echo 'Child';
} elseif ($age < 40) {
    echo 'Young';
} else {
    echo 'Old';
}

$userRole = 'Admin';
$isLogIn = true;

if ($isLogIn) {
    if ($userRole == 'Admin') {
        echo 'Welcome Admin, You have all access to the system.';
    } elseif ($userRole == 'Editor') {
        echo 'Welcome Editor, You can edit content.';
    } else {
        echo 'Welcome User, You have limited access.';
    }
} else {
    echo 'Please log in to access the system.';
}


$a = 20;
$b = 30;

if ($a > $b) {
    echo $a . " is greater than " . $b;

} elseif ($a == $b) {

    echo $a . " equals " . $b;
} else {

    echo $a . " is neither greater than or equal to " . $b;
}
