<?php 

function validateInput($input){
    return trim(htmlspecialchars($input));
}
function validateEmail($input){
    if(!filter_var($input, FILTER_VALIDATE_EMAIL)){
        throw new Exception("Enter a valid email");
    }
}
function isEmailUnique($email, $pdo){
    $stmt = $pdo->prepare("SELECT 1 FROM users where email = :email LIMIT 1");
    $stmt->execute(['email' => $email]);

    return !$stmt->fetch();
}