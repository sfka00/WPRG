<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 2</title>
    <style>
        /*p {text-align: center;}*/
        table {text-align: center;}
    </style>
</head>
<header>
<!--    <p>Tabela przykładowa</p>-->
</header>
<table>
    <colgroup>
        <col span="2" style="background-color: yellow">
        <col span="2" style="background-color: lightskyblue"
    </colgroup>
    <tr></tr>
    <td colspan="5" style="background-color: white">Tabela przykladowa</td>
    <tr>
        <th rowspan="2">Grupa A</th>
        <th colspan="2">Mecz 1</th>
        <th colspan="2">Mecz 2</th>
    </tr>
    <tr>
        <th>Druzyna 1</th>
        <th>Druzyna 2</th>
        <th>Druzyna 1</th>
        <th>Druzyna 2</th>
    </tr>
    <tr>
        <td rowspan="2">Rosja</td>
        <td>1</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>2</td>
        <td>1</td>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">Polska</td>
        <td>0</td>
        <td>2</td>
        <td>1</td>
        <td>1</td>
    </tr>
    <tr>
        <td>2</td>
        <td>0</td>
        <td>1</td>
        <td>1</td>
    </tr>
    <tr>
        <td colspan="5">
            <table>
                <tr>
                    <td colspan="2">Przykładowa <br>
                        zagnieżdżona tabela</td>
                </tr>
                <tr>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Wiek</th>
                </tr>
                <tr>
                    <td>Jan</td>
                    <td>Kowalski</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Anna</td>
                    <td>Nowak</td>
                    <td>30</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2">Razem</td>
        <td>4</td>
        <td>4</td>
        <td>2</td>
        <td>2</td>
    </tr>
</table>

<body>
</body>