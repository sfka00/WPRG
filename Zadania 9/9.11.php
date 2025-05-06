<?php
$birthdate = $_GET["birthdate"];
echo "Twoja data urodzenia: " . $birthdate . "<br>";
echo "<br>Dzien tygodnia: " . dzientygodnia($birthdate);
echo "<br>Ukonczone lata: ".ukonczonelata($birthdate);
echo "<br>Ilosc dni do urodzin: ".dnidourodzin($birthdate);

function dzientygodnia($date){
    $dni = ['Niedziela','Poniedzialek','Wtorek','Środa','Czwartek','Piątek','Sobota'];
    $timestamp = strtotime($date);
    return $dni[date("w", $timestamp)];
}

function ukonczonelata($date){
    $birthdate = new DateTime($date);
    $today = new DateTime();
    $age = $today->diff($birthdate)->y;
    return $age;
}

function dnidourodzin($date){
    $birthdate = new DateTime($date);
    $today = new DateTime();
    $nextbirthday = new DateTime($today->format('Y') . '-' . $birthdate->format('m-d'));
    if ($nextbirthday < $today) {
        $nextbirthday->modify('+1 year');
    }
    return $today->diff($nextbirthday)->days;
}
?>
