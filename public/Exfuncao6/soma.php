<?php

function soma($a, $b) {
    $soma = $a + $b;
    echo "A soma de $a + $b é: $soma <br>";

}

function retorne($a, $b) {
    $soma = soma($a, $b);
    return $soma;

}

retorne(20,20);
?>