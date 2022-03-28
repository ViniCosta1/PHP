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
$nomes = array("Primo" => "Rodrigo", "Mãe" => "Maria", "Vizinho" => "José", "Pai" => "Vinicius");
echo "<h3>Função: \"is_array\"</h3>";
echo "<h4>verificar se uma determinada variável é um array</h4>";
print_r($nomes);
echo "<br>";
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
echo "<h4>verifica se um determinado valor existe em alguma posição da array</h4>";

print_r($nomes);
echo "<br>";
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
echo "<h4>retorna um novo array com as chaves/indices do array passado como parâmetro</h4>";

print_r($nomes);
echo "<br>";
$keys = array_keys($nomes);
print_r($keys);

////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h3>Função: \"array_values\"</h3>";
echo "<h4>retorna um novo array com os valores do array passado como parâmetro</h4>";

print_r($nomes);
echo "<br>";
$values = array_values($nomes);
print_r($values);

////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h3>Função: \"array_merge\"</h3>";
echo "<h4>agrega o conteúdo de dois arrays</h4>";

$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");

print_r($carros);
echo "<br>";
print_r($motos);
echo "<br>";
echo "<br>";

$veiculos = array_merge($carros, $motos);
print_r($veiculos);

echo "<br>";

$veiculos = array_merge($motos, $carros);
print_r($veiculos);

////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h3>Função: \"array_pop\"</h3>";
echo "<h4>exclui a ultima posição do array</h4>";

print_r($carros);
echo "<br>";
echo array_pop($carros); //Vai escrever o valor que irá ser apagado
echo "<br>";
print_r($carros);

////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h3>Função: \"array_shift\"</h3>";
echo "<h4>exclui a primeira posição do array</h4>";

$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo "<br>";
echo array_shift($carros); //Vai escrever o valor que irá ser apagado
echo "<br>";
print_r($carros);

////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h3>Função: \"array_unshift\"</h3>";
echo "<h4>adiciona um ou mais elementos no início da array</h4>";

$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_unshift($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);

////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h3>Função: \"array_push\"</h3>";
echo "<h4>Adiciona um ou mais elementos no final da array</h4>";

$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_push($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);

////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h3>Função: \"array_combine\"</h3>";
echo "<h4>Mescla os dois arrays passados</h4>";

$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Vasco", "Flamengo", "Botafogo");

$times = array_combine($keys, $values); // Primeiro parâmetro vai ser os indices, e o segundo irá ser os valores 
print_r($times);

////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h3>Função: \"array_sum\"</h3>";
echo "<h4>Calcula a soma dos elementos de uma array</h4>";

$soma = array(5,6,10,8);
$total = array_sum($soma);
print_r($soma);
echo "<br>";
echo "Soma = ",array_sum($soma);
echo "<br>";
echo "Soma = ",$total;

////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h3>Função: \"explode\"</h3>";
echo "<h4>Transforma string em uma array</h4>";

$data = "30/02/2018";
echo $data;
echo "<br>";
$novaData = explode('/', $data);
print_r($novaData);

echo "<br>";
echo "<br>";

$frase = "Meu nome não é Johnny";
echo $frase;
echo "<br>";
$novaFrase = explode(' ', $frase);
print_r($novaFrase);

////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h3>Função: \"implode\"</h3>";
echo "<h4>Transforma uma array em uma string</h4>";

$nomes = array("Rodrigo", "Carlos", "Neusa", "Talita");
print_r($nomes);
echo "<br>";
$string = implode(", ", $nomes);
echo "$string"
?>