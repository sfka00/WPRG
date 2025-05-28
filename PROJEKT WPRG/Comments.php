<?php
require_once "Databases.php";

class Comments{
    private $pdo;
    function __construct($pdo){
        $this->pdo = $pdo;
    }

    function DodajKomentarz($article_ID, $Login_ID,$Content){
        $dodajkom = $this->pdo->prepare("INSERT INTO Comments (Article_ID, Login_ID,Content, DATE) VALUES(?,?,?,?)");
        return $dodajkom->execute([$article_ID, $Login_ID, $Content, date("Y-m-d H:i:s")]);
    }
    function UsuńKomentarz($comment_ID){
        $usunkom = $this->pdo->prepare("DELETE FROM Comments WHERE ID = ?");
        return $usunkom->execute([$comment_ID]);
    }
    function PokazKomentarz($Article_ID){
        $pokazkom = $this->pdo->prepare("SELECT Comments.ID as CommentID, Comments.Content, Comments.Date, Users.Login FROM Comments JOIN Users ON Comments.Login_ID = Users.ID WHERE Article_ID = ? ORDER BY Date DESC");
        $pokazkom->execute([$Article_ID]);
        return $pokazkom->fetchAll();
    }
}


?>