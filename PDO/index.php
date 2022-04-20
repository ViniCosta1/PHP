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
session_start();
if (isset($_SESSION['mensagem'])):
    echo $_SESSION['mensagem'];
    session_unset();
endif;
?>

<!-- Conteúdo da página -->
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <h3 class="text-dark mt-3">Clientes</h3>
            <table class="table table-light table-striped">
                <!-- table-striped faz com que a tabela fique zebrada -->
                <thead>
                    <tr>
                        <th>Nome:</th>
                        <th>Sobrenome:</th>
                        <th>Email:</th>
                        <th>Idade:</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $rs = $con->query("SELECT * FROM clientes");
                        while ($linha = $rs->fetch(PDO::FETCH_OBJ)):
                    ?>
                    <tr>
                            <td><?php echo $linha->nome . "<br/>"?></td>
                            <td><?php echo $linha->sobrenome . "<br/>"?></td>
                            <td><?php echo $linha->email . "<br/>"?></td>
                            <td><?php echo $linha->idade . "<br/>"?></td>
                            <td class="pr-1 pr-sm-0 pr-md-0 pl-0"><a href="editar.php?id=<?php echo $linha->id?>" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a></td>

                            <!-- Botão com Modal: Não sei o pq eu tive que adicionar o id ao data-target-->
                            <td class="pl-1 pl-sm-0 pl-md-0"><button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-trash-can" data-toggle="modal" data-target="#exampleModal"></i></button></td>

                            <!-- Modal: Não sei mto bem como funciona ainda e nem pq tive que pegar o id do cliente no id dessa div -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Opa!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Você tem certeza que deseja deletar esse cliente?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>

                                            <form method="post" action="actions/delete.php">
                                                <input type="hidden" name="id" value="<?php echo $linha->id?>">
                                                <button name="btn-deletar" type="submit" class="btn btn-danger">Sim! Tenho certeza</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;?>
                    </tr>
                </tbody>
            </table>
            <a href="adicionar.php" class="btn btn-primary">ADICIONAR CLIENTE</a>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.js" integrity="sha512-JtLrV1ofzavnjW9efbM8bX78Kcx6dvZPn+VhmJfBg4yKQvqxMX4FQI7NjAHb6cviH/92xOHBI74kVPsafPnnHQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>