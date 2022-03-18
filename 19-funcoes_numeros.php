<?php
// * Funções para números
/*
    * number_format - Formatar números
    * round - Arredondar
    * ceil - Sempre irá arredondar para cima
    * floor - Sempre irá arredondar para baixo
    * rand - Valores aleatórios dentro de um intervalo fornecido.
*/
echo "<h3>Função: number_format(*muitos parâmetros, consultar o código*)</h3>";
$db = 1234.56;
echo $db;
echo "<br>";
$preço = number_format($db, 2, ",", "."); // * Primeiro parâmetro é o número e o segundo é a quantidade de casas decimais.
// * Terceiro parâmetro é o separador de valores decimais e o quanto parâmetro é o separador de milhares.
echo "O valor do produto é: R$".$preço;

////////////////////////////////////////////////////
echo "<hr>";

echo "<h3>Função: round(*número*)</h3>";
echo $db;
echo "<br>";
echo round($db); // * Se as casas decimais forem maiores ou iguais a .5, é arredondado para cima.
// * Se as casas decimais forem menores que .5, é arredondado para baixo.

////////////////////////////////////////////////////
echo "<hr>";

echo "<h3>Função: ceil(*número*)</h3>";
echo 5.10;
echo "<br>";
echo ceil(5.10); // * Mesma coisa do round, mas ele sempre irá arredondar para cima.

////////////////////////////////////////////////////
echo "<hr>";

echo "<h3>Função: floor(*número*)</h3>";
echo 8.90;
echo "<br>";
echo floor(8.90); // * Mesma coisa do round, mas ele sempre irá arredondar para baixo.

////////////////////////////////////////////////////
echo "<hr>";

echo "<h3>Função: rand(*valor inicial*, *valor final*)</h3>";
echo rand(1,20);