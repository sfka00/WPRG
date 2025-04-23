<?php
$liczby = $_POST["liczby"];
$znaki = ['\\', '/', ':', '*', '?', '"', '<', '>', '|', '+', '-'];
$replace = str_replace($znaki, '',$liczby);
echo $liczby."<br>";
echo "ciag bez znakow specjalnych: ".$replace."<br>";

?>