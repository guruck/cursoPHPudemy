<div class='titulo'>Inteface</div>

<?php
  interface Animal{
    /**
     * Serve para definir o padrão de comportamentos de uma classe, não se importando com a implementação
     * Cada classe que implementar a interface, tem por obrigação de implementar as funcionalidades definidas
     * Todos os metodos da interface SÃO PUBLICOS
     */
     function respirar();
  }

  interface Mamifero {
    function mamar();
  }

  interface Canino extends Animal, Mamifero{ // a interface pode extender varias interfaces
    function latir() : string;
  }

  interface Felino extends Animal, Mamifero{ 
    function miar() : string;
    function pular() : string;
    function correr() : string;
  }
  interface Poodle{
    function peidar();
  }
  class Cachorro implements Canino, Poodle{ // pode implementar multiplas interfaces, mas não pode extender varias classes
    /**
     * Sem a implementação, Fatal error: Class Cachorro contains 1 abstract method and must 
     * therefore be declared abstract or implement the remaining methods (Animal::respirar)
     */
    function respirar(){
      return 'Cachorro respirando...';
    }
    function latir() : string{
      return 'Au! Au!';
    }
    function mamar() : string{
      return 'Mamando...';
    }
    function peidar(){
      return 'Adolfffff...';
    }
  }

  $an01 = new Cachorro();
  echo $an01->respirar(), '<BR/>';
  echo $an01->latir(), '<BR/>';
  echo $an01->mamar(), '<BR/>';
  var_dump($an01);
  echo '<BR/>Instancia de Cachoro: ';
  var_dump($an01 instanceof Cachorro);
  echo '<BR/>Instancia de Canino: ';
  var_dump($an01 instanceof Canino);
  echo '<BR/>Instancia de Mamifero: ';
  var_dump($an01 instanceof Mamifero);
  echo '<BR/>Instancia de Animal: ';
  var_dump($an01 instanceof Animal);
  echo '<BR/>Instancia de Felino: ';
  var_dump($an01 instanceof Felino);
  echo '<BR/>FIM';

  echo '<p class="titulo">Abstrata</p>'; //============================
  echo "/**
  <BR/>* Classe Abstrata pode ter 0% dos metodos implementados como pode ter 100%.
   <BR/>* A classe Abstrata NÃO PODE ser instanciada.
   <BR/>* É possível criar metodos abstratos na classe abstrata.
   <BR/>*/";
   
   abstract class Abstrata1{
     public function funcao1(){
       //corpo
       return 1;
      }
      abstract public function funcao2();
      abstract protected function funcao3();
      // abstract private function funcao4(); //Não pode
    }
    
    abstract class Abstrata2 extends Abstrata1{
      public function funcao3(){ //aumentar a visibilidade para public senão não seria possivel ver na Concreta...
        //corpo
        return 3;
      }
      public function funcao1(){
        //corpo
        return $this->funcao3() - 2 ;
      }
      abstract public function funcao4();
      
    }
    
    class Concreta extends Abstrata2{
      /**
       * Fatal error: Class Concreta contains 2 abstract methods 
       * and must therefore be declared abstract or implement the remaining methods
     */
    public function funcao2(){
      return 2;
    }
    public final function funcao4(){
      return parent::funcao1() + 3;
    }
  }
  $c = new Concreta();
  echo '<BR/>';
  echo $c->funcao1(),'<BR/>';
  echo $c->funcao2(),'<BR/>';
  echo $c->funcao3(),'<BR/>';
  echo $c->funcao4(),'<BR/>';
  echo 'c é Instancia de Concreta: ';
  var_dump($c instanceof Concreta);
  echo '<BR/>c é Instancia de Abstrata2: ';
  var_dump($c instanceof Abstrata2);
  echo '<BR/>c é Instancia de Abstrata1: ';
  var_dump($c instanceof Abstrata1);

  echo '<p class="titulo">Final</p>'; //============================
  ?>
  <p>Esse modificador serve para indicar que uma classe não deve ser herdada 
  <BR/>ou metodo não pode ser alterado ou sobrescrito apos ser herdado.
  </p>
  <?php

  final class Teste extends Concreta{
    public final function alo(){
      echo 'Alo alo';
    }
//    public function funcao4(){ //Fatal error: Cannot override final method Concreta::funcao4() 
//      return parent::funcao1() + 6;
//    }
  }

// class Teste2 extends Teste{ }//Fatal error: Class Teste2 may not inherit from final class

  

  echo '<p class="titulo">Desafio</p>'; //============================
  interface Template{
    function metodo1();
    public function metodo2($param);
  }

  // abstract class ClasseDesafioAbstrata extends Template{ //Fatal error: Class ClasseDesafioAbstrata cannot extend from interface Template
  abstract class ClasseDesafioAbstrata implements Template{ 
    public function metodo3(){
      echo "funcional";
    }
  }

  // class ClasseDesafio implements ClasseDesafioAbstrata{ //Fatal error: ClasseDesafio cannot implement ClasseDesafioAbstrata - it is not an interface
  class ClasseDesafio extends ClasseDesafioAbstrata{ 
  //Fatal error: Class ClasseDesafio contains 2 abstract methods and must therefore be declared abstract or implement the remaining methods
    public function metodo1(){

    }
    public function metodo2($param){

    }
    function __construct($param){

    }
  }

  // $exemplo = ClasseDesafio(); //Fatal error: Uncaught Error: Call to undefined function ClasseDesafio() 
  $exemplo = new ClasseDesafio('requer parametro'); // sem parametro causa erro
  // $exemplo.metodo3(); // em PHP usa-se a seta para chamar o metodo ou parametro
  $exemplo->metodo3();