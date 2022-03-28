<?php
// TODO: Sempre fazer primeiro essa conexão com as informações do seu banco de dados
// * Conexão de dados
// * dados
$servername = "localhost";
$usename = "root";
$password = "";
$db_name = "sistemalogin2";

// * Conexão
$connect = mysqli_connect($servername, $usename, $password, $db_name);

if (mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
endif;