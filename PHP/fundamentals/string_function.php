<?php

// mb_chr — Return character by Unicode code point value
$a = [65, 89, 99];
foreach ($a as $value) {
    echo mb_chr($value);
} // AYc

// mb_convert_case — Perform case folding on a string

$word = 'this is bangladesh';
echo mb_convert_case($word, MB_CASE_TITLE, 'UTF-8');
echo mb_convert_case($word, MB_CASE_UPPER);
echo mb_convert_case($word, MB_CASE_FOLD);


// bin2hex — Convert binary data into hexadecimal representation

$hex = bin2hex('Hello World!');
echo $hex;
echo hex2bin($hex);

// chr — Generate a single-byte string from a number

$str = chr(240) . chr(159) . chr(144) . chr(152);
echo $str; // 🐘

echo crypt('hello', 'rgfe654yhft65');

$f = ' Hello World ';
$r = explode(" ", $f);
// print_r($r);

$name = '<b>Ashik</b>';
if (htmlspecialchars($name)) {
    echo "Invalid";
}
echo trim($f);

echo md5($f);

echo number_format(297835689214782);

echo sha1('Ashik');

$string = 'The brown fox jump over the lazy dog';

if (str_contains($string, 'fox')) {
    echo "Found it.";
}

// echo str_decrement('B'); // A

echo str_pad('Ashikur Rahman', strlen('Ashikur Rahman') + 6, "~", STR_PAD_BOTH);

echo str_repeat('~*~', 10);

echo str_shuffle($string);

print_r( str_split('skdhgf kfh uh', 4));

echo str_word_count($string);

$mystring = 'a bc';
$findme   = 'a';
$pos = strpos($mystring, $findme);
if($pos){
    echo "Found It";
} else{
    echo 'Not Found';
}

echo strrev('Hello');

$text = "The quick brown fox jumped over the lazy dog.";
$newtext = wordwrap($text, 20, "<br />\n");

echo $newtext;