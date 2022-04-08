<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula</title>
</head>
<body>
    <form>
        <input type="name" name="nome"><br>
        <br>
        <input type="date" name="idade">
        <br><br>
        <input type="submit" name="enviar"><br>
    </form>

   <?php
        $nome = @$_REQUEST["nome"];
        @$data =  $_REQUEST["idade"];
        $Atual = date('Y');
        @$idade = $Atual - $data;

            print(" meu nome é: " . $nome . " tenho " . $idade . " anos ");
    ?> 
</body>
</html>