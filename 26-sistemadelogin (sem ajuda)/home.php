<?php
    // * Conexão
    require_once 'db_connect.php';

    // * Sessão
    session_start();

    // * Verificar se a pessoa fez o login. Isso impede dela entrar nessa página pelo link sem logar
    if (!isset($_SESSION['logado'])):
        header('Location: index.php');
    endif;

    // * Dados
    $id = $_SESSION['id_usuario']; // * Pegando valor do arquivo index.php através de sessões

    $sql = "SELECT * FROM usuarios WHERE id = '$id'"; // * Código SQL para verificar se existe esse id no Banco de Dados

    $resultado = mysqli_query($connect, $sql); // * Fazer a consulta nesse Banco de Dados com o comando $sql

    $dados = mysqli_fetch_array($resultado); // * Converte o resultado da consulta em uma array, onde os índices são os nomes das colunas
    mysqli_close($connect);
?>

<html>
    <head>
        <title>Página restrita</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>
            Olá <?php echo $dados['nome']; ?>
        </h1>
        <a href="logout.php">Sair</a>
    </body>
</html>