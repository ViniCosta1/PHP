<?php
include_once "connection.php";
session_start();

$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$email = $_REQUEST['email'];
$idade = $_REQUEST['idade'];

try {
    $stmt = $con->prepare("UPDATE clientes SET nome = :a, sobrenome = :b, email = :c, idade = :d WHERE id = :e");
    $stmt->bindParam(":a", $nome);
    $stmt->bindParam(":b", $sobrenome);
    $stmt->bindParam(":c", $email);
    $stmt->bindParam(":d", $idade);
    $stmt->bindParam(":e", $id);
    $stmt->execute();
    $_SESSION['mensagem'] = "Cliente atualizado com sucesso";
    header ("Location: ../index.php");
} catch (Exception $e) {
    $_SESSION['mensagem'] = "Erro ao atualizar esse cliente";
    header ("Location: ../index.php");
}