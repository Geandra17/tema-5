<?php
// Desafio 2

// 1. Criar um array associativo multidimensional chamado $carros
$carros = [
    [
        "marca" => "Toyota",
        "modelo" => "Corolla",
        "ano" => 2020,
        "cor" => "Prata"
    ],
    [
        "marca" => "Honda",
        "modelo" => "Civic",
        "ano" => 2019,
        "cor" => "Preto"
    ],
    [
        "marca" => "Ford",
        "modelo" => "Focus",
        "ano" => 2018,
        "cor" => "Azul"
    ]
];

// Função para exibir o array de carros de forma organizada
function exibirCarros($carros) {
    foreach ($carros as $index => $carro) {
        echo "Carro " . ($index + 1) . ":<br>";
        echo "Marca: " . $carro["marca"] . "<br>";
        echo "Modelo: " . $carro["modelo"] . "<br>";
        echo "Ano: " . $carro["ano"] . "<br>";
        echo "Cor: " . $carro["cor"] . "<br><br>";
    }
}

// 2. Exibir o array completo
echo "<strong>Array original:</strong><br>";
exibirCarros($carros);

// 3. Modificar a cor do segundo carro (Honda Civic) para "Branco"
$carros[1]["cor"] = "Branco";
echo "<strong>Array após modificar a cor do segundo carro:</strong><br>";
exibirCarros($carros);

// 4. Adicionar um novo carro ao array
$carros[] = [
    "marca" => "Chevrolet",
    "modelo" => "Cruze",
    "ano" => 2021,
    "cor" => "Vermelho"
];
echo "<strong>Array após adicionar um novo carro:</strong><br>";
exibirCarros($carros);

// 5. Remover o primeiro carro do array
array_shift($carros);
echo "<strong>Array após remover o primeiro carro:</strong><br>";
exibirCarros($carros);
?>