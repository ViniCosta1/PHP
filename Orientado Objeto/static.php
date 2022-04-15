<?php
class Loginn {
    public static $user;
    public static function verificalogin() {
        echo "O usuário ".self::$user." está logado!";
        // *  Quando é métodos e atributos estáticos, o this não funciona, pois ele precisa de um instanciamento
        // * Com atributos estáticos, usa-se o self
    }

    public function sairSistema() {
        echo "O usuário saiu do sistema";
    }
}

$login = new Loginn();
Loginn::$user = "Admin";

// * Métodos estáticos não precisam de instanciar as classes. Podemos chmar eles "direto"
Loginn::verificaLogin();
$login->sairSistema();