<?php

require 'db.php';

$sql = "UPDATE users SET email = :email WHERE id = :id";
$stmt = $pdo->prepare($sql);

$id = 3;
$newEmail = "hasanmahmud356@gmail.com";

$stmt->execute([
    ':id' => $id,
    ':email' => $newEmail
]);
echo "Data updated successfully";