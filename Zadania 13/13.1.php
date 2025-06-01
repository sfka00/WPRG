<?php

interface Volume{
    function increaseVolume();
    function decreaseVolume();
}
interface Playable{
    function play();
    function stop();

}

class MusicPlayer implements Volume, Playable{
    private $volume;
    private $isPlaying;
    function __construct(){
        $this->volume = 0;
        $this->isPlaying = "not playing";
    }
    function increaseVolume(){
        if($this->volume >= 10){
            echo "Nie mozna zmienić głośności!";
        }
        else{
            $this->volume++;
        }
    }
    function decreaseVolume(){
        if($this->volume <= 0){
            echo "Nie mozna zmienić głośności!";
        }
        else{
            $this->volume--;
        }
    }
    function play(){
        $this->isPlaying = "is playing";


    }
    function stop(){
        $this->isPlaying = "not playing";

    }
    function getVolume(){
        return $this->volume;
    }
    function getStatus(){
        return $this->isPlaying;
    }
}
$obj = new MusicPlayer();


$obj->increaseVolume();
$obj->increaseVolume();
$obj->increaseVolume();
$obj->play();

echo "Volume: " . $obj-> getVolume() . "\n";
echo "Status: " . $obj-> getStatus() . "\n";
?>