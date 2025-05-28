<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ProjektAU";

$pdo = new PDO("mysql:host=$dbhost",$dbuser,$dbpass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("CREATE DATABASE IF NOT EXISTS $dbname");
$pdo->exec("USE $dbname");

try{
    $createArticle = "CREATE TABLE IF NOT EXISTS Articles (
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(255) NOT NULL,
    Content TEXT NOT NULL,
    Category VARCHAR(255) NOT NULL,
    Picture VARCHAR(255) NOT NULL,
    Date DATETIME NOT NULL
    )";

//    $createCategory = "CREATE TABLE IF NOT EXISTS Categories (
//    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//    name VARCHAR(255) NOT NULL
//)";

    $createUsers = "CREATE TABLE IF NOT EXISTS Users (
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Login VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Role VARCHAR(255) NOT NULL DEFAULT 'user'
    )";

    $createComments = "CREATE TABLE IF NOT EXISTS Comments (
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Article_ID INT NOT NULL,
    Login_ID INT NOT NULL,
    Content TEXT NOT NULL,
    Date DATETIME NOT NULL,
    FOREIGN KEY (Article_ID) REFERENCES Articles(ID),
    FOREIGN KEY (Login_ID) REFERENCES Users(ID)
)";

    $pdo->exec($createArticle);
//    $pdo->exec($createCategory);
    $pdo->exec($createUsers);
    $pdo->exec($createComments);
//    printf("Bazy danych utworzona i załadowana pomyslnie.");

    $pdo->exec("ALTER TABLE Articles MODIFY Date DATETIME");
    $pdo->exec("ALTER TABLE Comments MODIFY Date DATETIME");
}catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}

?>
