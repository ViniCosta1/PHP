<?php
// * Laços de Repetição While & Do While
// * While
$contador = 1;
while ($contador <= 10):
    echo "Contador com while é $contador<br>";
    $contador++;
endwhile;

echo "<hr>";


// * Do while
$contador = 1;
do {
    echo "Contador com Do while é $contador<br>";
    $contador++;
} while ($contador <= 10);
?>