<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$db = 'test';

$conn = new mysqli($hostname, $username, $password, $db);
if($conn->connect_error){
    die("Error ");
}

$sql = "CREATE TABLE IF NOT EXISTS post (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if($conn->query($sql) === true){
    echo 'Table created successfully.';
} else{
    die('ERROR');
}