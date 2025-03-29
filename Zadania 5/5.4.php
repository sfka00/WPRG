<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zad5.4</title>
    <style>
        .main{
            font-family:Arial;
            border: 1px solid lightgray;
            display:grid;
            height:360px;
            width:950px;
            background-color: white;
            grid-template-columns: 100px 150px 100px 100px 100px 100px 100px 100px 100px;
            grid-template-rows: 50px 30px 50px 50px 50px 50px 30px 50px;
        }

        .headers{
            background-color: lightgray;
            text-align: center;
            line-height: 50px;
        }
        .header1{
            grid-row: 1/1;
            grid-column: 2/3;


        }
        .header2{
            grid-row: 1/1;
            grid-column: 5/6;


        }
        .header3{
            grid-row: 1/1;
            grid-column: 8/9;

        }
        .headercaly{
            grid-row: 1/1;
            grid-column: 1/10;
        }

        .Witaj{
           grid-area: 3/1/3/3;
            font-weight: bold;
            font-size: 14pt;
            text-align: left;
            margin:0px 30px 0px 40px;
        }

        .Funkcja1{
            grid-area: 3/3/5/5;
            border: 1px solid  lightgray;
            margin: 0px 0px 10px 30px;
            padding: 15px 0px 0px 10px;
        }

        .Funkcja2{
            grid-area: 3/5/5/7;
            border: 1px solid  lightgray;
            margin: 0px 0px 10px 30px;
            padding: 15px 0px 0px 10px;

        }

        .Funkcja3{
            grid-area: 5/3/7/7;
            border: 1px solid lightgray;
            margin: 10px 0px 0px 30px;
            padding: 15px 0px 0px 10px;

        }

        .Dodatkowe{
            grid-area:3/7/7/10;
            border: 1px solid lightgray;
            margin: 0px 40px 0px 20px;
            padding-top: 10px;
            padding-left: 10px;
        }

        p{
            margin-top: 0px;
            padding:5px 0px 0px 0px;
            font-size: 12pt;
        }
        .Funkcja{
            font-size: 16pt;
        }


        .footer{
            background-color: lightgray;
            text-align: center;
            line-height: 50px;
            grid-row: 8/8;
            grid-column: 1/10;
        }


    </style>
</head>
<body>

<div class="main">

    <header class="headers headercaly"></header>
    <header class="headers header1">
        Strona główna
    </header>
    <header class="headers header2">
        O nas
    </header>
    <header class="headers header3">
        Kontakt
    </header>

    <div class="Witaj">Witaj na naszej skomplikowanej stronie!</div>

    <div class="Funkcja Funkcja1"> <b>Funkcja 1</b> <p>Opis funkcji 1...</p></div>

    <div class="Funkcja Funkcja2"> <b>Funkcja 2</b> <p>Opis funkcji 2...</p></div>

    <div class="Funkcja Funkcja3"> <b>Funkcja 3</b> <p>Opis funkcji 3...</p></div>

    <div class="Dodatkowe"><b>Dodatkowe Informacje</b> <p>...</p></div>


    <footer class="footer">
        © 2023 Skomplikowana strona z flexboxem. Wszelkie prawa zastrzeżone.
    </footer>

</div>


</body>
</html>