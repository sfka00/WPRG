<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zad5.4</title>
    <style>
        .main{
            border: 1px solid dimgray;
            display:grid;
            height:400px;
            width:600px;
            background-color: blue;
            grid-template-rows: 5fr;
            grid-template-columns: 5fr;
        }
        .header{
            display:flex;
            align-items: center;
            justify-content: space-between;
            background-color: lightgray;
            height:10%;



        }
        .header-list{
            display:flex;
            gap:100px;
            list-style: none;
            margin: 10px;
            margin-left: 100px;
            padding:10px;
        }
        .footer{
            display:flex;
            align-items: center;
            justify-content: space-between;
            background-color: lightgray;

        }


    </style>
</head>
<body>

<div class="main">
    <header class="header">
        <ul class="header-list">
            <li>Strona główna</li>
            <li>O nas</li>
            <li>Kontakt</li>
        </ul>
    </header>

    <footer class="footer">
        Skomplikowana strona z flexboxem. Wszelkie prawa zastrzeżone.
    </footer>
</div>


</body>
</html>