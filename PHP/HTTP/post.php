<?php
session_start();
$number1 = '';
$number2 = '';
$sum = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    
    $sum = (int) $number1 + (int) $number2;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="number1" id="" value="<?= htmlspecialchars($number1) ?>">
        <input type="text" name="number2" id="" value="<?= htmlspecialchars($number2) ?>">
        <button type="submit">Sum</button>
    </form>
    <h1>
        <?= $sum ?>
    </h1>
</body>
</html>