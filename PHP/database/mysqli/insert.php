<?php 

require 'db.php';

try{
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    $name = "Golam Rabbi";
    $email = "rabbi@gamil.com";
    $password = "rabbi123";

    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();

    echo "Data inserted successfully.";
} catch(Exception $e){
    echo "Data inserted failed" . $e->getMessage();
}