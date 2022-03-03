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