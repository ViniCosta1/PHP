<?php
// * Funções para strings
/*
    * strtoupper - Minúsculas para maiúsculas
    * strtolower - Maiúsculas para minúsculas
    * substr - Retorna uma parte da string a partir do número do caractere colocado
    * str_pad - Compelmenta uma outra string com uma quantidade especificada de caracteres.
    * str_repeat - Retorna uma string quantas vezes você quiser
    * strlen - Retorna o comprimento de uma string
    * str_replace - Substitui palavras de um texto
    * strpos - Retorna a posição de uma palavra em um texto
*/
echo "<h3>Função: strtoupper(*string*)</h3>";
$nome = "Rodrigo Oliveira";
echo "$nome";
echo "<br>";
$novoNome = strtoupper($nome);
echo "$novoNome";

////////////////////////////////////////////////////
echo "<hr>";

echo "<h3>Função: strtolower(*string*)</h3>";
$nome = "RODRIGO OLIVEIRA";
echo "$nome";
echo "<br>";
$novoNome = strtolower($nome);
echo "$novoNome";

////////////////////////////////////////////////////
echo "<hr>";

echo "<h3>Função: substr(*string*, *caractere inicial*)</h3>";
$mensagem = "Olá Mundo!";
echo "$mensagem";
echo "<br>";
echo substr($mensagem, 4, 4);

////////////////////////////////////////////////////
echo "<hr>";

echo "<h3>Função: str_pad(*string*, *quantidade de caracteres a serem adicionados*)</h3>";
$objeto = "mouse";
echo "$objeto";
echo "<br>";

$novoObjeto = str_pad($objeto, 10); // * Adicionando espaços vazios
echo "Adicionando espaços vazios: $novoObjeto";
echo "<br>";

$novoObjeto = str_pad($objeto, 10, "*"); // * Adicionando espaços com um caractere específico
echo "Adicionando espaços com um caractere específico: $novoObjeto";
echo "<br>";

$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_LEFT); // * Adicionando espaços com um caractere específico a esquerda
echo "Adicionando espaços com um caractere específico a esquerda: $novoObjeto";
echo "<br>";

$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_RIGHT); // * Adicionando espaços com um caractere específico a direita
echo "Adicionando espaços com um caractere específico a direita: $novoObjeto";
echo "<br>";

$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_BOTH); // * Adicionando espaços com um caractere específico tanto na direita quando na esquerda
echo "Adicionando espaços com um caractere específico tanto na direita quando na esquerda: $novoObjeto";
echo "<br>";

////////////////////////////////////////////////////
echo "<hr>";

echo "<h3>Função: str_repeat(*string*, *quantidade de vezes a ser repetido*)</h3>";
$string = str_repeat("Sucesso!", 4);
echo $string;

////////////////////////////////////////////////////
echo "<hr>";

echo "<h3>Função: strlen(*string*)</h3>";
$mensagem = "Olá Mundo!";
echo $mensagem;
echo "<br>";
echo strlen($mensagem);

////////////////////////////////////////////////////
echo "<hr>";

echo "<h3>Função: str_replace(*palavra que você quer substituir*, *Palavra que vai substituir a outra*, *string*)</h3>";
$texto = "A seleção da França será campeã da copa do mundo de 2018.";
echo $texto;
echo "<br>";
$novoTexto = str_replace("França", "Brasil", $texto);
echo $novoTexto;

////////////////////////////////////////////////////
echo "<hr>";

echo "<h3>Função: strpos(*string*, *palavra que queremos retornar a posição*)</h3>";
$texto = "A seleção da França será campeã da copa do mundo de 2018.";
echo $texto;
echo "<br>";
echo strpos($texto, "copa");