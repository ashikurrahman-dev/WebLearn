<?php
// array_all() - return boolean value
$num = [2, 4, 6, 3, 5, 8, 9];
$result = array_all($num, function ($value) {
    return $value % 2 === 0;
});
var_dump($result); // bool(false)

$array = [
    'a' => 'dog',
    'b' => 'cat',
    'c' => 'cow',
    'd' => 'duck',
    'e' => 'goose',
    'f' => 'elephant'
];

var_dump(array_all($array, function ($value, $key) {
    return strlen($value) < 12;
})); // bool(true)

// array_any() - return boolean value
var_dump(array_any($num, function ($value) {
    return $value % 2 === 0;
})); // bool(true)

// array_change_key_case() - Changes all keys in an array to lowercase or uppercase
var_dump(array_change_key_case($array, CASE_UPPER)); // all key convert upper case

// array_chunk() - Splits an array into chunks of arrays
var_dump(array_chunk($num, 2));
var_dump(array_chunk($array, 2));

// array_column() - Returns the values from a single column in the input array
$records = [
    [
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ],
    [
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ],
    [
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ],
    [
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    ]
];

$first_name = array_column($records, 'first_name', 'id');
print_r($first_name);

// array_combine — Creates an array by using one array for keys and another for its values
$code = [1, 2, 3];
$fruits = ['avocado', 'apple', 'banana'];
print_r(array_combine($code, $fruits));

// array_count_values — Counts the occurrences of each distinct value in an array
var_dump(array_count_values($num));

// array_diff — Computes the difference of arrays
$array1 = [1, 2, 3, 5];
$array2 = [3, 2, 4, 7];
print_r(array_diff($array1, $array2));

// array_fill — Fill an array with values
$f = array_fill(2, 4, 'Ashikur Rahman');
print_r($f);

// array_filter — Filters elements of an array using a callback function
print_r(array_filter($num, function ($value) {
    return $value % 2 == 0;
}));

// array_find — Returns the first element satisfying a callback function
print_r(array_find($array, function ($value) {
    return strlen($value) > 2;
}));

// array_flip — Exchanges all keys with their associated values in an array
print_r(array_flip($array));

var_dump(array_key_first($num));
var_dump($num[array_key_last($num)]);

var_dump(array_keys($records));
echo PHP_EOL;

// array_map — Applies the callback to the elements of the given arrays
$a = [1, 2, 4, 7, 10];
print_r(array_map(function ($n) {
    return $n * $n * $n;
}, $a));

$square = function ($n) {
    return $n * $n;
};
print_r(array_map($square, $a));

$eng = function ($n, $m) {
    return [$n => $m];
};
$n = [1, 2, 3, 4, 5];
$m = ['One', 'Two', 'Three', 'Four', 'Five'];
print_r(array_map($eng, $n, $m));

// array_merge — Merge one or more arrays
$c = array_merge($n, $m, $a);
echo "<pre>";
print_r($c);
echo "</pre>";

$g = ['one' => 1, 'two' => 2];
$h = [1 => 'one', 2 => 'two'];
print_r($g + $h);

echo array_pop($n);


// array_product — Calculate the product of values in an array
$v = [1, 2, 3, 4, 5];
echo array_product($v);

// array_reduce — Iteratively reduce the array to a single value using a callback function

function sum($a, $b)
{
    $a += $b;
    return $a;
}
function product($a, $b)
{
    $a *= $b;
    return $a;
}
function find_min($a, $b)
{
    return ($a < $b) ? $a : $b;

}

$number = [2, 1, 4, 5, 3];
var_dump(array_reduce($number, 'find_min')); // int(15)
var_dump(array_reduce($number, 'sum')); // int(15)
var_dump(array_reduce($number, 'product', 6));

// array_replace — Replaces elements from passed arrays into the first array
$r1 = [1, 2, 3];
$r2 = [3, 4, 5];
var_dump(array_replace($r1, $r2));

// array_reverse — Return an array with elements in reverse order
var_dump(array_reverse($r1));

// array_search — Searches the array for a given value and returns the first corresponding key if successful
var_dump(array_search(2, $r1));

// array_shift — Shift an element off the beginning of array
var_dump(array_shift($r2));

// array_slice — Extract a slice of the array

$l = [1, 2, 3, 4, 5, 6, 7, 8];
echo "<pre>";
var_dump(array_slice($l, 2, 4));
echo "</pre>";

// array_splice — Remove a portion of the array and replace it with something else

$b = [1, 2, 3, 4, 5, 6, 7, 8];
array_splice($b, 2, 4);
echo "<pre>";
var_dump($b);
echo "</pre>";

// array_sum — Calculate the sum of values in an array
$e = [1, 2, 3, 4, 5, 6, 7, 8];
echo array_sum($e);

// array_unique — Removes duplicate values from an array
$u = [1, 1, 2, 3, 4, 3, 2, 5, 8, 8, 6, 9, 7];
print_r(array_unique($u));

// array_unshift — Prepend one or more elements to the beginning of an array
array_unshift($u, 33, 35);
var_dump($u);

// array_values — Return all the values of an array
$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));

// compact — Create array containing variables and their values
$city = "Dhaka";
$state = "Pabna";
$country = "Bangladesh";

$location = ['city', 'state'];
$result = compact('country', $location);
echo "<pre>";
print_r($result);
echo "</pre>";

// count — Counts all elements in an array or in a Countable object
echo count($result);

// extract — Import variables into the current symbol table from an array

extract($result);
var_dump($result);

print_r(range(1, 10));