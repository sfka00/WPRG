<?php
function funkcja2($a,$b,$c,$d){

    $tab= range($a,$b);
    $tab2 = range($c,$d);

    foreach($tab as $index => $value){
        $tab[$index] = $tab2[$index];
    }
    print_r($tab);
}

funkcja2(0,5,10,15)

?>