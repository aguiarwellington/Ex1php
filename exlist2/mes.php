<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes do ano</title>
</head>
<body>
    
<form action="mes.php" method="GET">

  <label>Mês</label>
  <input type="number" name="num">
  <button type="submit">Enviar</button>

  <?php
    
   $num = $_REQUEST["num"];

    switch($_REQUEST["num"]  ){

        case 1 :

            echo "Janeiro";
        break;

        case 2: 
            echo "Fevereiro";
        break;
        
        case 3: 
            echo "Março";
        break;
        
        case 4: 
            echo "Abril";
        break;

        case 5: 
            echo "Maio";
        break;
        
        case 6:
            echo "Junho";
        break ;
        
        case 7: 
            echo "Julho";
        break;
        
        case 8: 
            echo "Agosto";
        break;
        
        case 9: 
            echo "Setembro";
        break;

        case 10:
            echo "Outubro";
        break;
        
        case 11:
            echo "Novembro";
        break;
        
        case 12:
            echo "Dezembro";
        break;
        
        default: 
        echo "Este mês não existe neste calendário  ";

    }
          
    

        


    ?>


</form>

</body>
</html>