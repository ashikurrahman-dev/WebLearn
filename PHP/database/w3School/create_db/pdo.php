<?php 

$hostname = 'mysql:host=localhost';
$username = 'root';
$password = 'root';

try{
    $pdo = new PDO($hostname, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    $sql = "CREATE DATABASE myDBPDO";
    $pdo->exec($sql);
    echo "Database created successfully";
} catch(PDOException $e){
    echo $e->getMessage();
}