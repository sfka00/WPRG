<?php
$tekst = $_POST["tekst"];

echo "Ciag: $tekst <br>";
echo "Ciag duzymi literami:" .strtoupper($tekst)."<br>";
echo "Ciag malymi literami: " .strtolower($tekst)."<br>";
echo "Pierwsza litera ciagu duza litera: ". ucfirst($tekst)."<br>";
echo "Wszystkie pierwsze litery duza litera: ". ucwords($tekst)."<br>";

?>