<?php
// Database configuration
$host = 'localhost';
$dbname = 'test';
$username = 'root';
$password = 'root';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO user (name, roll, phone) VALUES (:name, :roll, :phone)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'name' => 'Ashik',
        'roll'=> 223454,
        'phone'=> '012378490539',
    ]);
    
    echo "Data added successful!";
} catch (PDOException $e) {
    // Handle connection error
    echo "Database connection failed: " . $e->getMessage();
}
?>