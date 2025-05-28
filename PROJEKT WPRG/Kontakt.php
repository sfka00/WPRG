<?php
session_start();
require_once 'Ciasteczko.php';
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>PROJEKT PORTAL INFORMACYJNY</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .Kontakt123 {
            border: 1px solid lightgray;
            grid-area: 3/4/6/9;
            display: flex;
            flex-direction: column;
            margin-bottom: 175px;
            margin-top: 50px;
            height: 600px;
            overflow: auto;




        }
        .KF123{
            flex:1;
            display:flex;
            flex-direction: column;
            padding: 20px;
            max-width:500px;

        }
        .KWiad {
            width: 100%;
            min-height: 50px;
            max-height: 200px;
            resize: vertical;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            font-size: 14px;

        }
    </style>
</head>
<body>

<div class="main">

    <?php include 'Header.php';?>

    <nav class = "NEWS Kontakt123">
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $imie = $_POST['imieinazwisko'];
            $email= $_POST['email'];
            $telefon = $_POST['telefon'];
            $wiadomosc = $_POST['wiadomosc'];

            if($email && $wiadomosc){
                $zapis = "Data: " . date("Y-m-d H:i") . PHP_EOL .
                    "Imię i nazwisko: " . $imie . PHP_EOL .
                    "Email: " . $email . PHP_EOL .
                    "Telefon: " . $telefon . PHP_EOL .
                    "Wiadomość: " . $wiadomosc . PHP_EOL .
                    "--------------------------------------" . PHP_EOL;

                file_put_contents("WiadomosciKlientow.txt", $zapis, FILE_APPEND);
                $message = "Wiadomość została wysłana. Dziekujęmy";
                echo $message;
            }
            else{
                $message = "Wymagane pola: Email i Wiadomość";
                echo $message;
            }
        }
        ?>
        <h3 style="text-align: center">Wyślij nam wiadomość!</h3>
        <form class="KF123" method="POST" action="Kontakt.php">
            <label class="KL">
                <input type="text" class="KI" name="imieinazwisko" placeholder="Imię i nazwisko">
            </label>
            <label class="KL">
                <input type="email" class="KI" name="email" placeholder="Email" required>
            </label>
            <label class="KL">
                <input type="tel" class="KI" name="telefon" placeholder="Telefon" >
            </label>

            <label class="KL">
                <textarea class="KWiad" name="wiadomosc" placeholder="Wiadomość..." rows="5" maxlength="400" required></textarea>
            </label>
            <label class="KL">
                <button type="submit" class="KB">Wyślij</button>
            </label>
        </form>
    </nav>





</div>
<footer class="footer">
    © 2025 SK Portal Informacyjny. Wszelkie prawa zastrzeżone.
</footer>




</body>
</html>