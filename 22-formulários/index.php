<html>
<body>

<?php
/*  
    * VALIDAÇÕES
    * Funções "filter_input - Filter_var"
    * FILTER_VALIDATE_INT
    * FILTER_VALIDATE_EMAIL
    * FILTER_VALIDATE_FLOAT
    * FILTER_VALIDATE_IP
    * FILTER_VALIDATE_URL
*/
?>

<?php

if (isset($_POST['enviar-formulario'])):  // * Se Existe
    // echo "Enviou <br>";
    // var_dump($_POST);
    $erros = array();
    $idade = $_POST['idade'];

    if ($idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        echo "é um inteiro";
    endif;
endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    Idade: <input type="text" name="idade" id=""><br>
    Peso: <input type="text" name="peso" id=""><br>
    Email: <input type="text" name="email" id=""><br>
    IP: <input type="text" name="ip" id=""><br>
    URL: <input type="text" name="url" id=""><br>
    <button type="submit" name = "enviar-formulario"> Enviar </button> <br>
</form>

</body>
</html>