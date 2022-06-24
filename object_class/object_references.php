<?php
class clsA{
    public $propA = 2;
}
class clsB{
    public $propB = 3;
}
//------------
$a = new clsA();
$c = $a; //Both of these vars now refer to the same object-instance (an assignment-by-reference).
$c->propA = 22; //Use one of the vars to change the instance's property.
echo $c->propA . "\n"; //output: 22
echo $a->propA . "\n"; //output: 22
//------------
$b = new clsB();
$a = $b; //Before this assignment, both $c and $a referred to the same object instance; this is no longer the case after $a is switched to reference the instance of clsB.
echo $c->propA . "\n"; //output: 22 (this works because $c is still a reference to the object instance of type clsA)
echo $c->propB . "\n"; //output: "Undefined property: clsA::$propB" (did not work because $c is not a reference to the object instance of type clsB)
//------------
//Start over and use the "&" operator...
$a = new clsA();
$b = new clsB();
$c = &$a; //<--$c will refer to whatever $a currently and "futuristically" refers to (also a type of assignment-by-reference); in C-language, you would think of this as copying a pointer.
echo $c->propA . "\n"; //output: 2
$a = $b; //This assignment causes $c to refer to a new/different object.
echo $c->propA . "\n"; //output: "Undefined property: clsB::$propA" (does not work since $c no longer refers to the object instance of type clsA)
echo $c->propB . "\n"; //output: 3 (works since $c now refers to the object instance of type clsB)
//------------
?>