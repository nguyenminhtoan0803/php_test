<?php
//cach 1 
// $array = array(
//     "foo" => "bar",
//     "bar" => "foo",
// );

// // Using the short array syntax
// $array = [
//     "foo" => "bar",
//     "bar" => "fooff",
// ];

// var_dump($array['bar']);

// $array = array(
//     "foo" => "bar",
//     "bar" => "foo",
//     100   => -100,
//     -100  => 100,
// );
// var_dump($array);

$array = array(
    1    => 'a',
    '1'  => 'b', // the value "a" will be overwritten by "b"
    1.5  => 'c', // the value "b" will be overwritten by "c"
    -1 => 'd',
    '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
    '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
    true => 'g', // the value "c" will be overwritten by "g"
    false => 'h',
    '' => 'i',
    null => 'j', // the value "i" will be overwritten by "j"
    'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
    2 => 'l', // the value "k" will be overwritten by "l"
);

var_dump($array[1.5]);

$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);

function getArray() {
    return array(1, 2, 3);
}

$secondElement = getArray()[1];

// or
list(, $secondElement) = getArray();

ini_set('', true);
ini_set('html_errors', false);
// Simple array:
$array = array(1, 2);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo "\nChecking $i: \n";
    echo "Bad: " . $array[$i] . "\n";
    echo "Good: " . $array[$i] . "\n";
    echo "Bad: {$array['$i']}\n";
    echo "Good: {$array[$i]}\n";
}
?> 