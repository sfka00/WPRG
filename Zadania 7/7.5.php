<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
    <style>

        .container {
            color: white;
            border: 8px solid blue;
            background-color: black;
            padding: 20px;
            width: 600px;

        }

        h2 {
            border-bottom: 1px solid white;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        h3{
            border-top: 1px solid white;
            padding-top: 10px;
        }

        input{
            width: 30%;
            padding: 5px;
            margin-bottom: 10px;
        }

        button {
            width: 40%;
            color:black;
            background-color: whitesmoke;
            border: none;
            padding: 5px;
        }


    </style>
</head>
<body>

<div class="container">
    <h2>Kalkulator</h2>

    <div class="main">
        <h3>Prosty</h3>
        <form action="7.511.php" method="post">
            <input type="number" name="a">

            <select name="dzialania">
                <option value="dodawanie">Dodawanie</option>p
                <option value="odejmowanie">Odejmowanie</option>
                <option value="mnozenie">Mnożenie</option>
                <option value="dzielenie">Dzielenie</option>
            </select>

            <input type="number" name="b">

            <button type="submit" name="guzik" value="prosty">Oblicz</button>
        </form>
    </div>

    <div class="main">
        <h3>Zaawansowany</h3>
        <form action="7.511.php" method="post">
            <input type="text" name="c">

            <select name="dzialania2">
                <option value="cos">cos</option>
                <option value="sin">sin</option>
                <option value="tan">tan</option>
                <option value="bin2dec">binarne na dziesietne</option>
                <option value="dec2bin">dziesietne na binarne</option>
                <option value="dec2hex">dziesietne na szesnastkowe</option>
                <option value="hex2dec">szesnastkowe na dziesietne</option>
            </select>
            <button type="submit" name="guzik" value="zaawansowany">Oblicz</button>
        </form>
    </div>
</div>

</body>
</html>
