<?php
trait Speed{
    private $speed;
    public function increaseSpeed($value){
        $this->speed += $value;
    }
    public function decreaseSpeed($value){
        $this->speed -= $value;
    }
    public function getSpeed(){
        return $this->speed;
    }
    public function setSpeed($value){
        $this->speed = $value;

    }

}

class Car{
    use Speed;

    public function start(){
        $this->setSpeed(0);
        $this->increaseSpeed(10);
    }
}

$car = new Car();
$car->start();
echo "Predkość: " .$car->getSpeed();
?>