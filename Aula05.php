<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro exemplo Php</title>
    <link rel="stylesheet" href="_css/estilo.css">

</head>
<body>
    
</body>
</html>
<div>
    <h2>Concatenação</h2>
    <?php
    // exemplo 1- Utilização do ponto ( . )
$nome = "Angelo";
$sobrenome = "Ferreira";
echo "Meu nome é ".$nome." ".$sobrenome. " e tenho 90 anos. <br>";

//2ª Forma: Utilização do ponto com o sinal de igual ( .= )
$nome = "Angelo";
$sobrenome = "Ferreira";
$idade = 90;
$nCompleto = "Meu nome é ";
$nCompleto .= "$nome ";
$nCompleto .= "$sobrenome ";
$nCompleto .= "e tenho $idade anos. <br>";
echo $nCompleto;

//3ª Forma: Utilização de chaves { }
$nome = "Angelo";
$sobrenome = "Ferreira";
$idade = 90;
echo "Meu nome é {$nome} {$sobrenome} e tenho {$idade} anos.<br>";

//4ª Forma: Utilização apenas de aspas duplas ("")
$nome = "Angelo";
$sobrenome = "Ferreira";
$idade = 90;
echo "Meu nome é $nome $sobrenome e tenho $idade anos.";
?>

</div>