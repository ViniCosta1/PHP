<?php
session_start();
require_once "db_connection.php";


if (isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    
    // * Está pegando pelo forms do arquivo editar.php onde temos um input escondido
    $id = mysqli_escape_string($connect, $_POST['id']);
    
    // * Essa linha cria uma linha na tabela clientes através desse código SQL no banco de dados
    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

    /*
        * Verificar se foi cadastrado com sucesso ou não 
        ? Não sei o porquê está cadastrando qualquer coisa no banco de dados
        ? Mesmos se os dados não estiverem coerentes com as informações, ou estiverem vazios
    */
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar.";
        header('Location: ../index.php');
    endif;
endif;