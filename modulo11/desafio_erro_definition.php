<?php namespace App\Erros\Personalizados; 

  class DivisionIntegerException extends \Exception{
    public function __construct($message, $code = 0, $previus = null){
      //echo "Erro personalizado: {$message}";
      parent::__construct($message, $code, $previus);
    }
  }
  
  function intdiv(int $dividend, int $divisor):int{
    if ($divisor < 1){
      throw new \DivisionByZeroError("Não deves dividir por 0, mula...");
    //   throw new DivisionIntegerException("Não deves dividir por 0 mula...");
    }
    if ($dividend % $divisor > 0){
      throw new DivisionIntegerException("Resultado fora do esperado...");
    }
    return $dividend / $divisor;
  }