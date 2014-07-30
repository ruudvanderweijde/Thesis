<?php

class A {
    protected static $p = 4;
    public function readP()
    {
        echo $this::$p;
        $a = new A;
        echo $a::$p;
    }
}

class B extends A {
    public function readP() {

        echo $this::$p;
        $b = new A;
        echo $b::$p;
    }
}

class C {
    public function readP() {
        $b = new A;
        echo $b->p;
    }
}

$a = new A;
$a->readP();

//this fails:
    //echo $a->p;

$b = new B;
$b->readP();

$c = new C;
$c->readP();
