<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a Media</title>
</head>
<body>
    
<?php

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    $media = ($nota1 + $nota2) / 2;
 
    if($media >= 7 && $media < 10){
        echo 'Aprovado<br>';
    } else if($media < 7){
        echo 'Reprovado<br>';
    } else if ($media == 10){
        echo 'Aprovado com Distinção<br>';
    } else if($media >= 0 && $media <11){
        echo "O valor é: " .$media. "<br>";
    } else {
        echo "Valor inválido preencha as notas no valor de 0 a 10";
    }

    echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Voltar</a>";
?>
    
</body>
</html>
