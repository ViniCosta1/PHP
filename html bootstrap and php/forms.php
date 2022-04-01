<?php
include_once "db_connetion.php";
include_once "index.php";
session_start();

if (isset($_POST['enviar'])):
    $erros = array();
    $_SESSION['erros'] = $erros;
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    $sql = "SELECT login FROM usuarios WHERE login = '$login'";
    $resultado = mysqli_query($connect, $sql);

    if (mysqli_num_rows($resultado) > 0):
        $senha = md5($senha);
        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) == 1):
            $dados = mysqli_fetch_array($resultado);
            $_SESSION['logado'] = true;
            $_SESSION['id'] = $dados['id'];
            mysqli_close($connect);
            header("Location: home.php");
        else:
            $erros[] = "<li>Senha Incorreta!</li>";
        endif;
    else:
        $erros[] = "<li>Usuário não encontrado</li>";
    endif;
endif;