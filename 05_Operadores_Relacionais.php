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
        <h3>Operadores Relacionais</h3>
    <?php
   $valor = 9;
   if($valor == 15){
    echo"O valor é 15";
   }elseif ($valor >=10){
        echo"O valor é maior ou igual 10";
    }else {
        echo"O valor é menor que 10";
    }
    ?>
    </div>
   
</body>

</html>