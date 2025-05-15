<?php

$vote = isset($_COOKIE['voted']);
$dziekujemy = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reset'])) {
    setcookie("voted", "", time() - 3600);
    $vote = false;
}
if($_SERVER["REQUEST_METHOD"] == "POST" && !$vote){
    if(isset($_POST['odp'])){
        setcookie("voted", "1", time() + (86400 * 30), "/");
        $vote = true;
        $dziekujemy = "Dziekujemy za oddanie glosu";
    }
}


?>

<!DOCTYPE html>
<html lang="pl-Pl">
<head>
    <meta charset="UTF-8">
    <title>10.2</title>
</head>
<body>
<?php
if($vote && empty($dziekujemy)){
    $dziekujemy = "Dziekujemy za oddanie glosu";
    echo "$dziekujemy";
    echo '<form method="POST">
    <button type="submit" name="reset">Resetuj glos</button>
    </form>';
}
else{
    echo '<h3>Na kogo glosujesz w wyborach prezydenckich?</h3>
<form method="POST">
    <input type="radio" name="odp" value="a">
    <label for="a">Krzysztof Stanowski</label><br>
    <input type="radio" name="odp" value="b">
    <label for="b">Joanna Senyszyn</label><br>
    <input type="radio" name="odp" value="c">
    <label for="c">Rafał Trzaskowski</label><br>
    <input type="radio" name="odp" value="d">
    <label for="d">Adrian Zandberg</label><br>
    <input type="radio" name="odp" value="e">
    <label for="e">Szymon Hołownia</label><br>
    <input type="radio" name="odp" value="f">
    <label for="f">Sławomir Mentzen</label><br>
    <input type="radio" name="odp" value="g">
    <label for="g">Hatsune Miku</label><br>

    <button type="submit">Wyślij</button>
</form>';
}
?>


</body>
</html>
