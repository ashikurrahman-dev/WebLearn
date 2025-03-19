<?php
// include('example.txt');
$content = file_get_contents("example.txt"); 
if ($content) {
    echo $content;
    // fclose($file);
} else {
    echo 'Error opening file';
}