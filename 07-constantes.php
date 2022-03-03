<?php
// * Constantes
define("NOME", "José Carlos");
define("IDADE", 24);
define("ALTURA", 1.61);
define("CASADO", true);
echo NOME;
echo "<br>";
echo IDADE;
echo "<br>";
echo ALTURA;
echo "<br>";
echo CASADO;

echo "<hr>";
echo "Olá, meu nome é ".NOME.", minha altura é ".ALTURA." e eu tenho ".IDADE." anos";

echo "<hr>";
define("TIMES", ['vasco', 'flamengo', 'santos']);
echo TIMES[2];

echo "<hr>";
function exibeNome() {
    echo NOME;
}
exibeNome();