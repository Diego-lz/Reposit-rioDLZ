<?php
    $cor = "";
    $alunos = [
        ["nome" => "Ana", "nota" => 7, "Situaçâo" =>""],
        ["nome" => "Bia", "nota" => 6, "Situaçâo" =>""],
        ["nome" => "Carlos", "nota" => 9, "Situaçâo" =>""]
       ];

foreach ($alunos as $nome) {
    if ($nome ["nota"]>= 7) {
        $nome ["Situação"] = "Aprovado";
        $cor = "blue";
    } else {
        $nome ["Situação"] = "Reprovado";
        $cor = "red";
    }

    echo "Aluno(a) {$nome["nome"]} tirou nota {$nome["nota"]} - Situação: <span style = 'color: $cor;'> {$nome ["Situação"]}</span> <br>";
}

echo "<br>";

$soma = 0;
foreach ($alunos as $nome) {
    $soma += $nome["nota"];
}
 $media = $soma / count($alunos);
 echo "A média da turma: " . number_format($media, 2, ',', '.');
?>