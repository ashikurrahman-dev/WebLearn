<?php 
$dsn = "mysql:host=localhost;dbname=test";
$username = "root";
$password = "root";

try{
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    $sql = "SELECT * FROM user WHERE name=:name";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => 'Hasan Mahmud']);

    $data = $stmt->fetchAll();
    foreach ($data as $row){
        echo "Name : " . $row['name'] . "<br>";
        echo "Roll : " . $row['roll'] . "<br>";
        echo "Phone : " . $row['phone'] . "<br>";
    }

} catch(PDOException $e){
    echo $e->getMessage();
}
