<?php

$estados = [
    "Regiao_norte" => [
        "Acre",
        "Amapá",
        "Amazonas",
        "Pará",
        "Rondônia",
        "Roraima",
        "Tocantins"
    ],
    "Regiao_nordeste" => [
        "Alagoas",
        "Bahia",
        "Ceará",
        "Maranhão",
        "Paraíba",
        "Piauí",
        "Pernambuco",
        "Rio Grande do Norte",
        "Sergipe"
    ],
    "Regiao_Centro-Oeste" => [
        "Goiás",
        "Mato Grosso",
        "Mato Grosso do sul",
    ],
    "Regiao_Sudeste" => [
        "Espirito Santo",
        "Minas Gerais",
        "Rio de Janeiro",
        "São Paulo"
    ],
    "Regiao_Sul" => [
        "Paraná",
        "Rio Grande do Sul",
        "Santa Catarina",
    ]
];

    $estado_selecionado = $_POST['nome'];

    if(in_array($estado_selecionado, $estados['Regiao_norte'])){
        echo $estado_selecionado . " - > " . "Região Norte";
    } else if (in_array($estado_selecionado, $estados['Regiao_nordeste'])){
        echo $estado_selecionado . " - > " . "Região Nordeste";
    } else if (in_array($estado_selecionado, $estados['Regiao_Centro-Oeste'])){
        echo $estado_selecionado . " - > " . "Região Centro-Oeste";
    } else if(in_array($estado_selecionado, $estados['Regiao_Sudeste'])){
        echo $estado_selecionado . " - > " . "Região Sudeste";
    } else if(in_array($estado_selecionado, $estados['Regiao_Sul'])){
        echo $estado_selecionado . " - > " . "Região Sul";
    } else {
        echo  "Nao tem no Array";
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
        <select name="nome">
            <option value="Acre">Acre</option>
            <option value="Amapá">Amapá</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Pará">Pará</option>
            <option value="Rondônia">Rondônia</option>
            <option value="Roraima">Roraima</option>
            <option value="Tocantins">Tocantins</option>
            <option value="Alagoas">Alagoas</option>
            <option value="Bahia">Bahia</option>
            <option value="Ceará">Ceará</option>
            <option value="Maranhão">Maranhão</option>
            <option value="Paraíba">Paraíba</option>
            <option value="Pernambuco">Pernambuco</option>
            <option value="Piauí">Piauí</option>
            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
            <option value="Sergipe">Sergipe</option>
            <option value="Goiás">Goiás</option>
            <option value="Mato Grosso">Mato Grosso</option>
            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
            <option value="Espirito Santo">Espirito Santo</option>
            <option value="Minas Gerais">Minas Gerais</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Paraná">Paraná</option>
            <option value="Santa Catarina">Santa Catarina</option>
            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
        </select>
        <button>Pesquisar!</button>
    </form>
    
</body>
</html>
