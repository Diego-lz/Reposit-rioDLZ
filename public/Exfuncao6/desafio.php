<?php

function calcularMedia($nota1, $nota2, $nota3) {
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return $media;
}

function verificarSituacao($media) {
    if ($media >= 7) {
        return "Aprovado!";
    } else {
        return "Reprovado!";
    }

}
$aluno1 = "Diego";
$media1 = calcularMedia(10,6,8);
$situacao1 = verificarSituacao($media1);
echo " O aluno $aluno1 tem a média: " . number_format($media1, 2, ',', '.') . " Sua situação é: $situacao1 <br>";

$aluno2 = "Maria";
$media2 = calcularMedia(5,5,9);
$situacao2 = verificarSituacao($media2);
echo " A aluna $aluno2 tem a média: " . number_format($media2, 2, ',', '.') . " Sua situação é: $situacao2 <br>";


?>