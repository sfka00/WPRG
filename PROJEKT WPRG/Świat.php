<?php
session_start();
require_once 'Databases.php';
require_once 'Ciasteczko.php';
if (isset($_POST['Wyloguj'])) {
    session_destroy();
    header("Location: PROJEKT.php");
}

$host = "localhost";
$dbname = 'ProjektAU';
$dbuser = "root";
$dbpass = "";
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
$polaczenie = $pdo->prepare("SELECT * FROM Articles WHERE Category = :category ORDER BY Date DESC");
$polaczenie->execute(['category' => 'Świat']);
$artykuły = $polaczenie->fetchAll();

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>PROJEKT PORTAL INFORMACYJNY</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="main">
    <?php include 'Header.php';?>
    <?php

    $newsClasses = ['N1', 'N2', 'N3', 'N4', 'N5', 'N6', 'N7', 'N8', 'N9'];

    foreach ($artykuły as $index => $artykuł) {
        if ($index >= count($newsClasses)) {
            break;
        }

        $class = $newsClasses[$index];
        echo "<div class='NEWS $class'>";
        echo "<h2>" . $artykuł['Title'] . "</h2>";

        if (!empty($artykuł['Picture'])) {
            echo "<img src='" . $artykuł['Picture'] . "' alt='obrazek' >";
        }

        $shortcontent = mb_strimwidth($artykuł['Content'], 0, 100, "...");
        echo "<p>$shortcontent</p>";
        echo "<a href='Article.php?id=" . $artykuł['ID'] . "'>Czytaj dalej...</a>";
        $data = date('d.m.Y H:i', strtotime($artykuł['Date']));
        echo "<p><i>Data publikacji: $data</i></p>";
        echo "</div>";
    }
    ?>

    <footer class="footer">
        © 2025 SK Portal Informacyjny. Wszelkie prawa zastrzeżone.
    </footer>

</div>
</body>
</html>