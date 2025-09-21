<?php

function calcularMedia ($nota1, $nota2, $nota3) {
    $media = ( $nota1 + $nota2 + $nota3 ) / 3;
    echo "A média do aluno é: $media";
}

calcularMedia(4, 6, 5);
?>