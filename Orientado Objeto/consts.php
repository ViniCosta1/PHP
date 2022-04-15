<?php
class Pessoa {
    const nome = "Rodrigo";
    public function exibirNome () {
        echo self::nome;
        // *  O self ele priozira as constantes dentro do escopo da classe
    }
}

class Rodrigo extends Pessoa {
    const nome = "0liveira";
    public function exibirNome() {
        echo parent::nome;
        // *  O parent ele priozira as constantes dentro do escopo da classe pai (classe que herdou)
    }
}

$rodrigo = new Rodrigo();
$rodrigo->exibirNome ();