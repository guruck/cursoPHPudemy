<div class='titulo'>MAP e FILTER</div>

<?php
  define('CORTE',7);
  $array = [1,2,3,4,5,6,7,8,9];
  $notas = [5.8,7.3,9.8,6.7,4.7,5.4,6.7,3.6];
  echo 'Notas iniciais <BR/>';
  print_r($notas);
  echo '<BR/>Arredondamento com FOR <BR/>';
  foreach($notas as $nota){
    $notasFinais[] = round($nota);
  }
  print_r($notasFinais);
  echo '<BR/>Filtro com FOR <BR/>';
  $aprovados1 = [];
  foreach($notasFinais as $nota){
    if($nota >= CORTE) $aprovados1[] = $nota;
  }
  print_r($aprovados1);
  echo '<BR/>Arredondamento com MAP (+1ponto)<BR/>';
  $notasFinais2 = array_map(function($nota){
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
  },$notas);
  print_r($notasFinais2);
  echo '<BR/>Filtro com MAP <BR/>';
  $aprovados2 = array_filter($notasFinais2,function($nota){
    return $nota >= CORTE;
  });
  print_r($aprovados2);
  