<?php
session_start();
require_once 'Ciasteczko.php';
require_once 'Databases.php';

if (!isset($_SESSION['zalogowany']) || $_SESSION['role'] !== 'admin') {
    echo "Dostęp tylko dla administratora.";
    exit();
}


$host = "localhost";
$dbname = "ProjektAU";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Błąd połączenia z bazą danych: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $picture = $_POST['picture'];
    $date = date('Y-m-d H:i:s');

    $insertart = $pdo->prepare("INSERT INTO Articles (Title, Content, Category, Picture, Date) VALUES (?, ?, ?, ?, ?)");
    $insertart->execute([$title, $content, $category, $picture, $date]);

    echo "Artykuł został dodany!";
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodaj artykuł</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main">

<?php include 'Header.php';?>

    <nav class="NEWS Kontakt Artc">
        <h2>Dodaj nowy artykuł</h2>
        <form method="POST">
            <label>Tytuł:</label><br>
            <input type="text" name="title" required><br><br>

            <label>Kategoria:</label><br>
            <input type="text" name="category" required><br><br>

            <label>Zdjęcie (URL):</label><br>
            <input type="text" name="picture" required><br><br>

            <label>Treść:</label><br>
            <textarea name="content" required></textarea><br><br>

            <button type="submit">Dodaj artykuł</button>
        </form>
    </nav>

</body>
</html>
