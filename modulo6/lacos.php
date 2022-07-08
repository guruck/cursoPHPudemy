<div class='titulo'>Estruturas de Controle</div>

<?php
  echo '<p class="titulo">Laço For</p>';
  for ($count = 1; $count <= 5; $count++){
    echo "FOR $count - ";
  };
  echo "<BR/>";
  for (; $count <= 10;){
    echo "FOR ".$count++." - ";
    // $count++;
  };
  
  echo "<BR/>";
  $meses = array(
    1=>'janeiro','fevereiro','março','abril',
    'maio','junho','julho','agosto',
    'setembro','outubro','novembro','dezembro',
  );
  for ($m = 1;$m <= count($meses);$m++){
    echo "{$meses[$m]} ;";
  };
  
  echo "<BR/>";
  $tabela = [
    ['a','e','i','o','u'],
    ['b','c','d'],
  ];
  for ($x = 0;$x < count($tabela);$x++){
    for ($y = 0;$y < count($tabela[$x]);$y++){
      echo "{$tabela[$x][$y]} ";
    };
    echo "<BR/>";
  };
  
  
  
  echo '<p class="titulo">Laço Foreach</p>';
  foreach($meses as $index => $valor){
    echo "$index => $valor; ";
  }
  echo "<BR/>";
  
  foreach($tabela as $linha){
    foreach($linha as $coluna){
      echo "$coluna";
    }
  }
  echo "<BR/>";
  
  $numeros = [1,2,3,4,5];
  foreach ($numeros as &$dobro){ //passagem por referencia, altera a variavel array
    $dobro *= 2;
    echo " $dobro";
  }
  echo "<BR/>";
  print_r($numeros);