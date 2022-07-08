<div class='titulo'>Construtores / Desconstrutores</div>

<?php
  class Cliente {
    //atributos
    public $nome ; // variavel de instancia
    public $idade ; // variavel de instancia
    public static $estatico = 'Valor da classe'; // variavel de classe
    //construtor
    public function __construct($novoNome, $idade = 18){
      $this->nome = $novoNome;
      $this->idade = $idade;
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
      return "Ola, sou {$this->nome} e possuo {$this->idade} anos de idade"; 
    }
    public function mostarVariaveis(){
      echo "Não estatica: {$this->nome}";
      // echo ", Estatica: {$this->estatico}"; //Notice: Accessing static property Cliente::$estatico as non static
      // echo ", Estatica: { self::$estatico }"; //Notice: Undefined variable: estatico
      echo ", Estatica: { ". self::$estatico ." }"; 
    }
    public static function acessaStatic(){
      // echo "Não estatica: {$this->nome}"; //Fatal error: Uncaught Error: Using $this when not in object context
      // echo ", Estatica: {$this->estatico}"; //Notice: Accessing static property Cliente::$estatico as non static
      // echo ", Estatica: { self::$estatico }"; //Notice: Undefined variable: estatico
      echo "Funcao Estatica: { ". self::$estatico ." }"; 
    }
  }

  $cliente = new Cliente("Anita Garibald");
  $cliente2 = new Cliente("Tomas Edson",67);
  
  echo $cliente->apresentar(),"<BR/>";
  echo $cliente2->apresentar(),"<BR/>";
  
  echo '<p class="titulo">Estaticos</p>';
  echo $cliente->mostarVariaveis(),"<BR/>";
  echo $cliente->acessaStatic(),"<BR/>"; // não é o melhor modo de acessar a função da classe
  Cliente::$estatico = "mudamos o atributo estatico";
  echo Cliente::acessaStatic(),"<BR/>";
  echo $cliente2->mostarVariaveis(),"<BR/>";
  
  echo '<p class="titulo">Unset</p>';
  unset($cliente);
  unset($cliente2);

  echo '<p class="titulo">Paradigmas</p>';
  echo "/**
  <BR/>* Não estrutural -> GOTO
  <BR/>* Procedural -> função e procedimentos (PHP), ator principal é a função
  <BR/>* Ex.: formatarData(nascimento);
  <BR/>* Funcional -> também baseados em funções, mas com principios diferentes de 
  <BR/>* ____________ estados dos dados (PHP suporta)
  <BR/>* Orientação a Objetos -> classes e objetos (PHP suporta), ator principal é o dado
  <BR/>* Ex.: nascimento->formatarData();
  <BR/>*/";