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
    function switchmonth()
    {
        $x=getdate();
        $c=$x["mon"];
        switch($c)
        {
            case 1:
                return " styczen ";
            case 2:
                return " luty ";
            case 3:
                return " marzec ";
            case 4:
                return " kwiecien ";
            case 5:
                return " maj ";
            case 6:
                return " czerwiec ";
            case 7:
                return " lipiec ";

            case 8:
                return " sierpien ";
            case 9:
                return " wrzesien ";
            case 10:
                return " pazdziernik ";
            case 11:
                return " listopad ";
            case 12:
                return " Grudzien ";
        }
    }
    function wyswietl()
    {
        $x=getdate();

            echo $x["mday"];

            echo switchmonth();

            echo $x["year"];

    }

wyswietl();
    ?>
</div>
</body>
</html>