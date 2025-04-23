<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zad8.</title>
    <style>
        body{
            font-family: Calibri;
        }
        form{
            margin:10px;
            padding:10px;
        }
    </style>
</head>
<body>
<form method="POST">
    Wprowadz ciag znakow: <input type="text" name="tekst"><br>
    <label for="operacje">Wybierz operacje:</label>

    <select name="operacje" id="operacje">
        <option value="Odwrocenie">Odwrocenie</option>
        <option value="Zamianaw">Zamiana liter na wielkie</option>
        <option value="Zamianam">Zamiana liter na male</option>
        <option value="Liczenie">Liczenie znakow</option>
        <option value="Usuwanie">Usuwanie bialych znakow</option>
    </select>
    <input type="submit" value="Wykonaj">
</form>
<?php
$tekst = $_POST["tekst"] ?? '';
$operacja = $_POST["operacje"] ?? '';

//dodalem ?? '' zeby nie wywalalo bledow, ale mozliwe ze nie bedzie zawsze zgodny z wersja php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(trim($tekst) === ''){
        echo "Blad nie podano tekstu";
    }
    else{
        echo "Podales tekst: ".$tekst."<br>";

        switch ($operacja) {
            case "Odwrocenie":
                echo "Odwrocony ciag: ". strrev($tekst)."<br>";
                break;

            case "Zamianaw":
                echo "Zamiana liter na wielkie: ".strtoupper($tekst)."<br>";
                break;

            case "Zamianam":
                echo "Zamiana liter na male: ".strtolower($tekst)."<br>";
                break;

            case "Liczenie":
                echo "Liczba znakow: ".strlen($tekst)."<br>";
                break;

            case "Usuwanie":
                echo "Usuwanie: ".trim($tekst)."<br>";
                break;

            default:
                echo "Nieznana operacja.";
        }
    }
}
?>
</body>
</html>


