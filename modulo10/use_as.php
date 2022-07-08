<?php namespace Alias; ?>
<div class="titulo">Use / As</div>

<?php
  include_once('testeNamespace.php');
  
  echo 'Namespace: '. __NAMESPACE__ . '<BR/>';
  const CONSTANTE1 = 12345;

  function soma($a, $b){
    return $a . $b;
  }
  
  class Classe{
    public $var;
    
    function func(){
      echo 'Namespace: '. __NAMESPACE__ . ' -> ' . __CLASS__ . ' -> ' . __METHOD__ . '<BR/>';
    }
  }


  echo 'CONSTANTE1: '. CONSTANTE1 . '<BR/>';
  echo '\Nome\Bem\Grande\App\CONSTANTE1: '. \Nome\Bem\Grande\App\CONSTANTE1 . '<BR/>';
  
  use \Nome\Bem\Grande\App as ctxApp;
  use \Nome\Bem\Grande\App\Classe as CtxClasse;
  use const \Nome\Bem\Grande\App\CONSTANTE1 as CONST01;
  use function \Nome\Bem\Grande\App\soma as somaCorreta;
  
  echo 'CONSTANTE1: '. CONSTANTE1 . '<BR/>';
  echo 'CONSTANTE1: '. CONST01 . '<BR/>';
  echo 'CONSTANTE1: '. ctxApp\CONSTANTE1 . '<BR/>';
  echo 'funcao: '. soma(2,3) . '<BR/>';
  echo 'funcao: '. ctxApp\soma(2,3) . '<BR/>';
  echo 'funcao: '. somaCorreta(2,3) . '<BR/>';

    
  $a = new Classe();
  $a->func();

  $b = new \Nome\Bem\Grande\App\Classe();
  $b->func();

  $c = new ctxApp\Classe();
  $c->func();

  $d = new CtxClasse();
  $d->func();

