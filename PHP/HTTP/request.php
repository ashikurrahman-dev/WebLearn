<?php 
session_start();
$name = $_REQUEST['name'] ?? '';
echo $name;

$email = $_REQUEST['email'] ?? '';
echo $email;
echo $_SESSION['email'] ?? '';
?>
<form action="" method="post">
    <input type="text" name="email">
    <button type="submit">Submit</button>    
</form>