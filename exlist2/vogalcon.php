<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="vogalcon.php" method="GET">

     <h1>Digite uma letra</h1>
     <p>Vai mostrar se é vogal ou consoante.</p>
    <input type="text" name="alfa">
    <button type="submit">Enviar</button>

    <?php
    
    $vogal = $_REQUEST["alfa"];

    switch( strtoupper($_REQUEST["alfa"])){

        case 'A' :
          
        case 'E' :
           
        case 'I' : 
            
        case 'O'  : 
            
        case 'U'  :

            print "vogal";            
        break;

        default:
        print " Consoante";
    }


    ?>

    </form>
</body>
</html>