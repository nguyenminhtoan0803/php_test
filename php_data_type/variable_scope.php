<?php
$a = 1; 
$b = 2;
function Sum()
{   
    global $a, $b;
    //$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];

    $b = $a + $b;
} 

Sum();

function test()
{
    //bien static
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test();
    }
    $count--;
    echo $count;
}
   test();
?> 