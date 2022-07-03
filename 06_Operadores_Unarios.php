<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unario</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <h2>Unario</h2>
        <?php
        /*
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2)/2;
        echo "A media entre $nota1 e $nota2 e $media <br/>";
        echo "A situação do aluno é ".(($media < 6)?"<strong>Reprovado</strong>":"<strong>Aprovado</strong>");
        */
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2<br/>";
        $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2; 
        echo "O resultado sera $r";
        ?>
    </div>

</body>

</html>