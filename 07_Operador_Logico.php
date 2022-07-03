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
        <h3>Operadores Logicos</h3>
    <?php
    $ano = $_GET["an"];
    $idade = 2022 - $ano;
    echo"Quen naçeu em $ano tem idade de $idade<br>";
    $tipo = ($idade >=18 && $idade<65)?"Obrigatorio.":"Nao Obrigatorio.";
    echo "E dessa forma seu voto é, $tipo";
    ?>
    </div>
   
</body>

</html>