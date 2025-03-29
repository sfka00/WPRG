<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zad5.3</title>
    <style>
        .row{
            display:flex;
            width:700px;
            height: 50px;
            justify-content: space-between;
            flex-direction: row;
            gap:10px;

        }
        .equal-width{
            line-height: 50px;
            text-align: center;
            background-color: lightblue;
            width:100%;
            height:100%;


        }
        .row2{
            display:flex;
            width:700px;
            height: 50px;
            padding-top: 5px;
            gap: 10px;
        }
        .fixed-percentage{
            width:40%;
            text-align: center;
            line-height: 50px;
            background-color: lightblue;

        }
        .flexible{
            width: 60%;
            text-align: center;
            line-height: 50px;
            background-color: lightblue;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="equal-width 1">Element 1</div>
    <div class="equal-width 2">Element 2</div>
    <div class="equal-width 3">Element 3</div>

</div>

<div class="row2">
    <div class="fixed-percentage">Element 4</div>
    <div class="flexible">Element 5</div>

</div>

</body>
</html>