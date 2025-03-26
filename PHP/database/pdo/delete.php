<?php

require 'db.php';
try {
    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    $id = 5;
    $stmt->execute([':id' => $id]);

} catch (PDOException $e) {
    echo $e->getMessage();
}