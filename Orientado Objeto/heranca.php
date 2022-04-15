<?php
/* Herança é um recurso que permite que classes compartilhem atributos e métodos, afim de reaproveitar
códigos ou comportamentos generalizados */

/*
public - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado com public serão
acessíveis por todos que quiserem acessá-los

protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos
protegidos como se fossem públicos

private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visível
só e somente só pela classe que a declarou
 */

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function Andar() {
        echo "Andou";
    }

    public function Parar() {
        echo "Parou";
    }
}

// * A classe "Carro" está herdando [extends] os atributos e métodos da classe "Veiculo"
class Carro extends Veiculo{
    public function ligarLimpador () {
        echo "Limpando em 321";
    }
}

// * A classe "Moto" está herdando [extends] os atributos e métodos da classe "Veiculo"
class Moto extends Veiculo{
    public function darGrau () {
        echo "Dando grau em 321";
    }
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->Parar();
echo "<br>";
$moto->darGrau();