<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        #kont{

            height:400px;
            font-family: Arial;
            background: chocolate;
            color:navajowhite;
        }
        #forma{
            border-radius:20px;
            height:100px;
            background:darkgreen;
            color:white;
        }
        #php{
            margin-top:10px;
            border-radius:20px;
            height:300px;
            background: firebrick;
            color:ghostwhite;
        }
    </style>
</head>
<body>
<div id="kont">
<h1>
    Zadanie 7
    Napisz program, który dla podanej temperatury w stopniach Celsjusza zamienia ją na stopnie Kelwina i Fahrenheita.
</h1>
<h2>Krystian Pierzchalski</h2>
<div id="forma"  >
    <form method="post" action="index.php">
        podaj tempertature w C<input name="a" id="a" type="text" ><br>
        <input type="submit" name="but" value="wyslij">
    </form>
</div>
<div id="php">
    <article>
    <?php
function kelw($x)
{
    if($x<-273.15 )
        $kelw=0;
    else
    $kelw= $x+273.15;
    echo "kelwiny to $kelw <br> ";
}
function fahren($x)
{
   $fahren=$x*(9/5)+32;
    echo" w fahrenheitach to $fahren <br>";
}
if(isset($_POST['a']) && is_numeric($_POST['a']))
{
    $temp=$_POST['a'];
    echo "wynik w cels  to $temp <br>";
kelw($temp);
fahren($temp);


}
    ?>
</article>
</div>
</div>
</body>
</html>