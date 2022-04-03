<?php
session_start();
require_once "php-action/db_connection.php";

// * Delete
if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);
    $sql = "DELETE FROM clientes WHERE id = '$id'";

        /*
        * Verificar se foi cadastrado com sucesso ou não 
        ? Não sei o porquê está cadastrando qualquer coisa no banco de dados
        ? Mesmos se os dados não estiverem coerentes com as informações, ou estiverem vazios
    */
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar.";
        header('Location: index.php');
    endif;
endif;