<?php
//$tablica = [1,2,3,4,5,6,7,8,9];
//$n = 8;
function funkcja($tablica, $n){
    if($n>count($tablica) || $n<0){
        echo "BŁĄD";
        return;
    }
    array_splice($tablica, $n,0,"$");
    var_dump($tablica);
}

funkcja([1,2,3,4,5,6,7,8,9], 1);



?>
