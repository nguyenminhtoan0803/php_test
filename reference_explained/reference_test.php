<?php

function foo(&$var): void
{
}

foo($a); // $a is "created" and assigned to null

$b = array();
$b['c'] = '3';
foo($b['c']);
//var_dump(array_key_exists('b', $b)); // bool(true)

$c = new StdClass;
foo($c->d);
//var_dump(property_exists($c, 'd')); // bool(true)

$var1 = "Example variable";
$var2 = "";

function global_references($use_globals): void
{
    global $var1, $var2;
    if (!$use_globals) {
        $var2 =& $var1; // visible only inside the function
    } else {
        $GLOBALS["var2"] =& $var1; // visible also in global context
    }
}

function food(&$var): string
{
    $var =& $GLOBALS["var1"];
    return $var;
}
echo food($bar);