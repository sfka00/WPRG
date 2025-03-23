<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zad4.2</title>
    <style>
        form{
            display:block;
            margin:0 auto;
            max-width: 500px;
            padding: 20px;
        }
        label{
            display: block;
        margin-bottom:10px;
        }
        input{
            display:block;
            width:100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button{
            display:block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
            border:none;
        }
        span{
            display:inline-block;
            width:30px;
            text-align:center;
        }
    </style>
</head>
<body>
<form>
    <span></span>
    <label>
    <input type="text" placeholder="email">
    </label>
    <label>
    <input type="text" placeholder="telefon" >
    </label>
    <label>
    <input type="text" placeholder="imię i nazwisko">
    </label>
    <label>
    <button type="button">Wyślij</button>
    </label>
</form>
</body>
</html>