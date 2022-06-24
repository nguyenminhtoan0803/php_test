<?php
class Foo
{
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    const MY_VARIABLE = 'my_variable';
    public static $my_static = 'bar';
    public function fooStatic() {
        ;
        return parent::$my_static . "\n" . self::$my_static;

    }
}
    print Foo::$my_static . "\n";

    $foo = new Foo();
    print $foo->staticValue() . "\n";
    //print $foo->my_static . "\n";      // Undefined "Property" my_static

    print $foo::$my_static . "\n";
    $classname = 'Foo';
    print $classname::$my_static . "\n";

    print Bar::$my_static . "\n";
    $bar = new Bar();
    echo $bar->fooStatic() . "\n";
?>