<?php
try {
    $error = 'Always throw this error';
    throw new Exception($error);

    // Code following an exception is not executed.
    echo 'Never executed';
}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getCode(), "\n";
}

// Continue execution
echo 'Hello World';

function exception_handler($exception)
{
    echo "Uncaught exception: ", $exception->getMessage(), "\n";
}

set_exception_handler('exception_handler');
throw new Exception('Uncaught');

echo "Not Executed\n";
?>