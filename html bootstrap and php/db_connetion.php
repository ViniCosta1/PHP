<?php
$servername = "localhost";
$usename = "root";
$password = "";
$db_name = "sistemalogin2";

$connect = mysqli_connect($servername, $usename, $password, $db_name);

if (mysqli_connect_error()):
    echo "Não foi possivel se conectar no banco";
endif;