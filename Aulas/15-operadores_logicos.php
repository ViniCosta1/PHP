<?php
/*
    * Operadores Lógicos: nos permitem fazer comparações entre expressões
    
    * e (&& - and)
    * ou (|| - or)
    * ou exclusivo (xor)
    * negação (!)
*/

$idade = 25;
$nome = "Rodrigo";

// * Verdadeiro: quando todas expressões forem verdadeiras.
// * Falso: quando uma expressão for falsas.
echo "<h3>Operador e (&& - and)</h3>";
if (($idade == 25) && ($nome == "Rodrigo")):
    echo "É verdadeiro!";
else:
    echo "É falso!";
endif;
echo "<hr>";


// * Verdadeiro: quando uma expressão for verdadeira.
// * Falso: quando todas as expressões forem falsas.
echo "<h3>Operador ou (|| - or)</h3>";
if (($idade == 25) or ($nome == "Rodrigo")):
    echo "É verdadeiro!";
else:
    echo "É falso!";
endif;
echo "<hr>";


// * Verdadeiro: quando apenas 1 das expressões estiverem corretas.
// * False: Quando todas as expressões forem verdadeiras.
echo "<h3>Operador ou exclusivo (xor)</h3>";
if (($idade == 25) xor ($nome == "Rodrigo")):
    echo "É verdadeiro!";
else:
    echo "É falso!";
endif;
echo "<hr>";

// * Utiliza ajuda de outros operadores para realizar a comparação.
// * Ele inverte o booleano da expressão. Exemplo:
// * Se $idade = 23 e a expressão fala que ($idade == 23), é True.
// * Se $idade = 23, mas você tem na expressão !(expressão), ela
// * se tornará False. O mesmo vice e versa. Basta ler ela como "Não é..."
echo "<h3>Operador negação (!)</h3>";
if (!($idade == 25) and ($nome == "Rodrigo")):
    echo "É verdadeiro!";
else:
    echo "É falso!";
endif;

?>