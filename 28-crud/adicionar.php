<?php
// * Chamando o header
include_once "includes/header.php";
?>

<!-- Conteúdo da página -->
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <h3 class="text-dark mt-3">Novo Cliente</h3>

            <div class="dropdown-divider"></div>

            <form method="post" action="php-action/create.php">
                <div class="col-12 col-sm-12 col-md-12">
                    <label for="nome">Nome:</label>
                    <input class="form-control mb-4" type="text" name="nome" id="nome" placeholder="Nome">
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                    <label for="sobrenome">Sobrenome:</label>
                    <input class="form-control mb-4" type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                    <label for="email">Email:</label>
                    <input class="form-control mb-4" type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                    <label for="idade">Idade:</label>
                    <input class="form-control mb-4" type="number" name="idade" id="idade" placeholder="Idade">
            </div>
            
            <button class="btn btn-primary mt-1 mt-sm-0 mt-md-0" name="btn-cadastrar" type="submit">Adicionar</button>
            <a href="index.php" class="btn btn-success mt-1 mt-sm-0 mt-md-0" type="submit">Lista de Clientes</a>
        </form>
    </div>
</div>
</div>


<?php
// * Chamando o footer
include_once "includes/footer.php";
?>