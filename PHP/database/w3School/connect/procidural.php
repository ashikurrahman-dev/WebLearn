<?php 
$hostname = 'localhost';
$username = 'root';
$password = 'root';

$conn = mysqli_connect($hostname, $username, $password);
if(!$conn){
    die('Connection failed ' . mysqli_connect_error());
}
echo 'Connection successfully';