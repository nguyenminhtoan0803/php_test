<?php

/**
 * @throws Exception
 */
function inverse($x): float|int
{
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1 / $x;
}

try {
    echo inverse(5) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
} finally {
    echo "First finally.\n";
}

try {
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
} finally {
    echo "Second finally.\n";
}

// Continue execution
echo "Hello World\n";

class MyException extends Exception {

}

class MyOtherException extends Exception {

}

class Test
{
    public function testing(){
        try{
            try{
                throw new MyException('exceptioon');
            }catch (MyException | MyOtherException $e){
                throw $e;
            }
        }catch (Exception $e){
            var_dump(get_class($e));
        }
    }
}


class SpecificException extends Exception {}

function test() {
    do_something_risky() or throw new Exception('It did not work');
}

try {
    test();
}catch (Exception $e){
    print $e->getMessage();
}
?>