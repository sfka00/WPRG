<?php
session_start();
require_once 'Ciasteczko.php';
$zledane = false;

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

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $loginDB = $pdo->prepare("SELECT ID, login, Password, Role FROM users WHERE login = :login");
    $loginDB->execute(['login' => $login]);
    $logincheck = $loginDB->fetch();

    if($logincheck && password_verify($haslo, $logincheck['Password'])){
        $_SESSION['zalogowany'] = true;
        $_SESSION['login'] = $logincheck['login'];
        $_SESSION['role'] = $logincheck['Role'];
        $_SESSION['user_id'] = $logincheck['ID'];


        $remember = isset($_POST['Zapamietaj']);
        if($remember == true){
            setcookie("Zapamietaj", $login, time() + (86400 * 30), "/");
        }

        header("Location: PROJEKT.php");
        exit();
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
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main"><?php include 'Header.php';?></div>

<?php
if(!empty($_SESSION['zalogowany']) && $_SESSION['zalogowany'] === true){
    echo "Jestes zalogowany " . $_SESSION['login'] . "<br>";
    echo '<form action="Logout.php" method="POST">
                    <button type="submit">Wyloguj</button>
                </form>';
}
else{
    if($zledane == true){
        echo "Zly login lub haslo";
    }
    echo '
    <div class="main">
    <nav class="NEWS Kontakt" style="text-align: center">
    <h3>Zaloguj się</h3>
    <form class="KF" method="POST">
    <label class="KL"><input type="text" class="KI" name="login" placeholder="Login" required></label>
    <label class="KL"><input type="password" class="KI" name="haslo" placeholder="Haslo" required></label>
    <label class="KL"><button type="submit" class="KI" name="zaloguj">Zaloguj</button></label>
    <label style="display: inline-flex; align-items: center; margin:0px; padding: 0px; gap:5px;"><input type="checkbox" name="Zapamietaj" id="Zapamietaj"><h6>Zapamietaj mnie</h6></label>

    </form>
    </nav>
    </div>
    ';
}
?>

<div class="main">
    <footer class="footer">
        © 2025 SK Portal Informacyjny. Wszelkie prawa zastrzeżone.
    </footer>
</div>
</body>
</html>

