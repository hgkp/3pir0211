<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>

</head>
<body>
<table>
    <tr>
        <td>Imię i nazwisko:</td>
        <td>Klasa/grupa:</td>
        <td>Data:</td>
    </tr>
    <tr>
        <td>Krystian P</td>
        <td>3pir02 </td>
        <td>23.11.2022</td>
    </tr>
</table>
<h1>Zadanie T081</h1>
<p>

    Napisz funkcję, która dla podanej liczby zwraca (return) jej wartość bezwzględną i zastosuj tę funkcję do wyświetlenia wyniku. Do obliczenia wartości bezwzględnej użyj instrukcji warunkowej (wariant 1) i operatora warunkowego "?" (wariant 2).</p>
<div>
    <form method="post" action="index.php">
       podaj liczbe <input type="text" name="a">
        <input type="submit" value="wyslij">
    </form>
    <?php
function modul($x)
{
    if($x<0)
    return -$x;



}
    if(isset($_POST['a']) && is_numeric($_POST['a']))
    {
        if()


    }?>
</div>
</body>
</html>