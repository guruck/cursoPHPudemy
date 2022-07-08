<?php namespace App\Desafio; ?>
<div class="titulo">Desafio</div>

<?php
  require_once("desafio_erro_definition.php");
  use \App\Erros\Personalizados as ERR;
//   use function ERR\intdiv; // não é possivel usar o Alias aqui...
  use function \App\Erros\Personalizados\intdiv;

  $params = [2,3,0];
  foreach ($params as $value) {
    try {
      $divisao = intdiv(8,$value);
    //   $divisao = ERR\intdiv(8,$value); // pode ser utilizado com alias
      echo "intdiv com os parametros 8 e {$value} [Sucesso: {$divisao}]<BR/>";
    } catch (\DivisionByZeroError $th) {
      echo "intdiv com os parametros 8 e {$value} [Exceção] | ";
      echo "Motivo: {$th->getMessage()}<BR/>";
    } catch (ERR\DivisionIntegerException $th) {
      echo "intdiv com os parametros 8 e {$value} [Exceção] | ";
      echo "Motivo: {$th->getMessage()}<BR/>";
    }
  }
  try {
    $divisao = \intdiv(8,3);
    echo 'intdiv "original" com os parametros 8 e 3 [Sucesso: ' . $divisao . ']<BR/>';
  } catch (\Exception $th) {
    echo 'intdiv "original" com os parametros 8 e 3 [Exceção]<BR/>';
    echo "Motivo:{$th->getMessage()}<BR/>";
  }

