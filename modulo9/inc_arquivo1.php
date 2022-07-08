<?php
  echo '<BR/>Carregando cursoPHPudemy\includes\inc_arquivo1.php';

  $variavel = 'Estou definida ';

  if (!function_exists('soma')){
    function soma($a, $b){
      return $a + $b;
    }
  }
