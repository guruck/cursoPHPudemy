<div class='titulo'>Desafio Palindromo</div>

<?php
  function palindromo($parametro){
    if (is_string($parametro)){
      $invert = "";
      for ($pos = strlen($parametro) -1; $pos >=0 ;$pos--){
        $invert .= $parametro[$pos];
      }
      if ($invert === $parametro){
        return "sim => $parametro";
      }else{
        return "nao => $parametro";
      }
    }
  }
  echo palindromo("subinoonibus"); 
  echo "<BR/>"; 
  echo palindromo("onibus"); 

  echo "<BR/>-----------teste2<BR/>"; 
  function palindromo2($parametro){
    if (is_string($parametro)){
        return (strrev($parametro) === $parametro) ? "sim => $parametro": "nao => $parametro";
    }
  }
  echo palindromo2("subinoonibus"); 
  echo "<BR/>"; 
  echo palindromo2("onibus"); 

  echo "<BR/>-----------teste3<BR/>"; 
  function palindromo3($parametro){
    if (is_string($parametro)){
      $ultimoIndice = strlen($parametro) -1;
      for ($i = 0; $i < $ultimoIndice ;$i++){
        if ($parametro[$i] !== $parametro[$ultimoIndice - $i]){
          return "não => $parametro";
        }
      }
      return "sim => $parametro";

    }
  }
  echo palindromo3("subinoonibus"); 
  echo "<BR/>"; 
  echo palindromo3("onibus"); 

  echo '<p class="titulo">Recursividade</p>';
  /**
   * $array = [1,2,[3,4,5],6,[7,[8,9]],10];
   * imprimir
   * >1
   * >2
   * >>3
   * >>4
   * >>5
   * >6
   * >>7
   * >>>8
   * >>>9
   * >10
   */

  $array = [1,2,[3,4,5],6,[7,[8,9]],10];

  function printRecursivo($arr, $nivel='>'){
    foreach($arr as $elem){
      if(is_array($elem)) {
        printRecursivo($elem, $nivel . $nivel[0]);
      }else{
        echo "$nivel $elem <BR/>";
      }
    }
  }

  printRecursivo($array);

  function printRecursivo2($arr, $nivel='>'){
    foreach($arr as $elem){
      if(is_int($elem)) {
        echo "$nivel $elem <BR/>";
      }else{
        printRecursivo($elem, $nivel . $nivel[0]);
      }
    }
  }
  printRecursivo2($array,'#');
