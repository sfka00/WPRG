<?php

function sum($liczba){
    if(!is_numeric($liczba)){
        echo "$liczba: Parameter must be numeric! ";
        return false;
    }
    $liczba = str_replace(".","",$liczba);
    $suma = 0;


    foreach(str_split(abs($liczba)) as $cyfra){
        $suma += $cyfra;
        if($suma > 10){
            echo "Suma cyfr wieksza niz 10, zatrzymuje program";
            return false;
        }
    }

    echo "$liczba: $suma";
}

sum(5210);
echo "<br>";
sum(-5210);
echo "<br>";
sum(5210.5);
echo "<br>";
sum("numbers");
?>