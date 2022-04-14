<?php
// * Encerrando a sessão e voltando para a página de login
session_start();
session_unset();
session_destroy();
header('Location: index.php');