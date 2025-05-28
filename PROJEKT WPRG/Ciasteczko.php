<?php
if(!isset($_SESSION['zalogowany']) && isset($_COOKIE['Zapamietaj'])){
    $login = $_COOKIE['Zapamietaj'];
    require_once('Databases.php');
    $ciasteczko = $pdo->prepare("SELECT login, Role FROM users WHERE login = :login");
    $ciasteczko->execute(['login' => $login]);
    $user = $ciasteczko->fetch();

    if($user){
        $_SESSION['zalogowany'] = true;
        $_SESSION['login'] = $login;
        $_SESSION['role'] = $user['Role'];
    }
}

?>

