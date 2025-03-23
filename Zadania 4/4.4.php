<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zad4.4</title>
    <style>
        .container{
            position:relative;
            height:200px;
        }
        .box{
            width:100%;
            height:50%;
            position:absolute;
        }
        .white-block{
            background-color: white;
            z-index:2;
            top:0;
            left:0;
        }
        .red-block{
            background-color:red;
            z-index:1;
            bottom:0;
            left:0;
        }
        .orange-text{
            color:orange;
            z-index:3;
            position:relative;
            text-align:center;
            line-height: 200px;
        }
    </style>
    <!-- zrobiłem z-index tak jak jest na obrazku,
    gdybym miał ustawic tak jak w treści to napis byłby tylko w połowie widoczny
     -->
</head>
<body>
<div class="container">
    <div class="box white-block"> </div>
    <div class="box red-block"> </div>
    <p class="orange-text">Hello world!</p>
</div>
</body>
</html>