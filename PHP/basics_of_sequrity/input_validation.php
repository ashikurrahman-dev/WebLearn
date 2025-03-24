<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Email is valid';
    }else{
        echo 'Email is invalid';
    }
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
        Email: <input type="text" name="email">
        <button type="submit">Submit</button>
    </form>
</body>
</html>