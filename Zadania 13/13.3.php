<?php
trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}
trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Person{
    use A,B{
        A::smallTalk insteadof B;
        B::bigTalk insteadof A;
    }
}

$obj = new Person();
$obj->smallTalk();
$obj->bigTalk();


?>