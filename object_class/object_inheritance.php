<?php

/*class Foo
{
        public function printItem($string)
        {
            echo 'Foo: ' . $string . PHP_EOL;
        }

        public function printPHP()
        {
            echo 'PHP is great.' . PHP_EOL;
        }
    }

    class Bar extends Foo
    {
        public function printItem($string)
        {
            echo 'Bar: ' . $string . PHP_EOL;
        }
    }

    $foo = new Foo();
    $bar = new Bar();
    $foo->printItem('baz'); // Output: 'Foo: baz'
    $foo->printPHP();       // Output: 'PHP is great'
    $bar->printItem('baz'); // Output: 'Bar: baz'
    $bar->printPHP();

    class MyDateTime extends DateTime
    {
        public function modify(string $modifier): ?DateTime { return null; }
    }// Output: 'PHP is great'

    $myDate = new MyDateTime();

    echo $myDate->modify('22/2/2022');*/

class A {
    private $a   = 'private';
    protected $b = 'protected';
    public $c    = 'public';
    static $d    = 'static';
    public function __construct()
    {
        $this->e = 'constructed';
    }
    public function __set($property, $value)
    {
        echo ' set ' . $property . '=' . $value;
        $this->$property=$value;
    }
    public function __get($property)
    {
        echo ' get ' . $property;
        $this->$property = 'dynamic';  // invokes __set() !!
        return $this->$property;
    }
}

class B extends A
{
    public function constructMe()
    {
        $this->e = 'constructed2';
    }
}

class C extends B
{
    public function __construct()
    {
        parent::constructMe();
    }
}

    echo " \n";
    $a = new A();
    $b = new B();
    echo " \n";
    echo ' B:c='.$b->c;
    echo " \n";
    echo ' B:d=' .$b->d;
    echo " \n";

    $c = new C();
    echo " \n";

    print_r($a);
    print_r($b);
    print_r($c);

    print_r(A::$d);
    print_r(B::$d);
    print_r(C::$d);

    echo 'A class: ';
    $R = new reflectionclass('A');
    print_r($R->getdefaultproperties());
    print_r($R->getstaticproperties());
    echo 'B class: ';
    $R = new reflectionclass('B');
    print_r($R->getdefaultproperties());
    print_r($R->getstaticproperties());

?>