<?php
// * Sessões é o armazenamento de informações que podem ser usadas em várias páginas
// * Usamos sessões para criar carrinhos de compra, sistemas de login, etc.

session_start(); // * Iniciar sessão (Obrigatório ter isso no início de toda sessão)

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Veloster";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();