<?php
// * Conexão
include_once "php-action/db_connection.php";
// * Chamando o header
include_once "includes/header.php";

// * Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<!-- Conteúdo da página -->
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <h3 class="text-dark mt-3">Editar Cliente</h3>

            <div class="dropdown-divider"></div>

            <form method="post" action="php-action/update.php">
                <div class="col-12 col-sm-12 col-md-12">

                    <!-- Esse input do tipo hidden é para pegarmos o ID pelo forms sem que o cliente veja o campo -->
                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

                    <label for="nome">Nome:</label>
                    <input class="form-control mb-4" type="text" name="nome" id="nome" placeholder="Nome" value="<?php echo $dados['nome']; ?>">
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                    <label for="sobrenome">Sobrenome:</label>
                    <input class="form-control mb-4" type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value="<?php echo $dados['sobrenome']; ?>">
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                    <label for="email">Email:</label>
                    <input class="form-control mb-4" type="email" name="email" id="email" placeholder="Email" value="<?php echo $dados['email']; ?>">
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                    <label for="idade">Idade:</label>
                    <input class="form-control mb-4" type="int" name="idade" id="idade" placeholder="Idade" value="<?php echo $dados['idade']; ?>">
            </div>
            
            <button class="btn btn-primary mt-1 mt-sm-0 mt-md-0" name="btn-editar" type="submit">Atualizar</button>
            <a href="index.php" class="btn btn-success mt-1 mt-sm-0 mt-md-0" type="submit">Lista de Clientes</a>
        </form>
    </div>
</div>
</div>


<?php
// * Chamando o footer
include_once "includes/footer.php";
?>