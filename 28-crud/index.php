<?php

// * Mensagem que aparece se foi cadastrado com sucesso ou não
// ! Está mensagem não desaparece após um tempo, ela permanece até que a página seja atualizada
// TODO: Adicionar Toast a essa mensagem para ela desaparecer automaticamente
// TODO: Após concertar o erro, fazer outro arquivo dentro de includes com o nome "mensagem.php" e enviar esse código para lá
// TODO: Fazer um include desse novo arquivo
session_start();
if (isset($_SESSION['mensagem'])) :
    echo $_SESSION['mensagem'];
endif;
session_unset();

// * conexão
include_once "php-action/db_connection.php";

// * Chamando o header
include_once "includes/header.php";
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
                    <tr>
                        <?php
                        $sql = "SELECT * FROM clientes";
                        $resultado = mysqli_query($connect, $sql);

                        // * Laço de repetição para mostrar os dados na tabela
                        while ($dados = mysqli_fetch_array($resultado)) :
                        ?>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['sobrenome']; ?></td>
                            <td><?php echo $dados['email']; ?></td>
                            <td><?php echo $dados['idade']; ?></td>
                            <td class="pr-1 pr-sm-0 pr-md-0 pl-0"><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a></td>

                            <!-- Botão com Modal: Não sei o pq eu tive que adicionar o id ao data-target-->
                            <td class="pl-1 pl-sm-0 pl-md-0"><button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $dados['id']; ?>"><i class="fa-solid fa-trash-can" data-toggle="modal" data-target="#exampleModal"></i></button></td>

                            <!-- Modal: Não sei mto bem como funciona ainda e nem pq tive que pegar o id do cliente no id dessa div -->
                            <div class="modal fade" id="exampleModal<?php echo $dados['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                            <form method="post" action="deletar.php">
                                                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                                <button name="btn-deletar" type="submit" class="btn btn-danger">Sim! Tenho certeza</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </tr>

                <?php endwhile; /* 
                        * Fim do laço de repetição 
                        */ ?>

                </tbody>
            </table>
            <a href="adicionar.php" class="btn btn-primary">ADICIONAR CLIENTE</a>
        </div>
    </div>
</div>


<?php
// * Chamando o footer
include_once "includes/footer.php";
?>