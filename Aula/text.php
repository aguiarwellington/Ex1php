<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
</head>
<body>

    <form action="text.php" method="GET">
        <textarea name="mensagem" cols="30" rows="5"></textarea>
        <br>
        <button type="sumibit" >Enviar</button>
        
    </form>

<?php

    $mensagem = $_REQUEST["mensagem"];

    $palavroes = array ("viado", "puta que pariu", "pqp", "PQP", "filho da puta", "arrombado");

    $novamsg = str_replace( $palavroes , "****" , $mensagem);

    print  $novamsg;



?>

</body>
</html>