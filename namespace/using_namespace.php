<?php

/*namespace My\Full {
    class ClassName{}
    class NSname{}
    class ArrayObject{}
    function functionName(){}
    const CONSTANTL = 10;
}

namespace foo{

    use My\Full;
    use ArrayObject;

    use function My\Full\functionName;

    use function My\Full\functionName as func;
    use const My\Full\CONSTANTL;
    $obj = new Another; // instantiates object of class My\Full\Classname
    $obj = new \Another; // instantiates object of class Another
    $obj = new Another\thing; // instantiates object of class My\Full\Classname\thing
    $obj = new \Another\thing; // instantiates object of class Another\thing
    NSname\subns\func();

    $a = new ArrayObject(array(1));

    func(); // calls function My\Full\functionName
    echo CONSTANTL;
}*/

namespace foo;

use blah\blah as foo;

$a = new my\name(); // instantiates "foo\my\name" class
foo\bar::name(); // calls static method "name" in class "blah\blah\bar"
my\bar(); // calls function "foo\my\bar"
$a = my\BAR; // sets $a to the value of constant "foo\my\BAR"
?>