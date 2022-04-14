<?php
// * Conexão com Banco de Dados
// * Dados do Banco de Dados
$servername = "localhost";
$usename = "root";
$password = "";
$db_name = "sistemalogin";

// * Dados para a conexão com o Banco
$connect = mysqli_connect($servername, $usename, $password, $db_name);

if (mysqli_connect_error()):
    echo "Falha na Conexão: ".mysqli_connect_error();
endif;