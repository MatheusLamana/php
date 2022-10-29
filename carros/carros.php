<?php

$carros = [
    "0" => [
        "Marca" => "Fiat",
        "Modelo" => "Uno",
        "Ano" => 2012,
    ],
    "1" => [
        "Marca" => "VW",
        "Modelo" => "Gol",
        "Ano" => 1998,
    ],
    "2" => [
        "Marca" => "GM",
        "Modelo" => "Onix",
        "Ano" => 2022,
    ],
    "3" => [
        "Marca" => "VW",
        "Modelo" => "Fusca",
        "Ano" => 1970,
    ],
    "4" => [
        "Marca" => "Fiat",
        "Modelo" => "Strada",
        "Ano" => 2015,
    ],
    "5" => [
        "Marca" => "Ford",
        "Modelo" => "Camaro",
        "Ano" => 2002,
    ],
    "6" => [
        "Marca" => "VW",
        "Modelo" => "Brasilia",
        "Ano" => 1985,
    ],
    "7" => [
        "Marca" => "VW",
        "Modelo" => "Kombi",
        "Ano" => 1978,
    ],
    "8" => [
        "Marca" => "VW",
        "Modelo" => "Fusca",
        "Ano" => 1978,
    ],
    "9" => [
        "Marca" => "VW",
        "Modelo" => "Fusca",
        "Ano" => 1988,
    ],
];

# Quantidade de marcas:
$marcas = array_unique(array_column($carros, 'Marca'));
$result = array_count_values($marcas);

$contar = count($result);
print_r("Quantidade de marcas são: " .$contar . "<br>");

foreach ($result as $key => $value) {
    echo "Sendo elas: ". $key . "<br>";
}

echo "<br>";


#Quantidade de veiculos
echo "Quantidade de veículos: <br>";
foreach($carros as $value){
    echo $value['Modelo'] . "</br>";
}


// $aa = array_column($carros, 'Ano');
// sort($aa);

// foreach ($aa as $key => $value) {
//     echo $value. " ". $key . "<br>";
// }


?>