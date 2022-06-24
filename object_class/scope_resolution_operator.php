<?php
class MyClass {
    const CONST_VALUE = 'A constant value';

    protected function myFunc(){
        echo "MyClass::myFunc()\n";
    }
}

/* $classname = new (MyClass::class);
 echo $classname::CONST_VALUE;

 echo MyClass::CONST_VALUE;*/

class OtherClass extends MyClass
{
    public static $my_static = 'static var';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }

    public function myFunc()
    {
        // But still call the parent function
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$classname = new (OtherClass::class);
$classname::doubleColon();

OtherClass::doubleColon();
$classname->myFunc();
?>