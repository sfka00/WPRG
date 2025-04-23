<?php
$tekst = $_POST["tekst"];
$count = 0;
for($i = 0; $i < strlen($tekst); $i++){
    if($tekst[$i] == "a" || $tekst[$i] == "e" || $tekst[$i] == "i" || $tekst[$i] == "o" || $tekst[$i] == "u"  ){
        $count++;
    }
}

echo "Liczba samoglosek: ". $count ."<br>";