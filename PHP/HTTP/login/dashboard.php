<?php 
session_start();

$username = $_SESSION['username'];
if(isset($username)){
    echo "Welcome to your dashboard, $username";
}