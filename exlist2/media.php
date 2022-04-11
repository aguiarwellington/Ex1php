<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="media.php" method="GET">

    <label>N1</label>
        <input type="number" name="x">
    <label>N2</label>
        <input type="number" name="y">
    <label>N3</label>
        <input type="N3" name="z">
    <button type="submit">Enviar</button>            

</form>

<?php

       $x = $_REQUEST["x"];
       $y = $_REQUEST["y"];
       $z = $_REQUEST["z"];

    $total = ($x+$y+$z)/3;

    echo $total;

    if($total >= 6){
        echo "Parabén! você foi aprovado!";
    }else{
        if($total <= 5){
            echo "Recupração";
        }else{
            echo "Game over!!";
        }
    }



?>


</body>
</html>