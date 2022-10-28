<?php

$meses = array(
    01 => "Janeiro",
         "Fevereiro",
         "Março",
         "Abril",
         "Maio",
         "Junho",
         "Julho",
         "Agosto",
         "Setembro",
         "Outubro",
         "Novembro",
         "Dezembro",
);

$valor = $_POST['aaa'];

if(!str_starts_with($valor, 0)){
    if($valor > 12){
        echo "Valor não corresponde aos meses.";
        exit;
    }
    echo "$meses[$valor]";
} else {
    echo "Pesquise o mês sem o zero";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="aaa">
        <input type="submit" name="enviar" value="Enviar!">
    </form>
</body>
</html>
