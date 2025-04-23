<?php

$liczba = $_POST["liczba"];
$liczba = str_replace(",", ".", $liczba);
$podzial = explode(".", $liczba);
$count = strlen($podzial[1]);

echo "Liczba cyfr po przecinku: ".$count."<br>";


?>