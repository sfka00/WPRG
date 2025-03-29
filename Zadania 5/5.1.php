<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zad5.1</title>
    <style>
        .flex-container{
            display:flex;
            border:2px solid;
            height:200px;
            width:600px;

        }
        .column{
            font-size: 14pt;
            width:100%;
            line-height: 50px;
            text-align: center;
            margin:10px;
            background-color: lightblue;
        }

        .flex-container2{
            margin:10px 0 0 0;
            display:flex;
            border:2px solid;
            height:200px;
            width:600px;
            justify-content: center;
            align-items: center;
        }
        .box{
            text-align:center;
            background-color: lightblue;
            margin:10px;
            width: 100px;
            height:50px;
            line-height: 50px;
            font-size: 14pt;

        }
        hr{
            margin-top: 10px;
            width: 600px;
            margin-left: 0;
        }
    </style>
</head>
<body>
<div class="flex-container">
    <div class="column column1">Kolumna 1</div>
    <div class="column column2">Kolumna 2</div>
    <div class="column column3">Kolumna 3</div>
</div>

<hr>

<div class="flex-container2">
    <div class="box box1">Element 1</div>
    <div class="box box2">Element 2</div>
    <div class="box box3">Element 3</div>

</div>
</body>
</html>