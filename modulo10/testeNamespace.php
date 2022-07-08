<?php namespace Nome\Bem\Grande\App;
  echo 'Namespace: '. __NAMESPACE__ . '<BR/>';
  
  const CONSTANTE1 = 123;
  
  function soma($a, $b){
    return $a + $b;
  }
  
  class Classe{
    public $var;
    
    function func(){
      echo 'Namespace: '. __NAMESPACE__ . ' -> ' . __CLASS__ . ' -> ' . __METHOD__ . '<BR/>';
    }
  }

