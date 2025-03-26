<?php
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'test';


$mysqli = new mysqli($hostname, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

