<?php
session_start();
if (!$_SESSION['logado']):
    header("Location: index.php");
endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Página Restrita</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand text-white">Página Restrita</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cadastrar</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="jumbotron bg-transparent">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 text-center">
                <h1>Logado com Sucesso!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus praesentium molestias rerum vel illum odit dicta. Molestiae magni, dignissimos officia cupiditate debitis, saepe iure ex natus, praesentium omnis corrupti id. Lorem ipsum dolor sit amet consectetur adipisicing elit. <br><br>

                Neque explicabo saepe ipsum ducimus, mollitia dolorem consequatur vero voluptas ut tempora repellat, eligendi earum ullam aperiam commodi? <br><br>
                
                Incidunt expedita consequuntur eligendi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptates error perspiciatis rem exercitationem doloremque nulla, quae quisquam placeat tempore facere ullam consequuntur accusamus voluptas libero, soluta recusandae, laudantium quia?
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <a href="logout.php" class="btn btn-dark mt-4">Sair</a>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>