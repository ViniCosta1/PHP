<?php

class Login {
    private $email;
    private $senha;
    private $nome;

    // * Construtor é um método que é iniciado assim que um objeto é instanciado
    public function __construct($email, $senha, $nome) {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    // * Tornando esses atributos privados, temos que usar os métodos get [para pegar o atributo] e set [para setar valor no atributo]
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e) {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        return $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($s) {
        return $this->senha = $s;
    }


    public function Logar() {
        if($this->email == "teste@testeemail.com" and $this->senha == 123456):
            echo "Logado com Sucesso!";
        else:
            echo "Dados Inválidos";
        endif;
    }
}

// * Instanciando a variável $logar para que ela se torne um objeto
// * Conseguimos acessar esses atributos fora da classe pois eles estão publicos

// * Com construtor:
$logar = new Login("teste@testeemail.com", 123456, "Vinicius de Andrade");

// * Sem Construtor
/*
$logar = new Login;
$logar->email = "teste@testeemail.com";
$logar->senha = 123456;

$logar->Logar();

$logar->setEmail("teste@testemail.com");
$logar->setSenha("123456");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();
*/
