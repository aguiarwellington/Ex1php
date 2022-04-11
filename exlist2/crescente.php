<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem crescente</title>
</head>
<body>
    <form action="crescente.php" method="GET"> 
    <label>A</label>
        <input type="number" name="a">
    <label>B</label>
        <input type="number" name="b">
    <label>C</label>
        <input type="number" name="c">
    <button type="$_REQUEST">Enviar</button>    

    <?php

        $a = $_REQUEST["a"];
        $b = $_REQUEST["b"];
        $c = $_REQUEST["c"];
        
        if( $a < $b ){ 
            echo $a . " é menor que " . $b;
        }else{
            if($b < $a){

             echo $b . " é menor que " . $a;
            }else{
                if($c < $a){
                    $c . "é menor que " .$a;
                }else{
                    if($c < $a){
                        $c ."é menor que " . $a;
                    }
                }
            }
        }
        
    

    ?>


    </form>
</body>
</html>