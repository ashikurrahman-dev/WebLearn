<?php

$fileName = 'db.txt';
$data = "Hello world!\nThis is text";

$result = file_put_contents($fileName, $data);
if($result === false){
    echo 'Could not write';
} else{
    echo "Data write successfully";
}