<?php
// class Foo
// {
//     function Variable()
//     {
//         $name = 'Bar';
//         $this->$name(); // This calls the Bar() method
//     }
    
//     function Bar()
//     {
//         echo "This is Bar";
//     }

//     static $variable2 = 'static property';
//     static function Variable2()
//     {
//         echo 'Method Variable called';
//     }
// }

//     $foo = new Foo();
//     $funcname = "Variable";
//     $foo->$funcname();  // This calls $foo->Variable()

//     echo Foo::$variable2; // This prints 'static property'. It does need a $variable in this scope.
//     $variable = "Variable2";
//     Foo::$variable();  



    //non static method
    class myCls{
        public function  foo(){
            echo "foo function";
        }
        static public function bar(){
            echo "static bar function";
            
        }
    }

    $a = new myCls;
    $myf = "foo";
    $a->$myf();//works
    echo "\n";

    $a = [new myCls,"foo"];//works
    $a();
    echo "\n";
    //$a = ["myCls","foo"];//fatal error
    //$a();
    echo "\n";
    //$a = "myCls::foo";//fatal error
    //$a();
    echo "\n";

    //static method called with statically or nonstatically
    $b = new myCls;
    $myf = "bar";
    $b->$myf();//works
    echo "\n";

    $b = [new myCls,"bar"];//works
    $b();
    echo "\n";

    $b = "myCls::bar";//works
    $b();
    echo "\n";

    $b = ["myCls","bar"];//works
    $b();
    echo "\n"; 
?> 

