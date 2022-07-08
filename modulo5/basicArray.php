<div class='titulo'>Basico Array</div>

<?php
$lista = array(1,2,3.4,'texto');
echo $lista.'<BR>'; // não é array
var_dump($lista);
echo '<BR>';
print_r($lista);

echo '<BR>'.$lista[0].'<BR>';
var_dump($lista[4]); // ERRO indice inexistente no array

$texto = 'Esse é um texto de teste';
echo '<BR>'.$texto[0];
echo '<BR>'.$texto[11];