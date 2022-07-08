<div class='titulo'>Funções Anonimas / Closure / Callable </div>

<?php
  /**
   * Callable E Closure, pois o PHP coloca dentro de uma classe 
   * quando assim definida a função
   * $soma = function($a,$b){ return $a + $b; }; 
   */ 
  $soma = function($a,$b){ return $a + $b; }; 
  $subtrai = function($a,$b){ return $a - $b; };
  $divide = function($a,$b){ return $a / $b; };
  function divisao($a,$b){ return $a / $b; }; // Callable, mas não é Closure
  $multiplica = function($a,$b){ return $a * $b; };
  $resto = function ($a,$b){ return $a % $b; };

  echo $soma(1,2)."<BR/>";
  
  function executar($a,$b,$op,Callable $funcao){
    $resultado = $funcao($a,$b);
    echo "$a $op $b = $resultado<BR/>";
  }
  function executar2($a,$b,$op,Closure $funcao){ // apenas possivel chamar funções anonimas
    $resultado = $funcao($a,$b);
    echo "$a $op $b = $resultado<BR/>";
  }
  
  executar(2,5,"+",$soma);
  executar(2,5,"-",$subtrai);
  executar(5,2,"/",$divide);
  executar(5,2,"/",'divisao'); // a chamada da função deve vir entre cotas(') para nao tomar erro: this will throw an Error in a future version of PHP
  executar(2,5,"*",$multiplica);
  executar(5,2,"mod",$resto);
  
  echo (is_callable($soma)? "sim":"não")."<BR/>";
  var_dump($soma);
  echo "<BR/>";
  echo (is_callable('divisao')? "sim":"não")."<BR/>"; // this will throw an Error in a future version of PHP