<?php

for ($contador = 0; $contador <= 10; $contador++):
    echo "Contador com For é $contador<br>";
endfor;

echo "<hr>";
echo "<h3>Tabuáda</h3>";
for ($contador = 0; $contador <= 10; $contador++):
    echo "8 x $contador = ".($contador*8)."<br>";
endfor;

echo "<hr>";
$cores = array("Verde", "Vermelho", "Azul", "Preto");

foreach($cores as $valor): // Para cada item do array, ele atribui a variável $valor (a cada repetição)
    echo "$valor <br>";
endforeach;

echo "<hr>";

foreach($cores as $indice => $valor): // Para cada item do array, ele atribui a variável $valor (a cada repetição)
    echo "$indice => $valor <br>";
endforeach;
?>