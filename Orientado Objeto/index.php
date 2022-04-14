<?php

// * Para definir se um atributo de uma classe, devemos colocar ela como pública, com o "public" antes da variável
class Pessoa {
    public $nome;
    public $idade;

    public function Falar() {
        echo $this->nome." de ".$this->idade." Falou <br>";
        // * Como os atributos podem ser de outras pessoas, temos que colocar um $this para identificar que ISSO é DESSA pessoa
    }
}

// * Instanciando classe
// * Sempre que formos instanciar uma classe, devemos colocar o "new" e depois o nome da classe
// * Acessar um atributo não precisa de $
$rodrigo = new Pessoa();
$rodrigo->nome = "Rodrigo Santos de Oliveira";
$rodrigo->idade = 25;
$rodrigo->Falar();
echo $rodrigo->nome;