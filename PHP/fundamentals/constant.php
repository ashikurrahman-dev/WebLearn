<?php 

define('name', 'Ashikur Rahman');
echo name;

define('PI', 3.14);
echo PI;

// some predefined constant

echo PHP_VERSION; // 8.2.4
echo PHP_OS; // WINNT
echo PHP_INT_MAX; // 9223372036854775807
echo PHP_INT_MIN; // -9223372036854775808

// some magic constant

// The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.
echo __FILE__; // C:\Users\User\Herd\WebLearn\PHP\fundamentals\constant.php

// which directory this file
echo __DIR__; // C:\Users\User\Herd\WebLearn\PHP\fundamentals

echo __LINE__; // 24