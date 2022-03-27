<?php
    // * Conexão
    require_once 'db_connect.php';
    // * sessões
    session_start();

    // * botão enviar
    if(isset($_POST['btn-entrar'])):
        $erros = array(); // * Array de erros
        $login = mysqli_escape_string($connect, $_POST['login']); // * Filtrando dados para a consulta SQL
        $senha = mysqli_escape_string($connect, $_POST['senha']); // * Filtrando dados para a consulta SQL

        if (empty($login) or empty($senha)): // * Se o campo de login ou de senha estiver vazio...
            $erros[] = "<li>O campo login/senha precisa ser preenchido</li>";

        else:
            $sql = "SELECT login FROM usuarios WHERE login = '$login'"; // * Comando para verificar se existe esse login no Banco de Dados
            $resultado = mysqli_query($connect, $sql);

            if (mysqli_num_rows($resultado) > 0 ): // * Se houver alguma linha no vanco de dados...
                
                $senha = md5($senha);
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) == 1):
                
                    $dados = mysqli_fetch_array($resultado); // * Converte o resultado da consulta de $sql em uma array
                    mysqli_close($connect); // * Fechando a conexão
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: home.php'); // * Redirecionar para a página home.php

                else:
                    $erros[] = "Usuário e senha não confere";
                endif;

            else:
                $erros[] = "<li>Usuário Inexistente</li>";
            endif;
        endif;

    endif;
?>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>
            Login
        </h1>

        <?php
        if (!empty($erros)): // * Se o array $erros não estiver vazio...
            foreach ($erros as $erro):
                echo $erro;
            endforeach;
        endif;
        ?>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Login: <input type="text" name="login" id=""><br>
            Senha: <input type="password" name="senha" id=""><br>
            <button type="submit" name="btn-entrar">Entrar</button>
        </form>
    </body>
</html>