<div class='titulo'>Polimorfismo</div>
<?php

abstract class Comida{
  public $peso;
}
class Arroz extends Comida{

}
class ArrozCarreteiro extends Arroz{

}
class Feijao extends Comida{

}
class Sorvete extends Comida{

}

class Pessoa{
  public $peso;

  function __construct($peso){
    $this->peso = $peso;
  }

  function __get($param){
    echo "<BR> {$param} não encontrado";
  }
  public function comer(Comida $comida){ //pode forçar pessoa so comer Arroz
    $this->peso += $comida->peso;
  }
}

$c1 = new Arroz();
$c1->peso = 0.45;
$c2 = new ArrozCarreteiro();
$c2->peso = 0.45;
$c3 = new Sorvete();
$c3->peso = 0.45;

$p = new Pessoa(83.55);
$p->comer($c1);
$p->comer($c2);
$p->comer($c3); //Fatal error: Uncaught TypeError: Argument 1 passed to Pessoa::comer() must be an instance of Arroz

echo $p->peso;
$p->pesoA;
