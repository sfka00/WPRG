<?php
$wersja = $_POST["guzik"];
if ($wersja == "prosty") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $dzialanie = $_POST["dzialania"];

    if(!is_numeric($a) || !is_numeric($b)){
        echo "Bład! Wprowadz liczby";
        return;
    }

    switch($dzialanie){
        case "dodawanie":
            $wynik = $a + $b;
            break;

        case "odejmowanie":
            $wynik = $a - $b;
            break;

        case "mnozenie":
            $wynik = $a * $b;
            break;

        case "dzielenie":
            if($b != 0){
                $wynik = $a / $b;
                break;
            }
            else{
                echo "Nie mozna dzielic przez zero!";
                return;
            }
    }
    echo "Wynik: $wynik";

}
elseif ($wersja == "zaawansowany"){
    $c = $_POST["c"];
    $dzialanie2 = $_POST["dzialania2"];

    switch($dzialanie2){
        case "cos":
            $wynik = cos(deg2rad($c));
            break;
        case "sin":
            $wynik = sin(deg2rad($c));
            break;
        case "tan":
            $wynik = tan(deg2rad($c));
            break;
        case "bin2dec":
            if(strspn($c, "01") == strlen($c)){
                $wynik = bindec($c);
                break;
            }
            else{
                echo "Blad! niepoprawna liczba";
                return;
            }
        case "dec2bin":
            if(is_numeric($c)){
                $wynik = decbin($c);
                break;
            }
            else{
                echo "Blad! niepoprawna liczba";
                return;
            }

        case "dec2hex":
            if(is_numeric($c)){
                $wynik = dechex($c);
                break;
            }
            else{
                echo "Blad! niepoprawna liczba";
                return;
            }


        case "hex2dec":
            if(ctype_xdigit($c)){
                $wynik = hexdec($c);
                break;
            }
            else{
                echo "Blad! niepoprawna liczba";
                return;
            }
    }
    echo "Wynik: $wynik";
}


?>