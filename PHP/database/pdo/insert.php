<?php 
require 'db.php';
try{
    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
    $stmt = $pdo->prepare($sql);
    
    $name = "Hasan Mahmud";
    $email = "hasan@gmail.com";
    $password = '112233';
    
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':password' => $password
    ]);
    echo "Data inserted successfully.";
} catch(PDOException $e){
    echo "Data inserted failed " . $e->getMessage();
}