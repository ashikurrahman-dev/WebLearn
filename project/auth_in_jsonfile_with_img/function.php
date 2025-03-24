<?php 
session_start();
define('DB_FILE', 'db.json');
define('UPLOADS_DIR', 'uploads/');

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
    $targetFile = UPLOADS_DIR . basename($file('name'));

    if(move_uploaded_file($file['temp_name'], $targetFile)){
        return $targetFile;
    }
    return null;
}