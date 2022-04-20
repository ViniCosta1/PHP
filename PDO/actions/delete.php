<?php
include_once "connection.php";
session_start();

$id = $_REQUEST['id'];

try {
    $rs = $con->prepare("DELETE FROM clientes WHERE id = :a");
    $rs->bindParam(":a", $id);
    $rs->execute();
    $_SESSION['mensagem'] = "Cliente deletado com sucesso";
    header ("Location: ../index.php");
} catch (Exception $e) {
    $_SESSION['mensagem'] = "Erro ao deletar cliente";
    header ("Location: ../index.php");
}