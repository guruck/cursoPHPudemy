<div class='titulo'>Desafios IMPRESSAO</div>

<?php
// imprimir a torre de # até ##### com contador
  $impressao = '';
  for($i = 1; $i <= 5; $i++){
    $impressao .= '#';
    echo "$impressao <BR/>";
  }
  //ou sem contador
  for ($str = '#';$str !== '######';$str.='#'){
    echo "$str <BR/>";
}

// imprimir valores do array de indice par, com for
$array = ['AAA','BBB','CCC','DDD','EEE','FFF'];
  for ($m = 0;$m < count($array);$m++){
    if($m % 2 === 1) continue;
    echo " {$array[$m]},";
  }
  echo " <BR/>";
// imprimir valores do array de indice par, com foreach
  foreach($array as $index => $valor){
    if($index % 2 === 1) continue;
    echo " $valor,";
  }