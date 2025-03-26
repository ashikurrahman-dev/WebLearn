<?php 
require 'db.php';

$sql = "DELETE FROM users WHERE id = ?";
$stmt = $mysqli->prepare($sql);

$id = 4;

$stmt->bind_param("i", $id);
$stmt->execute();

echo "Deleted successfully.";