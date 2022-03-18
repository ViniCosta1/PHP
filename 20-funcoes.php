<?php
// * Criar uma função
function exibirNome() {
    echo "Meu nome é Vinicius";
}
exibirNome();

// * Parâmetros
echo "<hr>";

function exibirNome1($nome) {
    echo "Meu nome é $nome";
}
exibirNome1("Rogério");

echo "<hr>";

function calcularMedia($aluno, $nota1, $nota2, $nota3, $nota4) {
    $media = ($nota1 + $nota2 + $nota4 + $nota3)/4;

    if ($media >= 7):
        echo "$aluno, você foi aprovado! Com uma média de $media";
    else:
        echo "$aluno, você foi reprovado. Com uma média de $media";
    endif;
}
calcularMedia("Vinicius", 10, 6, 7, 10);