<html>
<body>

<?php
/*  
    * VALIDAÇÕES
    * Funções "filter_input - Filter_var"
    * FILTER_VALIDATE_INT (validar se é um Inteiro ou não)
    * FILTER_VALIDATE_EMAIL (validar se é um Email ou não)
    * FILTER_VALIDATE_FLOAT (validar se é um Float ou não)
    * FILTER_VALIDATE_IP (validar se é um IP ou não)
    * FILTER_VALIDATE_URL (validar se é uma URL ou não)
*/

/*  
    * SANITIZAÇÃO (filtros para limpar as variáveis)
    * Funções "filter_input - Filter_var"
    * FILTER_SANITIZE_SPECIAL_CHARS
    * FILTER_SANITIZE_NUMBER_INT
    * FILTER_SANITIZE_EMAIL
    * FILTER_SANITIZE_URL
*/

?>


<?php
// * Verificador de formulários
if (isset($_POST['enviar-formulario'])):  // * Se Existe
    // echo "Enviou <br>";
    // var_dump($_POST);

    // Array de erros
    $erros = array();

    // * SANITIZE e VALIDAÇÕES (filter_var)
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if (!filter_var($idade, FILTER_VALIDATE_INT)):
        $erros[] = "Idade precisa sem inteiro!";
    endif;

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $erros[] = "Email inválido";
    endif;

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if (!filter_var($url, FILTER_VALIDATE_URL)):
        $erros[] = "URL inválida";
    endif;

    /* VALIDAÇÕES (filter_input)
    // * Validação de idade ser um inteiro
    if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)): // Se idade NÃO(exclamação) for um inteiro
        // filter_input(tipo do método, 'nome do input', quer verificar se é inteiro, string, boolean, etc)
        $erros[] = "Idade precisa ser um inteiro";
    endif;

    // * Validação de idade ser um email
    if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)): // Se idade NÃO(exclamação) for um email
        $erros[] = "Email inválido";
    endif;

    // * Validação de idade ser um float
    if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)): // Se idade NÃO(exclamação) for um float
        $erros[] = "Peso precisa ser um float";
    endif;

    // * Validação de idade ser um IP
    if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)): // Se idade NÃO(exclamação) for um IP
        $erros[] = "IP inválido";
    endif;

    // * Validação de idade ser uma URL
    if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)): // Se idade NÃO(exclamação) for uma URL
        $erros[] = "URL inválida";
    endif;
   
*/

    // * Verificador de erros
    // * Exibindo mensagens
    if (!empty($erros)): // Se $erros NÃO(exclamação) está vazio
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
        echo "Parabéns, seus dados estão corretos";
    endif;

endif;

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    Nome: <input type="text" name="nome" id=""><br>
    Idade: <input type="text" name="idade" id=""><br>
<!--Peso: <input type="text" name="peso" id=""><br>-->
    Email: <input type="text" name="email" id=""><br>
<!--IP: <input type="text" name="ip" id=""><br> -->
    URL: <input type="text" name="url" id=""><br>
    <button type="submit" name = "enviar-formulario"> Enviar </button> <br>
</form>

</body>
</html>