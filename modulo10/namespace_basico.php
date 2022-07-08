<?php namespace Contexto; ?>
<div class="titulo">Namespace Basico</div>
<?php 
  if (!function_exists('soma')){
    function soma($a, $b){
      return $a + $b;
    }
  }
  
  function strpos($str, $text){
    return 1;
  }
  
  const CONSTANTE1 = 123;
  define('Contexto\CONSTANTE2',456);
  define(__NAMESPACE__ . '\CONSTANTE3',789);
  define('OutroContexto\CONSTANTE2',123);
  
  echo 'Namespace: '. __NAMESPACE__ . '<BR/>';
  echo 'CONSTANTE1: '. CONSTANTE1 . '<BR/>';
  echo 'CONSTANTE2: '. CONSTANTE2 . '<BR/>';
  echo 'CONSTANTE3: '. CONSTANTE3 . '<BR/>';
  echo constant(__NAMESPACE__ . '\CONSTANTE3') . '<BR/>';
  echo 'OutroContexto\CONSTANTE2: '. \OutroContexto\CONSTANTE2 . '<BR/>';

  echo \Contexto\soma(2,3) , '<BR/>';
  echo soma(5,3) , '<BR/>';
  
  echo strpos('Texto generico para busca','busca'), ' versao Contexto<BR/>';
  echo \strpos('Texto generico para busca','busca'), ' versao PHP<BR/>';