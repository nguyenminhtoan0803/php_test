<?php
// Get the first character of a string
$str = 'This is a test.';
$first = $str[0];

// Get the third character of a string
$third = $str[2];

// Get the last character of a string.
$str = 'This is still a test.';
$last = $str[strlen($str)-1];

// Modify the last character of a string
$str = 'Look at the sea';
$str[strlen($str)-1] = 'e';

$str = 'abc';

var_dump($str['1']);
var_dump(isset($str['1']));

// var_dump($str['1.0']);
// var_dump(isset($str['1.0']));

// var_dump($str['x']);
// var_dump(isset($str['x']));

var_dump($str['1x']);
var_dump(isset($str['1x']));
 
?> 