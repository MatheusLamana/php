<?php

    $dia_semana = array(1 => "Domingo",
                        2 => "Segunda-Feira",
                        3 => "Terça-Feira", 
                        4 => "Quarta-Feira", 
                        5 => "Quinta-Feira", 
                        6 => "Sexta-Feira", 
                        7 => "Sabado"
);
    
    $numero = $_POST['aaa'] ?? null;

    if (!is_null($numero) && $numero > 0 && $numero <= 7){
        echo "O dia da semana é: " . $dia_semana[$numero] . "<br>";
    } else {
        echo "Valor inválido";
    }

?>
<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
        <input type="number" name="aaa">
        <input type="submit" name="acao" value="Enviar!">
    </form>

</body>
</html>