<?php

// * Classes abstratas servem como modelos para outras classes. Sendo assim, não tem como instanciar nada
// * em uma classe abstrata
abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s) {
        $this->saldo = $s;
    }

    public function getSaldo() {
        return $this->saldo;
    }
    // * Quando um método se torna abstrato, significa que ele deve estar presente nos objetos instanciados
    // * Dessa forma, na "classe mãe" ele não precisa conter chaves. Apenas o nome do método
    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class Itau extends Banco{
    public function Sacar($s) {
        $this->saldo -= $s;
        echo "<hr> Sacou: ".$s;
    }

    public function Depositar($d) {
        $this->saldo += $d;
        echo "<hr> Depositou: ".$d;
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
$itau->getSaldo();
