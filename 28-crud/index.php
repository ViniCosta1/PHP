<?php

// * Mensagem que aparece se foi cadastrado com sucesso ou não
// ! Está mensagem não desaparece após um tempo, ela permanece até que a página seja atualizada
session_start();
if (isset($_SESSION['mensagem'])):
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
            <table class="table table-light table-striped"> <!-- table-striped faz com que a tabela fique zebrada -->
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
                            while ($dados = mysqli_fetch_array($resultado)):
                        ?>
                        <td><?php echo $dados['nome'];?></td>
                        <td><?php echo $dados['sobrenome'];?></td>
                        <td><?php echo $dados['email'];?></td>
                        <td><?php echo $dados['idade'];?></td>
                        <td class="pr-1 pr-sm-0 pr-md-0 pl-0"><a href="" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a></td>
                        <td class="pl-1 pl-sm-0 pl-md-0"><a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>

                        <?php endwhile; /* 
                        * Fim do laço de repetição 
                        */?>
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