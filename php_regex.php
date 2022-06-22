<?php
/*$pattern = "/[\s,]+/";
$text = "My favourite colors are red, green and blue";
$parts = preg_split($pattern, $text);*/

$pattern = '/\d+/';
$message = 'PHP 8 was released on 11/26/2020';

echo preg_replace($pattern, '%d', $message);
?>