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
        <h2>Operadores Aritmeticos.</h2>
        <?php
         $n1 = $_GET["a"];
         $n2 = $_GET["b"];
         echo "<h2>Valores recebido $n1 e $n2</h2>";
        /*
        $n1 = 3;
        $n2 = 2;
        */
        $media = ($n1 + $n2) / 2;
        echo "A soma vale  ".($n1 + $n2)."<br>";
        echo "A Subtração vale  ".($n1 - $n2)."<br>";
        echo "A Multiplicação vale  ".($n1 * $n2)."<br>";
        echo "A Divição vale  ".($n1 / $n2)."<br>";
        echo "O Modulo vale  ".($n1 % $n2)."<br>";
        echo "A media vale $media ";
 
        ?>
    </div>
</body>

</html>