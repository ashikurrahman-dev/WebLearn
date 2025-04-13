<?php 

require("config.php");

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM users WHERE id=:id");
$stmt->execute(["id"=> $id]);

header('Location: ' . BASE_URL .'index.php');
exit();
