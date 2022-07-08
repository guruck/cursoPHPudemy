<div class='titulo'>Trait01 e Trait02</div>

<?php
  trait validation{
    public $a = 'Valor a';
    public function validarString($str){
      return isset($str) && $str !== '';
    }
  }
  
  trait validationMelhor{
    public $b = 'Valor b';
    private $c = 'Valor c';
    
    public function validarString($str){
      return isset($str) && trim($str) && $str !== '';
    }

    public function validarStringMelhor($str){
      return isset($str) && trim($str);
    }
  }

  class Usuario {
    use validation, validationMelhor{
      validationMelhor::validarString insteadOf validation; //resolver conflito01
      validation::validarString as validationSimples; //renomeia o conflito
    }
    public function imprimeC(){
      echo '<BR/>', $this->c;
    }
  }

  $usuario = new Usuario();
  var_dump($usuario->validationSimples(' '));
  echo '<BR/>',var_dump($usuario->validarStringMelhor(' '));
  echo '<BR/>',$usuario->a, '<BR/>',$usuario->b;
  $usuario->imprimeC();

  echo '<p class="titulo">Metodos Magicos</p>';
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
      echo 'Morreu !</BR>';
    }

    //metodos
    public function __toString(){
      return "Pessoa => Nome: {$this->nome}, Idade: {$this->idade}"; 
    }

    public function __get($atrib){
      echo "Lendo atributo não declarado : { $atrib }<br>";
    }
    
    public function __set($atrib, $valor){
      echo "Alterando atributo não declarado : {$atrib}/{$valor}<br>";
    }
    
    public function __call($metodo, $params){
      echo "Tentando executar metodo '${metodo}'";
      echo "<BR/>Com os parametros: ", print_r($params);
    }
  }

  $p = new Pessoa('Atchim',55);
  echo $p->__toString(), '<BR/>';
  var_dump($p->nomeCompleto);
  $p->nomeCompleto = 'Muito Legal  ';

  $p->exec(1, 'teste', true, [1,2,3,4] );
  $p = null;