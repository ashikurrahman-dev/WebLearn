<?php 
session_start();
$_SESSION['username'] = 'ashik21';
$_SESSION['password'] = '1122';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    // die($password);
    if($username === $_SESSION['username'] && $password === $_SESSION['password']){
        header('Location: dashboard.php');
    } else{
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name="username">
        Password: <input type="text" name="password">
        <button type="submit">Submit</button>
    </form>
    <?= $error ?? '' ?>
</body>
</html>