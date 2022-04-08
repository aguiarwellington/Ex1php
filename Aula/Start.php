<!DOCTYPE <html>

<html lang="br">
<head>
    
<meta charset="UTF-8">
<title>Estudando</title>
<meta http-equiv="X UA Compatible" content="IE = edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <form action="Start.php" method="GET">
        <label for="name"> Nome </label>
        <br>
            <input type="text" name="nome"><br>
        <label for="Sobre nome">Sobre nome</label><br>

            <input type="text" name="sobrenome">
            <br>
        <label for="idade">Nascimento</label>
        <br>
            <input type="date" name="idade">
            <br>
            <br>
            <button type="submit" value="submit" name="enviar">Enviar</button>

    </form>

<?php

$nome = $_REQUEST["nome"];

$lastname = $_GET["sobrenome"];

$nascimento = $_REQUEST["idade"];

$atual= date('Y');

    @$idade = @$atual - @$nascimento;

        print " olá " .$nome . " " .$lastname . " voce tem ". " " . $idade . " anos";
       



?>

</body>




</html>