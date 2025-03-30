<?php 
$hostname = 'localhost';
$username = 'root';
$password = 'root';

$conn = new mysqli($hostname, $username, $password);

if($conn->connect_error){
    die('Connection failed. ' . $conn->connect_error);
}

// create database 
$sql = "CREATE DATABASE myDB";
if($conn->query($sql) === true){
    echo 'Database created successfully.';
} else{
    echo 'Database error: ' . $conn->error;
}