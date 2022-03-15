<?php
/* 
    * Operador Spaceship <=>
    * Ele tem esse nome pq, de acordo com a internet, ele
    * parece uma nave especial.

    * Ele é um "operador de comparação", como o ==, < e >.
    * Ele pode apenas fazer comparação de números. Ou seja,
    * apenas de tipos Int.

    * Basicamente ele pode retornar três valores:
    * -1: Quando o lado esquerdo for o número menor.
    * 0: Quando os números forem iguais.
    * 1: Quando o lado direito for o número menor.
*/

var_dump(20 <=> 30);
echo "<br>";

var_dump(30 <=> 30);
echo "<br>";

var_dump(50 <=> 30);
echo "<br>";
?>