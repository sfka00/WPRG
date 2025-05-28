<?php
session_start();

$host = "localhost";
$dbname = 'ProjektAU';
$dbuser = "root";
$dbpass = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Błąd połaczenia z bazą danych: ".$e->getMessage();
}

$wyswietlacz = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];

    if(empty($login) || empty($haslo) || empty($email)){
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
            $emailinsert=$pdo->prepare("INSERT INTO Users (login, email, Password) VALUES (:login, :email, :haslo)");
            $emailinsert->execute(['login' => $login, 'email' => $email, 'haslo' => $hash]);
            $wyswietlacz = "Rejestracja zakonczona sukcesem.";
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
    <?php include 'Header.php';?>
    <nav class="NEWS Kontakt" style="text-align: center">
        <h3>Rejestracja</h3>
        <form class="KF" method="POST">
            <label class="KL"><input type="text" class="KI" name="login" placeholder="Login" required></label>
            <label class="KL"><input type="email" class="KI" name="email" placeholder="Email" required></label>
            <label class="KL"><input type="password" class="KI" name="haslo" placeholder="Hasło" required></label>
            <br><label class="KL"><button type="submit" class="KI" name="zarejestruj">Zarejestruj</button></label>
        </form>
        <?php
        if(!empty($wyswietlacz)){
            echo $wyswietlacz;
        }
        ?>
    </nav>

    <footer class="footer">
        © 2025 SK Portal Informacyjny. Wszelkie prawa zastrzeżone.
    </footer>
</div>


</body>
</html>