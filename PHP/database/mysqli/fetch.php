<?php
require 'db.php';

$sql = "SELECT * FROM users";
$stmt = $mysqli->query($sql);

while ($row = $stmt->fetch_assoc()) {
    echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Email: " . $row['email'] . " - Password: " . $row['password'] . "<br>";
}
