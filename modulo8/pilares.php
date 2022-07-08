<div class='titulo'>Pilares</div>
<h3>Encapsulamento</h3>
<p>não precisar entender a implementação interna de um determinado objeto, 
basta enterder como funciona a interface de comunicação
<BR><strong><i>Modificadores de acesso</i></strong>
<BR> (menos restritivo) public << protected << private (mais restritivo)
<BR> todos acessam << classe e herança << apenas a classe acessa
</p>
<h3>Herança</h3>
<p><strong>Composição</strong>: Tem um(a) - Carro <strong>tem um</strong> motor. Casa <strong>tem uma</strong> cozinha.
<BR/>existe reutilização de código, objetos menos complexos para compor um objeto de maior complexidade.
<BR/><strong>Herança</strong>: É um(a) - Civic <strong>é um</strong> carro. Maçã <strong>é uma</strong> fruta.
<BR/>caracteristicas e ações de um objeto, são utilizadas para construção de um outro objeto similar ou igual.
<BR/>SuperClasse: ANIMAL -> respiram...
<BR/>SubClasse: MAMÍFERO -> mamam... / ANFÍBIO
<BR/>aquatico | terrestre -> respiração aerobica? / sapo
<BR/>
<BR/>Hierarquia sem herança: Soldado - Cabo - Sargento - Tenente - Capitão...
</p>
<h3>Polimorfismo</h3>
<p><strong>Estatico</strong>: sobrecarga de metodos
<BR/>Não existe sobrecarga de métodos em PHP para um mesmo contexto.
<BR/><strong>Dinâmico</strong>: mais associado a linguagens fortemente tipadas
<BR/>Civic c = new Civic(); não podendo atribuir a c -> new Ferrari();
<BR/>Carro c = new Civic(); pode atribuir a c -> new Ferrari(); (com polimorfismo)
<BR/>
<BR/>Em PHP é possível definir o Tipo na função
<BR/>function estacionar (Carro $c){...}; dessa forma podemos ter polimorfismo.
</p>
<h3>Abstração</h3>
<p>Extrair as informações relevantes do mundo real, modelando o software a necessidade do cliente.
<BR/>
<BR/>
</p>
<HR/>
<?php
echo '<p class="titulo">Encapsulamento</p>';
//Encapsulamento
  class A{
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarApublic(){
      echo "Classe a) Publico = {$this->publico}<BR/>";
      echo "Classe a) Protegido = {$this->protegido}<BR/>";
      echo "Classe a) Privado = {$this->privado}<BR/>";
      $this->mostrarAprotected();
      $this->mostrarAprivate();
    }
    protected function mostrarAprotected(){
      echo "mostrarAprotected <BR/>";
    }
    private function mostrarAprivate(){
      echo "mostrarAprivate <BR/>";
    }
  }

  $a = new A();
  $a->mostrarApublic();
  // $a->mostrarAprotected(); //Fatal error: Uncaught Error: Call to protected method A
  // $a->mostrarAprivate(); //Fatal error: Uncaught Error: Call to private method A
  
  class B extends A{
    public function mostrarApublic(){
      echo "Classe b) Publico = {$this->publico}<BR/>";
      echo "Classe b) Protegido = {$this->protegido}<BR/>";
      // echo "Classe b) Privado = {$this->privado}<BR/>"; //Notice: Undefined property: B::$privado
      $this->mostrarAprotected();
      // $this->mostrarAprivate(); //Fatal error: Uncaught Error: Call to private method A
    }
  }

  $b = new B();
  $b->mostrarApublic();
  
//Herança
echo '<p class="titulo">Herança</p>';
  class Pessoa{
    //atributos
    public $nome ;
    public $idade ;
 
    //construtor
    public function __construct($nome, $idade = 18){
      $this->nome = $nome;
      $this->idade = $idade;
      echo 'Pessoa Criada !</BR>';
    }

    //destrutor
    public function __destruct(){
      echo "destruindo {$this->nome}... "; 
      $this->nome = null; // apenas para tomar como exemplo, poderia fechar conexão... etc.
      $this->idade = null;
      echo 'Morreu !</BR>';
    }

    //metodos
    public function apresentar(){
      return "Pessoa => Nome: {$this->nome}, Idade: {$this->idade}"; 
    } 
  }

  class Usuario extends Pessoa{
    public $login;
    public $senha;

    //construtor
    public function __construct($nome,$idade,$login, $senha){
      // $this->nome = $nome;
      // $this->idade = $idade;
      parent::__construct($nome,$idade);
      $this->login = $login;
      $this->senha = $senha;
      echo 'Usuario Criado !</BR>';
    }

    //destrutor
    public function __destruct(){
      echo 'Morreu Usuario!</BR>';
    }
    //metodos
    public function apresentar(){
      return parent::apresentar() . ", Login:{$this->login}, Senha: {$this->senha}"; 
    } 
  }

  $p = new Pessoa('Atchim',55);
  echo $p->apresentar(), '<BR/>';

  $u = new Usuario('Atchim',55,'atchim','d0L@r1');
  echo $u->apresentar(), '<BR/>';
  unset($u);
  unset($p);