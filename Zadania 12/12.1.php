<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "zadania12";

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($mysqli->connect_errno){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
else{
    printf('Connected successfully.<br>');
    $createDatabaseQuery = "CREATE DATABASE IF NOT EXISTS Zadania12";
    if($mysqli->query($createDatabaseQuery)){
        printf("Database created successfully (or already existed).<br>");
        $mysqli->select_db("Zadania12");
        if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['deletetable'])){
            $droptable = "DROP TABLE IF EXISTS Student";
            if($mysqli->query($droptable)){
                printf("Table deleted successfully<br>");
            }
            else{
                printf("Error: %s.\n", $mysqli->error);
            }
            $mysqli->close();
            return;
        }

        $sql = "CREATE TABLE IF NOT EXISTS Student
        (StudentID INT NOT NULL auto_increment PRIMARY KEY,
        Firstname VARCHAR(255) NOT NULL, 
        Secondname VARCHAR(255) NOT NULL,
        Salary INT NOT NULL default '0',
        DateofBirth DATE NOT NULL)";
        if($mysqli->query($sql)){
            printf("Table created successfully (or already existed).<br>");
        }
        else{
            printf("Error: %s.\n", $mysqli->error);
        }
    }
    else{
        printf("Error creating database: %s\n", $mysqli->error);
    }

}

$mysqli->close();
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zad12.1</title>
    <style>
        .box{
            border:1px solid gray;
            width:500px;
            height: 150px;
            padding:10px;
            font-family: Arial;
        }
        h1{
            text-align: center;
        }
        button{
            background-color: green;
            color:white;
            height:40px;
            width:100px;
            border-radius: 15px;
            border-color: green;
        }
    </style>
</head>
<body>
<br><br>
<div class="box">
    <h1>Manage MySQL Table</h1>
    <form method="POST">
        <button type="submit" name="deletetable">Delete Table</button>
    </form>
</div>


</body>
</html>