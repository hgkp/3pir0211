<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="php">
    <?php
    function zenskie($x)
    { $liczba=0;
        foreach($x as $i)
        {
            if(substr($i,-1)=="a")
            {$liczba++;}

        }
        echo $liczba;
    }
$imiona=["grzegorz","malgorzata","maciek","ala","ola"];
    zenskie($imiona);
    ?>
</div>
</body>
</html>