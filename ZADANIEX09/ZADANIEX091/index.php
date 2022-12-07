<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="php" ><?php
function zwrocnaj($tablica)
{

    sort($tablica);
    return $tablica[0]+$tablica[1];

}
$liczby=[4,2,3,6,9,2,1];
echo zwrocnaj($liczby);
    ?>
</div>
</body>
</html>