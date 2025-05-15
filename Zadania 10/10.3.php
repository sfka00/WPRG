<?php
session_start();
$poprawnylogin = "xyz";
$poprawnehaslo = "xyz";
$zledane = false;

if(isset($_POST['wyloguj'])){
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    if($login == $poprawnylogin && $haslo == $poprawnehaslo){
        $_SESSION['zalogowany'] = true;
    }
    else{
        $zledane = true;
    }
}
?>


<!DOCTYPE html>
<html lang="pl-Pl">
<head>
    <meta charset="UTF-8">
    <title>10.3</title>
</head>
<body>
<?php
if(isset($_SESSION['zalogowany']) == true){
    echo "Jestes zalogowany $poprawnylogin" . "<br>";
    echo '<form method="POST">
    <button type="submit" name="wyloguj">Wyloguj</button>
    </form>';
}
else{
    if($zledane == true){
        echo "Zly login lub haslo";
    }
    echo '
    <h3>Zaloguj sie</h3>
    <form method="POST">
    <input type="text" name="login" placeholder="Login">
    <input type="password" name="haslo" placeholder="Haslo">
    <button type="submit" name="zaloguj">Zaloguj</button>
    </form>
    ';
}
?>

</body>
</html>

