<?php
/*
    * is_array($array) = verificar se uma determinada variável é um array
    * in_array($valor, $array) = verifica se um determinado valor existe em alguma posição da array
    * array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro
    * array_values($array) = retorna um novo array com os valores do array passado como parâmetro
    * array_merge ($array1, $array2) = agrega o conteúdo de dois arrays
    * array_pop($array) = exclui a ultima posição do array
    * array_shift($array) = exclui a primeira posição do array
    * array_unshift($array, "valor") = adiciona um ou mais elementos no início da array
    * array_push($array, "valor", "valor") = Adiciona um ou mais elementos no final da array
    * array_combine($keys, $values) = Mescla os dois arrays passados
    * array_sum() = Calcula a soma dos elementos de uma array
    * explode("/", "20/03/2005") = Transforma string em uma array
    * implode("-", $array) = Transforma array em string
*/
$nomes = array("Rodrigo", "Maria", "José", "Vinicius");
echo "<h3>Função: \"is_array\"</h3>";
echo is_array($nomes); //  Se digitou digitou "1", quer dizer que foi "True"
echo "<br>";
var_dump(is_array($nomes));
echo "<br>";

if(is_array($nomes)):
    echo "É uma array";
else:
    echo "não é uma array";
endif;

////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h3>Função: \"in_array\"</h3>";

echo in_array("Rodrigo", $nomes);
echo in_array("Carlos", $nomes);
echo "<br>";

if (in_array("Vinicius", $nomes)):
    echo "Está na array!";
else:
    echo "Não está na array!";
endif;

////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h3>Função: \"array_keys\"</h3>";

$keys = array_keys($nomes);
print_r($keys);
?>