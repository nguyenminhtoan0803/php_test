<?php
trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }

    abstract public function getWorld();
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}


class MyHelloWorld {
   /* use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }*/
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
    public function getWorld() {
        return $this->bigTalk();
    }
}

$o = new Aliased_Talker();
$o->smallTalk();
$o->bigTalk();
$o->talk();
?>