<?php
// * Está incluindo o código do arquivo "header.php" nesse espaço do código
include_once 'header.php';
?>
        <?php echo "Olá Mundo!";?>

<?php
require_once 'footer.php';

/* 
    * Tanto o require quanto o include possuem a mesma função, a diferença é que:
        * O require, se não encontrar o arquivo para puxar os códigos, ele retornará um ERRO FATAL
            * interrompendo o script

        * O include, se não encontrar o arquivo para puxar os códigos, ele retornará um AVISO
            * mas não interrompe o script

    * O include e require com "_once" significam que só vão puxar aqueles códigos 1 vez (Once em inglês é 1 vez)
    * Sendo assim, ele verifica que o arquivo ja foi adicionado, se sim, ele não adiciona novamente, se não, ele adiciona
*/
?>