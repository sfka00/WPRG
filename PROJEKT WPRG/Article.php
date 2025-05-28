<?php
session_start();
require_once 'Ciasteczko.php';
Require_once 'Comments.php';



$pdo = new PDO("mysql:host=localhost;dbname=ProjektAU", "root", "");

$comments = new Comments($pdo);
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id'])) {
    if(!empty($_POST['comment_content'])){
        $articleID = $_POST['article_id'];
        $loginID = $_SESSION['user_id'];
        $content = trim($_POST['comment_content']);
        $comments->DodajKomentarz($articleID, $loginID, $content);
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_comment']) && isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    $commentID = $_POST['delete_comment'];
    $comments->UsuńKomentarz($commentID);
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $stmt = $pdo->prepare("SELECT * FROM Articles WHERE ID = ?");
    $stmt->execute([$_GET['id']]);
    $article = $stmt->fetch();
} else {
    $article = false;
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_article']) && isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    $articleID = $_POST['article_id'];
    $deletepost = $pdo->prepare("DELETE FROM Articles WHERE ID = ?");
    $deletepost->execute([$articleID]);
    header("Location: PROJEKT.php");
    exit();

}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main">
    <?php include 'Header.php';?>
    <?php
    if ($article){
        echo '<div class="NEWS ARTMAIN">';
        echo '<h2>' . $article['Title'] . '</h2>';
        if(!empty($article['Picture'])){
            echo '<img src="' . $article['Picture'] . '" alt="Obrazek">';
        }
        echo '<p>' . $article['Content'] . '</p>';
        $data = date('d.m.Y H:i', strtotime($article['Date']));
        echo '<p><i>Data publikacji: ' . $data . '</i></p>';
        echo "</div>";
    }
    else{
        echo '<div class="NEWS">Nie znaleziono artykułu.</div>';
    }
?>
    <?php
    if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
        echo '<div class="main">
        <form method="POST" onsubmit="return confirm(\'Czy na pewno chcesz usunąć ten artykuł?\')">
            <input type="hidden" name="article_id" value="' . $article['ID'] . '">
            <button type="submit" name="delete_article" class="KB">Usuń artykuł</button>
        </form>
    </div>';
    }
    ?>


    <div class="comments">
        <h3>Komentarze:</h3>
        <?php
        $allComments = $comments->PokazKomentarz($article['ID']);
        if($allComments){
            foreach ($allComments as $com){
                echo '<div class="comment123">';
                echo "<p>Użytkownik: " . $com['Login'] . "</p>";
                echo "<p>" . $com['Content'] ."</p>";
                echo "<p>" . $com['Date'] . "</p>";

                if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
                    echo "<form method='POST' onsubmit='return confirm(\"Usunąć komentarz?\");'>";
                    echo "<input type='hidden' name='delete_comment' value='" . $com['CommentID'] . "'>";
                    echo "<button type='submit'>Usuń</button>";
                    echo "</form>";
                }
                echo '</div>';
            }
        }
        if (isset($_SESSION['user_id'])) {
            echo '<form method="POST">';
            echo '<input type="hidden" name="article_id" value="' . $article['ID'] . '">';
            echo '<textarea name="comment_content" class="comment-box" required placeholder="Napisz komentarz..." rows="4" cols="50"></textarea><br>';
            echo '<button type="submit">Dodaj komentarz</button>';
            echo '</form>';
        } else {
            echo '<p>Zaloguj się, aby dodać komentarz.</p>';
        }
        ?>
    </div>


<br>
    <footer class="footer">
        © 2025 SK Portal Informacyjny. Wszelkie prawa zastrzeżone.
    </footer>
</div>
</body>
</html>
