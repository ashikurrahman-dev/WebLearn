<?php 
define("BASE_URL", "http://weblearn.test/project/simple_crud/");
$dsn = "mysql:host=localhost;dbname=simple_crud";
$username = 'root';
$password = 'root';

try{
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    
    $db = "CREATE DATABASE IF NOT EXISTS simple_crud";
    $pdo->exec($db);

    $table = "CREATE TABLE IF NOT EXISTS users(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(55) NOT NULL,
        age INT NOT NULL,
        email VARCHAR(60) UNIQUE NOT NULL,
        phone VARCHAR(20) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $pdo->exec($table);

} catch(PDOException $e){
    echo $e->getMessage();
}