<?php
session_start();

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();
/* 
    * Só irar imprimir essas informações na tela quando a minha sessão no index.php for criada
    * Ou seja, para n dar erro, tenho que iniciar a página do index.php, e depois iniciar essa página
    ! Não se deve fechar o navegador, caso contrário, a session_id() irá mudar e ocorrerá um erro
*/