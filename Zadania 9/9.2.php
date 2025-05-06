<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zad9.2</title>
</head>
<body>
<form action="9.22.php" method="POST">
    <label for="path">Sciezka katalogu</label><br>
    <input type="text" id="path" name="path" placeholder="./php/images/network" required><br><br><br>

    <label for="directory">Nazwa katalogu</label><br>
    <input type="text" id="directory" name="directory" placeholder="network" required><br><br><br>

    <label for="operation">Wybierz operacje:</label><br>
    <select id="operation" name="operation" required>
        <option value="create">Utworz katalog</option>
        <option value="read">Odczytaj zawartosc</option>
        <option value="delete">Usun katalog</option>
    </select><br>
    <input type="submit" value="Wykonaj operacje">
</form>

<div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $path = $_POST["path"];
        $directory = $_POST["directory"];
        $operation = $_POST["operation"];

        echo function1($path, $directory, $operation);
    }
    ?>
</div>

</body>
</html>
