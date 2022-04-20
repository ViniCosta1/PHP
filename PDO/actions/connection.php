<?php
try {
    $con = new PDO(
        "mysql:host=localhost;dbname=pdo", // * Host e nome do banco PS: TEM que estar tudo junto assim
        "root", // * Usuário
        "" // * Senha
    );

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
