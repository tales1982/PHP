<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
    <link rel="stylesheet" href="_css/estilo.css">
    
</head>

<body>
    <div>
        <h3>Operadores de decremento e incremento</h3>
    <?php
    $num1 = 2;
    $num2 = 4;
    $num3 = 6;
    $num4 = 8;

    $resposta1 = - $num1;//resposta1. Troca o sinal do operador 
    echo "$resposta1<br>" ;

    $resposta2 = ++$num2;//resposta2. acresenta 1 (++) 
    echo "$resposta2<br>";

    $resposta3 = --$num3;// resposta3. retira 1 (--)
    echo "$resposta3<br>";


    ?>
    </div>
   
</body>

</html>