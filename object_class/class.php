<?php
    class A
    {
        function foo()
        {
            if (isset($this)) {
                echo '$this is defined (';
                echo get_class($this);
                echo ")\n";
            } else {
                echo "\$this is not defined.\n";
            }
        }
    }

    class B
    {
       static  function bar()
        {
           // A::foo();
        }
    }

    $a = new A();
    $a->foo();

    //A::foo();

    $b = new B();
    $b->bar();

    B::bar();

    class ClassA extends \stdClass {}
    class ClassB extends \stdClass {}
    class ClassC extends ClassB {}
    class ClassD extends ClassA {}

    function getSomeClass(): string
    {
        return 'ClassA';
    }

    $b = new ('Class' . 'B');

    $d = new (ClassD::class);
    
    var_dump(new (getSomeClass()));
    var_dump(new ('Class' . 'B'));
    var_dump(new ('Class' . 'C'));
    var_dump(new (ClassD::class));

?> 