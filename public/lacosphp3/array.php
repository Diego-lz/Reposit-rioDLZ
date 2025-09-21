<?php
$produtos = [
    "Whey Protein" => 120,
    "Creatina de 1Kg" => 200,
    "Pasta de amendoim" => 60,
    "Leite" => 6,
    "Aveia" => 10
];

$total = 0;
foreach ($produtos as $nome => $preco) {
    echo "Produto: $nome - Preço: R$ " . number_format($preco, 2, ',', '.') . "<br>";
    $total += $preco;
}

echo "<br>Valor total da compra: R$ " . number_format($total, 2, ',', '.');
?>