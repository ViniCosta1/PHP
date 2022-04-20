<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" integrity="sha512-57lHfvbE5GLWA20qDTCTRUpKntBnFlG0V+x8f3q3DqZK6XlHGVsbpCCI/kadtaFBMEYmq5IeVZnsWjWx2QoQtw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Documento</title>
</head>
<body>
    <?php
    include_once "actions/connection.php";
    
    $id = $_REQUEST['id'];
    $rs = $con->query("SELECT * FROM clientes WHERE id = '$id'");
    $dados = $rs->fetch(PDO::FETCH_OBJ);
    ?>

<!-- Conteúdo da página -->
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <h3 class="text-dark mt-3">Editar Cliente</h3>

            <div class="dropdown-divider"></div>

            <form method="post" action="actions/edit.php">
                <input type="hidden" name="id" value="<?php echo $dados->id?>">

            <div class="col-12 col-sm-12 col-md-12">
                    <label for="nome">Nome:</label>
                    <input class="form-control mb-4" type="text" name="nome" id="nome" placeholder="Nome" value="<?php echo $dados->nome?>">
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                    <label for="sobrenome">Sobrenome:</label>
                    <input class="form-control mb-4" type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value="<?php echo $dados->sobrenome?>">
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                    <label for="email">Email:</label>
                    <input class="form-control mb-4" type="email" name="email" id="email" placeholder="Email" value="<?php echo $dados->email?>">
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                    <label for="idade">Idade:</label>
                    <input class="form-control mb-4" type="int" name="idade" id="idade" placeholder="Idade" value="<?php echo $dados->idade?>">
            </div>
            
            <button class="btn btn-primary mt-1 mt-sm-0 mt-md-0" name="btn-cadastrar" type="submit">Editar</button>
            <a href="index.php" class="btn btn-success mt-1 mt-sm-0 mt-md-0" type="submit">Lista de Clientes</a>
        </form>
    </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.js" integrity="sha512-JtLrV1ofzavnjW9efbM8bX78Kcx6dvZPn+VhmJfBg4yKQvqxMX4FQI7NjAHb6cviH/92xOHBI74kVPsafPnnHQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>