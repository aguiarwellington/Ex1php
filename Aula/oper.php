
<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="oper.php" method="GET">

    <label>X</label>
        <input type="number" name="x">
    <label>Y</label>
        <input type="number" name="y">
    <label>Z</label>
        <input type="number" name="z">
        
    <button type="submit">Enviar</button>    

    </form>

    <?php

        $x = $_REQUEST["x"];
        $y = $_REQUEST["y"];
        $z = $_REQUEST["z"];   

       $som = $x + $y + $z;
       $sub = $x - $y - $z;
       $mult = $x * $y *$z;
       $div = $x / $y / $z;



     print " a soma de x , y e z é:  " . $som . "<br>";
     print " a subtração de x , y e z é:  " . $sub . "<br>";
     print " a multiplicação de x , y e z é:  " . $mult . "<br>";
     print " a divisão de x , y e z é:  " . $div . "<br>";
     

    ?>
</body>
</html>