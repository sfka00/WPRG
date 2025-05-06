<?php
$plik = 'licznik.txt';
if (file_exists($plik)) {
    $count = (int)file_get_contents($plik);
    $count++;
}
else{
    $count = 1;
    file_put_contents($plik, $count);
}
file_put_contents($plik, $count);
echo "Liczba odwiedzin: $count";
?>