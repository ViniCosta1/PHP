<?php
// * Escopo Global
$nome = "Rodrigo Oliveira";
$a = 1;
$b = 5;
$c = 7;

function exibeNome() {
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";
////////////////////////////////////////////////////

function exibeCidade() {
    // * Escopo Local
    global $cidade;
    $cidade = "Lins";
}

exibeCidade();
echo $cidade;
echo "<hr>";
////////////////////////////////////////////////////

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();