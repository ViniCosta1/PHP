<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Login</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand text-white">Sistema de Login</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cadastrar</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid bg-transparent">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 text-center">
                <h1>Login</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <form method="post" action="forms.php">
                    Usuário: <input class="form-control mb-3" type="text" name="login" placeholder="Seu nome de usuário..." required>
                    Senha: <input class="form-control mb-3" type="password" name="senha" placeholder="Sua senha..." required>
                    <input class="btn btn-dark" type="submit" name = "enviar">
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
            </div>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>