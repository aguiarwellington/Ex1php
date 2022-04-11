<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>mini calculadora</h1>
    <form action="index.php" method="GET">

        <label>X</label>
        <input type="number" name="x">
                <select name="operador">
                    <option value="som">+</option>
                    <option value="sub">-</option>
                    <option value="mult">*</option>
                    <option value="div">/</option>

                </select>
        <label>Y</label>
        <input type="number" name="y">

        <button type="submit">Enviar</button>

    </form>

<?php
        
    $x = $_REQUEST["x"];
    $y = $_REQUEST["y"];
    $oper = $_REQUEST["operador"];

        if($oper == "som"){
           $Resultado = $x + $y;
           echo $Resultado;
         }else{
             if($oper == "sub"){
                 $Resultado = $x - $y;
                 echo $Resultado;
             }else{
                 if($oper == "mult"){
                     $Resultado = $x * $y;
                     echo $Resultado;
                 }else{
                     if($oper == "div"){
                         $Resultado = $x / $y;
                         echo $Resultado;
                     }else{
                         echo "Ainda vou ser um programdor";
                     }
                 }
             }
         }

   

?>

</body>
</html>