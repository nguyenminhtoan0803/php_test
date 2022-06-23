<?php
// class C {}
// class D extends C {}

// // This doesn't extend C.
// class E extends C {}

// function f(C $c) {
//     echo get_class($c)."\n";
// }

// f(new C);
// f(new D);
// f(new E);

interface I { public function f(); }
class C implements I { public function f() {} }

// This doesn't implement I.
class E extends C{}

function f(I $i) {
    echo get_class($i)."\n";
}

f(new C);
f(new E);
?> 