<?php


// 1. Criar um array indexado multidimensional chamado $carros
$carros = [
    ["Toyota", "Corolla", 2020, "Prata"],
    ["Honda", "Civic", 2019, "Preto"],
    ["Ford", "Focus", 2018, "Azul"]
];

// Função para exibir o array de carros de forma organizada
function exibirCarros($carros) {
    foreach ($carros as $index => $carro) {
        echo "Carro " . ($index + 1) . ":<br>";
        echo "Marca: " . $carro[0] . "<br>";
        echo "Modelo: " . $carro[1] . "<br>";
        echo "Ano: " . $carro[2] . "<br>";
        echo "Cor: " . $carro[3] . "<br><br>";
    }
}

// Passo 2: Exibir o array original
echo "<strong>Array original:</strong><br>";
exibirCarros($carros);

// 3. Modificar a cor do segundo carro (Honda Civic) para "Branco"
$carros[1][3] = "Branco";
echo "<strong>Array após modificar a cor do segundo carro:</strong><br>";
exibirCarros($carros);

// 4. Adicionar um novo carro ao array
$carros[] = ["Chevrolet", "Cruze", 2021, "Vermelho"];
echo "<strong>Array após adicionar um novo carro:</strong><br>";
exibirCarros($carros);

// 5. Remover o primeiro carro do array
array_shift($carros);
echo "<strong>Array após remover o primeiro carro:</strong><br>";
exibirCarros($carros);
