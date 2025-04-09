<?php

function mnozeniemacierzy($a,$b){
    $wierszea = count($a);
    $kolumnya = count($a[0]);

    $wierszeb = count($b);
    $kolumnyb = count($b[0]);

    if($kolumnya != $wierszeb){
        echo "Nie mozna pomnmozyc tych macierzy! <br>";
        return false;

    }

    $c=[];
    for($i = 0; $i < $wierszea; $i++){
        for($j = 0; $j < $kolumnyb; $j++){
            $c[$i][$j] = 0;
        }
    }
    for($i = 0; $i < $wierszea; $i++){
        echo "[";
        for($j = 0; $j < $kolumnyb; $j++){
            for($k = 0; $k < $kolumnya; $k++){
                $c[$i][$j] += $a[$i][$k] * $b[$k][$j];
            }

            echo $c[$i][$j];
            echo " ";
        }
        echo "]<br>";
    }
}

$a= [
    [1,2,3],
    [4,5,6],
    [7,8,9],
];

$b= [
    [1,2],
    [3,4],
    [5,6],
];
echo "wymnozona macierz: <br>";
mnozeniemacierzy($a,$b);

?>