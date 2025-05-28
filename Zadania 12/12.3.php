<?php
session_start();

$host = "localhost";
$dbname = 'Zadanie3z12';
$dbuser = "root";
$dbpass = "";


try{
    $pdo = new PDO("mysql:host=$host", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("Create DATABASE IF NOT EXISTS $dbname");
    echo "Database created successfully (or already existed).<br>";
    $pdo->exec("USE $dbname");
    $pdo->exec("
CREATE TABLE IF NOT EXISTS Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    haslo VARCHAR(255) NOT NULL,
    imie VARCHAR(50) NOT NULL,
    nazwisko VARCHAR(50) NOT NULL
)
");
}catch(PDOException $e){
    echo "Błąd połaczenia z bazą danych: ".$e->getMessage();
}

$wyswietlacz = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];


    if(empty($login) || empty($haslo) || empty($email) || empty($imie) || empty($nazwisko)){
        $wyswietlacz = "Wszystkie pola sa wymagane";
    }
    else{
        $emailcheck = $pdo->prepare("SELECT * FROM USERS WHERE email = :email");
        $emailcheck->execute(['email'=> $email]);
        $emailexists = $emailcheck->fetch();
        if($emailexists){
            $wyswietlacz = "Uzytkownik o takim emailu juz istnieje.";
        }
        else{
            $hash = password_hash($haslo, PASSWORD_DEFAULT);
            $emailinsert=$pdo->prepare("INSERT INTO Users (login, email, haslo,imie,nazwisko) VALUES (:login, :email, :haslo, :imie, :nazwisko)");
            $emailinsert->execute(['login' => $login, 'email' => $email, 'haslo' => $hash, 'imie' => $imie, 'nazwisko' => $nazwisko]);
            $wyswietlacz = "Rejestracja zakonczona sukcesem.";
            $countQuery = $pdo->query("SELECT COUNT(*) FROM Users");
            $userCount = $countQuery->fetchColumn();
            $wyswietlacz .= "<br>Łączna liczba zarejestrowanych użytkowników: $userCount";
        }
    }
}



?>


<!DOCTYPE html>
<html lang="pl-Pl">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main">

    <nav class="NEWS Kontakt" style="text-align: center">
        <h3>Rejestracja</h3>
        <form class="KF" method="POST">
            <label class="KL"><input type="text" class="KI" name="login" placeholder="Login" required></label>
            <label class="KL"><input type="email" class="KI" name="email" placeholder="Email" required></label>
            <label class="KL"><input type="password" class="KI" name="haslo" placeholder="Hasło" required></label>
            <label class="KL"><input type="text" class="KI" name="imie" placeholder="Imię" required></label>
            <label class="KL"><input type="text" class="KI" name="nazwisko" placeholder="Nazwisko" required></label>

            <br><label class="KL"><button type="submit" class="KI" name="zarejestruj">Zarejestruj</button></label>
        </form>
        <?php
        if(!empty($wyswietlacz)){
            echo $wyswietlacz;
        }
        ?>
    </nav>


</div>


</body>
</html>