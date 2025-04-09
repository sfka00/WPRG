<?php

function sequences_n($a,$b,$c){
    echo "$a,$b,$c:";
    if($c<1){
        echo " N must be positive number!";
        return false;
    }
    if(!is_numeric($a) || !is_numeric($b) || !is_numeric($c) ){
        echo " Parameters must be numeric!";
        return false;
    }

    echo "<br>Arithmetic: ";
    for($i=$a, $d=0;$d<$c;$i+=$b,$d++){
        echo "$i, ";
    }
    echo "<br>";
    echo "Geometric: ";
    for($i=$a, $d=0;$d<$c;$i*=$b,$d++){
        echo "$i, ";
    }
}


sequences_n(5,2,10);
echo "<br><br>";

sequences_n(5,-2,10);
echo "<br><br>";
sequences_n(-5,2,10);
echo "<br><br>";
sequences_n(5,2.5,5);
echo "<br><br>";
sequences_n(5,2,-10);
echo "<br><br>";
sequences_n("start",2,10);
?>