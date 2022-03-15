<?php
/*
    * Operadores de incremento e decremento

    * Servem para somar ou subtrair em (=1 ou -1)
    * Qualquer valor do tipo numérico ou string
*/

// * Pré-incremento
// Incrementou, depois retornou o valor
$valor = 20;
echo ++$valor;
echo "<br>";

// * Pós-incremento
// Retornou, depois incrementa o valor
$valor = 20;
echo $valor++;
echo "<br>";
echo $valor;

echo "<hr>";
// * Pré-decremento
// Decrementou, depois retornou o valor
$valor = 20;
echo --$valor;
echo "<br>";

// * Pós-decremento
// Retornou, depois decrementa o valor
$valor = 20;
echo $valor--;
echo "<br>";
echo $valor;
?>