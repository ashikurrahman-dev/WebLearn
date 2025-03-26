<?php 
require 'db.php';

$sql = "UPDATE users SET name = ?, email = ? WHERE id = ?";
$stmt = $mysqli->prepare($sql);

$name = "Jahid Wahid";
$email = 'jahid@gmail.com';
$id = 7;

$stmt->bind_param('ssi', $name, $email, $id);
$stmt->execute();

echo "Data updated successfully.";