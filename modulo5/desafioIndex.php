<div class='titulo'>Desafio Index</div>

<?php
$lista= array(
  1,
  4 => 2,
  3 => 3,
  'a' => 4,
  5,
  '9' => 6,
  '06' => 7,
  0 => 8
);

print_r($lista);
echo '<BR>';
echo '<p class="titulo">Desafio Meses</p>';

$meses = array(
  1=>'janeiro',
  'fevereiro',
  'março',
  'abril',
  'maio',
  'junho',
  'julho',
  'agosto',
  'setembro',
  'outubro',
  'novembro',
  'dezembro',
);
print_r($meses);
echo '<BR>'.$meses[5];
echo '<BR>';
echo '<p class="titulo">Desafio Sorteio</p>';
$nome = ['Elza','Rapunzel','Branca de Neve','Cinderela'];
$indice = array_rand($nome);
echo "$indice => $nome[$indice]";
