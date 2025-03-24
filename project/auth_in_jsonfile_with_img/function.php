<?php 
session_start();
define('DB_FILE', 'db.json');
define('UPLOADS_DIR', 'uploads/');

// validate input
function validateInput($input){
    return trim(htmlspecialchars($input));
}

// validate email
function validateEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        throw new Exception('Email is invalid.');
    }
}

function validateNumber($number){
    if(!preg_match("/^[0-9]+$/" ,$number)){
        throw new Exception('Invalid number. Please enter a valid integer.');
    }
}

// Function to read data form db.json
function readData(){
    if(!file_exists(DB_FILE)){
        file_put_contents(DB_FILE, '[]');
    }
    return json_decode(file_get_contents(DB_FILE), true);
}

// Function to write data
function writeData($data){
    file_put_contents(DB_FILE, json_encode($data, JSON_PRETTY_PRINT));
}

function isEmailUnique($email){
    $users = readData();

    foreach($users as $user){
        if($user['email'] === $email){
            return false;
        }
    }
    return true;
}

function uploadsImage($file){

    $targetFile = UPLOADS_DIR . basename($file['name']);

    if(move_uploaded_file($file['tmp_name'], $targetFile)){
        return $targetFile;
    }
    return null;
}