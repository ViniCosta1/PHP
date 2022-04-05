<?php
require_once "db_connection.php";
session_start();

// * Clear - Função para prevenir ataques XSS (colocam scripts dentro de inputs no site)
function clear($input) {
    global $connect;

    // * SQL
    $var = mysqli_escape_string($connect, $input);

    // * Filtrando
    $var = htmlspecialchars($var);
    return $var;
}

if (isset($_POST['btn-cadastrar'])):
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

    // * Essa linha cria uma linha na tabela clientes através desse código SQL no banco de dados
    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    /*
        * Verificar se foi cadastrado com sucesso ou não 
        ? Não sei o porquê está cadastrando qualquer coisa no banco de dados
        ? Mesmos se os dados não estiverem coerentes com as informações, ou estiverem vazios
    */
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar.";
        header('Location: ../index.php');
    endif;
endif;