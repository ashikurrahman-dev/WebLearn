<?php 

$data = array('a' => 1, 'b' => 2, 'c' => 3);

$json = json_encode($data);
echo $json;

$arr = json_decode($json);
print_r($arr);