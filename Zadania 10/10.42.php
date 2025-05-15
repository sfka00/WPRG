<?php
session_start();
$zledane = false;

if(isset($_POST['wyloguj'])){
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    $zalogowany = false;

    if(file_exists("log.txt")){
        $dane = file("log.txt", FILE_IGNORE_NEW_LINES);
        foreach($dane as $dane2){
            $dzielenie = explode(" ", $dane2);
            if(count($dzielenie) >=4){
                $pliklogin = $dzielenie[2];
                $plikhaslo = $dzielenie[3];
            }
            if($pliklogin == $login && $plikhaslo == $haslo){
                $_SESSION['zalogowany'] = true;
                $_SESSION['login'] = $login;
                $zalogowany = true;
                break;
            }
        }
    }
    if(!$zalogowany){
        $zledane = true;
    }
}

?>


<!DOCTYPE html>
<html lang="pl-Pl">
<head>
    <meta charset="UTF-8">
    <title>10.42</title>
</head>
<body>
<?php
if(!empty($_SESSION['zalogowany']) && $_SESSION['zalogowany'] === true){
    echo "Jestes zalogowany $login" . "<br>";
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

