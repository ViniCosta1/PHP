<?php
$carros = array("BMW", "Veloster", "Hilux");
print_r($carros);
echo "<br>";
echo $carros[1];

// * Podemos também alterar o índice dos elementos
echo "<hr>";

$ingredientes = array(1=>"Ovos", 2=>"Farinha", 3=>"Leite");
print_r($ingredientes);
echo "<br>";
echo $ingredientes[1];

// TODO: Inserir elementos em uma lista
echo "<hr>";

$carros[] = "Amarok";
$carros[10] = "Camaro";
print_r($carros);
echo "<br>";
echo $carros[10];

// TODO: Outro modo de fazer uma lista
echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[6] = "Suzuki";
print_r($motos);
echo $motos[0];

// TODO: Outro modo de fazer uma lista
echo "<hr>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo $clientes[2];
echo "<hr>";

// * Count
echo count($carros);
$totalClientes = count($clientes);
echo "<hr>";
echo $totalClientes;
echo "<hr>";

// * foreach
foreach($clientes as $valor) {
   echo $valor."<br>"; 
}
echo "<hr>";

// TODO: Arrays Associativas
$pessoa =  array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);
$pessoa["cidade"] = "Lins";
echo $pessoa['cidade'];
echo "<br>";

foreach($pessoa as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}
echo "<hr>";

// TODO: Arrays Multidimensionais
$times = array(
    "cariocas" => array("campeao" => "vasco", "vice" => "flamengo", "terceiro" => "botafogo"),
    "paulistas" => array("santos", "são paulo", "palmeiras"),
    "baianos" => array("bahia", "vitoria", "itabuna")
    );
echo $times["paulistas"][1];
echo "<br>";

foreach($times["cariocas"] as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
