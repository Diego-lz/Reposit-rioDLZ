<?php
$curso = "PHP";

function mostrarCurso() {
    global $curso;
    echo $curso;
}

mostrarCurso()
?>