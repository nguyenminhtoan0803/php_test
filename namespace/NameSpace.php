<?php
namespace namespacename;
class classname
{
    function __construct()
    {
        echo __METHOD__,"\n";
    }
}
function funcname()
{
    echo __FUNCTION__,"\n";
}

function get($classname)
{
    $a = __NAMESPACE__ . '\\' . $classname;
    return new $a;
}

    const constname = "namespaced";

    /*namespace MyProject;

    use blah\blah as mine; // see "Using namespaces: Aliasing/Importing"

    blah\mine(); // calls function MyProject\blah\mine()
    namespace\blah\mine(); // calls function MyProject\blah\mine()

    namespace\func(); // calls function MyProject\func()
    namespace\sub\func(); // calls function MyProject\sub\func()
    namespace\cname::method(); // calls static method "method" of class MyProject\cname
    $a = new namespace\sub\cname(); // instantiates object of class MyProject\sub\cname
    $b = namespace\CONSTANT; // assigns value of constant MyProject\CONSTANT to $b*/

  /*  $a = '\namespacename\classname';
    $obj = new $a; // prints namespacename\classname::__construct
    $a = 'namespacename\classname';
    $obj = new $a; // also prints namespacename\classname::__construct
    $b = 'namespacename\funcname';
    $b(); // prints namespacename\funcname
    $b = '\namespacename\funcname';
    $b(); // also prints namespacename\funcname
    echo constant('\namespacename\constname'), "\n"; // prints namespaced
    echo constant('namespacename\constname'), "\n"; // also prints namespaced*/

 //   echo __NAMESPACE__; // outputs "MyProject"

    namespace MyApp;

    class App {
        /**
         * @return string
         */
         static function app() {
            echo 'hello app';
        }
    }

    // this will work:
    //$obj = new MyApp\App::app();

    // however this will work:
    $obj = __NAMESPACE__ . '\App';
    $obj::app();



    namespace foo;

    use My\Full\Classname as Another;

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
    echo constant('MyApp');

?> 