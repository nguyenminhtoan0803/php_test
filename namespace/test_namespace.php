<?php
namespace Foo\Bar{
    const FOO = 2;
    function foo() {}
    class foo
    {
        static function staticmethod() {}
    }

    /*echo __NAMESPACE__\foo::class;
    \Foo\Bar\foo::staticmethod();
    echo FOO;*/

    function strlen(){

    }

    const INT_ALL = 3;
    class Exception{

        public function __construct(string $error)
        {
            $this->error = $error;
        }

        public function __set(string $name, $value): void
        {
            echo $name . ' ' . $value;
        }

        public function __get(string $name)
        {
            return $this->error;
        }
    }
}

namespace Country_name{
    class Mexico {
        public function __construct()
        {
            echo __METHOD__,"<br>";
        }
    }
//$a = 'Country_Name\Mexico';
//$a = "Country_Name\Mexico";
$a = '\Country_Name\Mexico';
//$a = "\Country_Name\Mexico";
//$a = "\\Country_Name\\Mexico";

    $o = new $a;
}


namespace MyApp {
    class App {
        static function app(){
            echo 'dd';
        }
    }
    $obj = namespace\App::app();


    $obj = __NAMESPACE__.'\App';
    $obj::app();
}

namespace Food{

    use MyApp\App\app as Another;

// this is the same as use My\Full\NSname as NSname
    use My\Full\NSname;

// importing a global class
    use ArrayObject;

// importing a function
    use function My\Full\functionName;

// aliasing a function
    use function My\Full\functionName as func;

// importing a constant
    use const My\Full\CONSTANT;

    $obj = new namespace\Another; // instantiates object of class foo\Another
    $obj = new Another; // instantiates object of class My\Full\Classname
    NSname\subns\func(); // calls function My\Full\NSname\subns\func
    $a = new ArrayObject(array(1)); // instantiates object of class ArrayObject
// without the "use ArrayObject" we would instantiate an object of class foo\ArrayObject
    func(); // calls function My\Full\functionName
    echo CONSTANT;
}

?>