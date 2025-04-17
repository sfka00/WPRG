<?php


$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$email = $_POST['email'];
$haslo = $_POST['haslo'];
$haslop = $_POST['haslop'];
$wieku = $_POST['wiek'];

echo "Imię: $imie <br> Nazwisko: $nazwisko<br> Adres email: $email <br> Hasło: $haslo <br> Potwierdzone Hasło: $haslop <br> Wiek: $wieku <br>";

if($haslo != $haslop){
    echo "Blad! hasla nie sa takie same!";
    return;
}

// z polecenia chyba o to chodzilo by przesylalo wyniki tutaj i wyswietlalo je?

?>