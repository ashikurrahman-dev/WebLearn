<?php 
$lines = file('.env');
foreach($lines as $line){
    putenv(trim($line));
}
echo "App Name: " . getenv('APP_NAME');