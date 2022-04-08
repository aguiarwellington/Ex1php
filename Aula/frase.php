<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="frase.php" method="GET">
<label for="frase">Escreva um frase</label>
<br>
<textarea name="frase" rows="5" cols="33" ></textarea>
<button type="submit">Enviar</button>

</form>

    <?php

    $frase = $_REQUEST["frase"];
    
    echo $frase . "<br>";
    echo "a frase possui " . strlen($frase) . " letras " . "<br>";
    echo "a frase possui " . str_word_count($frase) . " palavras " . "<br>"; 
    echo "a frase ao contrario é  ". strrev($frase) ." <br>"; 
    ?>

    <script>
            alert ("aii meu cú!!");
            document.write("Aiiin pai, para !!")
     </script>

    
</body>
</html>