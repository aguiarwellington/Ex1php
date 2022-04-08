<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha</title>
</head>
<body>
<form>
    <label for="name">Name</label>
    <input type="text" name="nome">
    <label for="age">Idade</label>
    <input type="number" name="anonas">

    <button type="submit" name="enviar" >Enviar</button>


</form>


<?php

$nome = $_GET[ "nome" ];
$ano = $_REQUEST[ "anonas" ];

$senha = $nome . $ano;
$senha = str_replace( " ", " ",$senha );//substituir os espaços.
$senha = str_shuffle( $senha );
$senha = substr( $senha, 0 , 5 );

print $senha;

?>
    
</body>
</html>