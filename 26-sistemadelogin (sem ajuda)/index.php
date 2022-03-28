<?php

    // * Conexão com o arquivo "db_connect.php"
    require_once 'db_connect.php'; // * Mesma coisa que o import do Python

    // * Iniciar Sessão
    session_start();

    // * Botão enviar
    if (isset($_POST['Entrar'])):
        $erros = array();
        $login = mysqli_escape_string($connect, $_POST['login']); // * Ele está se conectando ao banco ($connect) e procurando pelo que foi digitado no login

        $senha = mysqli_escape_string($connect, $_POST['senha']); // * Ele está se conectando ao banco ($connect) e procurando pelo que foi digitado na senha

        if (empty($login) or empty($senha)): // * Se o campo senha ou o campo login estiver vazio...
            $erros[] = "<li>O campo login/senha precisa ser preenchido</li>";

        else:
            $sql = "SELECT login FROM usuarios WHERE login = '$login'"; // * Código SQL para verificar se existe esse login no Banco de Dados

            $resultado = mysqli_query($connect, $sql); // * Esse comando serve para fazer uma consulta no Banco de Dados

            if (mysqli_num_rows($resultado) > 0): // * Se houver alguma linha no Banco de Dados...
                
                $senha = md5($senha); // * Criptografando a senha digitada no forms em MD5 (usada no banco de dados)

                $sql = "SELECT login FROM usuarios WHERE login = '$login' and senha = '$senha'"; // * Código SQL para verificar se existe esse login no Banco de Dados com essa senha

                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) == 1):
                    
                    $dados = mysqli_fetch_array($resultado); // * Converte o resultado da consulta de $sql em uma array. Cada nome de coluna será o index do dado no Banco de Dados

                    mysqli_close($connect); // * Fechando a conexão

                    $_SESSION['logado'] = true; // * Criando um index para o valor true

                    $_SESSION['id_usuario'] = $dados['id']; // * Criando um index para o valor $dados['id']
                    
                    header('Location: home.php'); // * Redirecionar para a página home.php
                else:
                    $erros[] = "<li>Usuário e senha não confere</li>";
                endif;
            endif;
        endif;
    endif;
?>

<html> // * Fazer o HTML com o formulário primeiro
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>

    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Login: <input type="text" name="login" id="">
            Senha: <input type="password" name="senha" id="">
            <button type="submit" name="Entrar"></button>
        </form>
    </body>
</html>