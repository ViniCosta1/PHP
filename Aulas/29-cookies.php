<?php
// * Cookies

// * O 'user' do cookie é 'Rodrigo Oliveria' que tem validade de 1 hora (em segundos)
setcookie('user', 'Rodrigo Oliveira', time()+3600);

// * O 'email' do cookie é 'rodrigosantos@gmail.com' que tem validade de 1 hora (em segundos)
setcookie('email', 'rodrigosantos@gmail.com', time()+3600);

// * A 'ultima_pesquisa' do cookie é 'tenis adidas' que tem validade de 1 hora (em segundos)
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

// * Mesmo se você fechar a página, esses cookies ficarão salvos na config da mesma
var_dump($_COOKIE);