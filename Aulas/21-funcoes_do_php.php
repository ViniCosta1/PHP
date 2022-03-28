<?php
// * SUPERGLOBAIS
/* 
    * $GLOBALS
    * $_SERVER - Retorna alguns nomes de informações predefinidas por índices. Ex.: É usado quando quero conseguir o nome da página, ou o nome do arquivo sendo executado.
    * $_REQUEST
    * $_POST
    * $_GET
    * $_FILES
    * $_ENV
    * $_COOKIE
    * $_SESSION
*/
echo "<h3>Função: \$GLOBALS</h3>";

$x = 10;
$y = 15;

function soma() {
    // * Como as variáveis estão fora da função, temos que chama-las pela função $GLOBALS
    // * Com essa superglobal, conseguimos acessar variárveis de qualquer parte do código
    $soma = $GLOBALS['x'] + $GLOBALS['y'];
    echo $soma;
}

soma();

////////////////////////////////
echo "<hr>";

echo "<h3>Função: \$_SERVER</h3>";
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";