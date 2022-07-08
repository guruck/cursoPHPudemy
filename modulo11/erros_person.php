<div class="titulo">Erros Personalizados</div>

<?php
/**
 * Exception < Throwable < Error
 */
  class AgeRangeException extends Exception{
    public function __construct($message, $code = 0, $previus = null){
      //echo "Erro personalizado: {$message}";
      parent::__construct($message, $code, $previus);
    }
  }

  function calcularTempoAposentadoria($idade, $min = 18, $max = 70){
    if ($idade < $min){
      throw new AgeRangeException("Ainda é cedo para se aposentar...<BR/>");
    }
    if ($idade > $max){
      throw new AgeRangeException("Ja deveria ter se aposentado...<BR/>");
    }
    return $max - $idade;
  }

  $idades = [15,36,86,68,71,45];
  foreach ($idades as $value) {
    try {
      $tempoRestante = calcularTempoAposentadoria($value);
      echo "Idade: {$value}, {$tempoRestante} anos restantes<BR/>";
    } catch (\AgeRangeException $th) {
      echo "Idade: {$value}: {$th->getMessage()}";
    }
  }