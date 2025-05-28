<?php
session_start();
require_once 'Databases.php';
require_once 'Ciasteczko.php';

if(!isset($_SESSION['zalogowany']) || $_SESSION['role'] !=='admin') {
    exit("Dostęp tylko dla administratorów.");
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

$article = null;
$articles = $pdo->query("SELECT ID, Title FROM Articles")->fetchAll();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['selectart'])) {
        $id = $_POST['selectart'];

        if (!empty($id) && is_numeric($id)) {
            $editart = $pdo->prepare("SELECT * FROM Articles WHERE ID = ?");
            $editart->execute([$id]);
            $article = $editart->fetch();
            if (!$article) {
                exit("Nie znaleziono artykułu.");
            }
        } else {
            exit("Nieprawidlowe ID");
        }
    }

}
if(isset($_POST['editarticle'])) {
    $id = $_POST['articleid'];
    if(!empty($id) && is_numeric($id) && $id > 0) {
        $title = $_POST["title"];
        $category = $_POST["category"];
        $content = $_POST["content"];
        $picture = $_POST["picture"];
        $editart = $pdo->prepare("UPDATE Articles SET Title = ?, Category = ?,Content = ?, Picture = ? WHERE id = ?");
        $editart->execute([$title, $category, $content, $picture, $id]);
        echo "Artykuł został zaktualizowany.";
        $editart = $pdo->prepare("SELECT * FROM Articles WHERE ID = ?");
        $editart->execute([$id]);
        $article = $editart->fetch();
    }
    else{
        exit("Nieprawidlowe ID");
    }
}
if(!$article){
    $article = [
            'Title' => '',
            'Category' => '',
            'Content' => '',
            'Picture' => '',
            'ID' => 0
    ];
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

    <nav class="NEWS Kontakt Artc"><h2>Wybierz artykuł do edycji</h2>
        <form method="POST">
            <select name="selectart">
                <option value="">Wybierz Artykuł</option>
                <?php
                foreach ($articles as $art) {
                    echo'<option value=' . $art['ID'] . '>' . $art['Title'] . '</option>';
                }
                ?>
            </select>
            <button type="submit">Wybierz</button>
        </form>


        <h2>Edytuj nowy artykuł</h2>
        <form method="POST">

            <input type="hidden" name="articleid" VALUE="<?php echo $article['ID']; ?>">
            <label>Tytuł:</label><br>
            <input type="text" name="title" value="<?php echo $article['Title']; ?>"><br>

            <label>Kategoria:</label><br>
            <input type="text" name="category" value="<?php echo $article['Category']; ?>"><br>

            <label>Zdjęcie (URL):</label><br>
            <input type="text" name="picture" value="<?php echo $article['Picture']; ?>"><br>

            <label>Treść:</label><br>
            <textarea name="content"><?php echo $article['Content'];?></textarea><br>

            <button type="submit" name="editarticle">Edytuj Artykuł</button>
        </form>

    </nav>
        <footer class="footer">
            © 2025 SK Portal Informacyjny. Wszelkie prawa zastrzeżone.
        </footer>
</body>
</html>


