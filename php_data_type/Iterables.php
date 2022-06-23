<?php
#cach 1
function foo(iterable $iterable) {
    foreach ($iterable as $value) {
        // ...
    } 
}
#cach 2
// function foo(iterable $iterable = []) {
//     // ...
// }
#cach 3
function bar(): iterable {
    return [1, 2, 3];
}
#cach 4
function gen(): iterable {
    yield 1;
    yield 2;
    yield 3;
}


class Foo {
    public $a = 1;
    public $b = "Helo";
};

$bar = new Foo();

foreach($bar as $elm) {
    echo $elm . ' ';
}

?>