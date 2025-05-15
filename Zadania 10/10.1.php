<?php
$maxlicznik = 10;
$licznik = 0;


if(isset($_POST["reset"])){
    setcookie("licznik", "", time() - 3600);
    $licznik = 0;
}
else{
    if(isset($_COOKIE["licznik"])){
        $licznik = $_COOKIE["licznik"] + 1;
    }
    else{
        $licznik = 1;
    }
    setcookie("licznik", $licznik, time() + 3600);
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zad10.1</title>
</head>
<body>
Liczba odwiedzin:
<?php
echo $licznik."<br>";
if($licznik>=$maxlicznik){
    echo "Osiagnles limit odwiedzin! liczba odwiedzin: " . $licznik . "<br>Resetuje licznik!";

    setcookie("licznik", "", time() - 3600);
    $licznik = 0;
}
?>
<br>
<form method="POST">
<button type="submit" name="reset">Reset licznika</button>
</form>
</body>
</html>