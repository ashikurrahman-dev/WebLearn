<?php 

session_start();
$_SESSION['username'] = 'ashikur-rahman';
$_SESSION['email'] = 'ashikurrahman@gmail.com';

echo 'Session variable are set!';

echo $_SESSION['username'];