<?php 
require 'db.php';

try{
    $sql = "SELECT * FROM users";
    $stm = $pdo->query($sql);
    
    while($row = $stm->fetch()){
        echo "ID: " . $row['id'] . " - Name: " . $row['name'] ." - Email: " . $row['email'] . "<br>";
    }
}catch(PDOException $e){
    echo $e->getMessage();
}