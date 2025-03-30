<?php 
$dsn = 'mysql:host=localhost;dbname=test';
$username = 'root';
$password = 'root';

try{
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    echo 'Connection successfully';
} catch(PDOException $e){
    echo 'COnnection failed ' . $e->getMessage();
}
