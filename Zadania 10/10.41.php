<?php
session_start();
$email = "";
$wyswietlacz = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];
}

    function haslospr($haslo){
        return strlen($haslo) >= 6 && preg_match("/[A-Z]/", $haslo)&& preg_match("/[0-9]/", $haslo) && preg_match("/[\W]/", $haslo);
    }

    $email_istnieje = false;
    if(file_exists("log.txt")){
        $dane = file("log.txt", FILE_IGNORE_NEW_LINES);
        foreach($dane as $dane2){
            $dzielenie = explode(" ", $dane2);
            if(isset($dzielenie[2]) && $dzielenie[2] == $email){
                $email_istnieje = true;
                break;
            }
        }
    }
    if($email_istnieje){
        $wyswietlacz = "Email jest juz zajety";
    }

    else if(!empty($imie) && !empty($nazwisko) && !empty($email) && !empty($haslo)){
        if(haslospr($haslo)){
            $zapis = "$imie $nazwisko $email $haslo";
            file_put_contents("log.txt", "\n$zapis", FILE_APPEND);
            $wyswietlacz = "rejestracja zakoczona sukcesem";
        }
        else{
            $wyswietlacz = "zle haslo";
        }
    }

?>


<!DOCTYPE html>
<html lang="pl-Pl">
<head>
    <meta charset="UTF-8">
    <title>10.41</title>
</head>
<body>
<?php
if(!empty($wyswietlacz)){
    echo $wyswietlacz;
}
?>
    <h3>Rejestracja</h3>
    <form method="POST">
    <input type="text" name="imie" placeholder="imie"><br>
    <input type="text" name="nazwisko" placeholder="nazwisko"><br>
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="haslo" placeholder="haslo"><br>
    <button type="submit" name="zaloguj">Zarejestruj</button>
    </form>

</body>
</html>