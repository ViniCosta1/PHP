<?php
include_once "connection.php";
session_start();

$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$email = $_REQUEST['email'];
$idade = $_REQUEST['idade'];

/* 
    * Como estamos trabalhando com PDO, a var $con virou uma classe "herdando" os métodos do PDO
    * Dessa forma, a var $stmt também vai virar uma classe "herdando" os métodos da var $con
*/
try {
    $stmt = $con->prepare("INSERT INTO clientes (nome, sobrenome, email, idade) VALUES (:a, :b, :c, :d)"); // * Esses valores são os "bindParam" [ou parâmetros não declarados]
    $stmt->bindParam(":a", $nome); // * Declarando o bindParam :a
    $stmt->bindParam(":b", $sobrenome); // * Declarando o bindParam :b
    $stmt->bindParam(":c", $email); // * Declarando o bindParam :c
    $stmt->bindParam(":d", $idade); // * Declarando o bindParam :d
    $stmt->execute(); // * Executando a preparação feita, enviando o código SQL para o banco de dados

    $_SESSION['mensagem'] = "Cadastrado com sucesso";
    header("Location: ../index.php");
} 
catch (Exception) {
    $_SESSION['mensagem'] = "Erro ao cadastrar no Banco de Dados";
    header("Location: ../index.php");
}