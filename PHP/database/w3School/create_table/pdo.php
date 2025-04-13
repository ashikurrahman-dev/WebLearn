<?php 

$dsn = "mysql:host=localhost;dbname=test";
$username = 'root';
$password = 'root';

try{
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $sql = "CREATE TABLE IF NOT EXISTS user (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(55) NOT NULL,
        roll INT NOT NULL,
        phone VARCHAR(20) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $pdo->exec($sql);
    echo "TABLE CREATED SUCCESSFULLY.";
} catch(PDOException $e){
    echo $e->getMessage();
}