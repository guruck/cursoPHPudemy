<div class='titulo'>Mapa</div>

<?php
$dados = array(
  "idade"=>25,
  "cor"=>"verde",
  "peso"=> 49.8
);

print_r($dados);
echo '<BR>'.$dados["idade"].'<BR>';
try {
  //code...
  var_dump($dados[0]);//erro acessando indice inexistente
} catch (\Throwable $th) {
  //throw $th;
  echo 'erro ao acessar indice inexistente: NULL <BR/>';
}

$lista= array(
  "a",
  "cinco" => "b",
  "c",
  8 => "d",
  "e",
  6 => "f",
  "g",
  8 => "h"
);

echo '<BR>';
print_r($lista);

$lista['vinte']='j';
echo '<BR>';
print_r($lista);

$lista[false] = 'false';
$lista[true] = 'true';
echo '<BR>';
print_r($lista);