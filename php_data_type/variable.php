<?php
    $foo = 'Bob';              // Assign the value 'Bob' to $foo
    $bar = &$foo;              // Reference $foo via $bar.
    $bar = "My name is $bar";  // Alter $bar...
    echo $bar;
    echo $foo;                 // $foo is altered too.

    $foo = 25;
    $bar = &$foo;      // This is a valid assignment.

    function test()
    {
    return 25;
    }

    $bar = &test();    // Invalid.
?> 