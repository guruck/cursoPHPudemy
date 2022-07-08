<div class='titulo'>Array Multidimensionais</div>

<?php
  $dados = [
    [
      'nome' => 'Roberto',
      'idade' => 26,
      'naturalidade' => 'São Paulo',
    ],
    [
      'nome' => 'Marta',
      'idade' => 18,
      'naturalidade' => 'Rio de Janeiro',
    ]
  ];

  print_r($dados);
  echo "<BR> Nome: {$dados[0]['nome']}";
  echo "<BR>";
  
  $dados[]=    [
    'nome' => 'Jonas',
    'idade' => 48,
    'naturalidade' => 'Rio Grande do Sul',
  ];
  
  print_r($dados);
  (isset($dados[4])) ? var_dump($dados[4]) : ''; // Notice: Undefined offset: 4 
  
  //phpinfo();
  echo '<p class="titulo">Arrays Constantes</p>';
  const FRUTAS = array('laranja','abacaxi');
  print_r(FRUTAS);
  // FRUTAS[0] = 'banana'; //não é possivel pois é constante
  echo "<BR>";
  const CARROS = ['FIAT'=>'UNO','FORD'=>'abacaxi'];
  print_r(CARROS);
  echo "<BR>";
  define('CIDADES',array('BOA'=>'São Paulo','RUIM'=>'Rio de Janeiro'));
  print_r(CIDADES);
  echo "<BR>";
