<div class="titulo">Erros Handler</div>

<?php
  /**
   * Lançamentos de erros
   */

  ini_set('display_errors',1);
  echo 4/0 , " ini_set('display_errors',1); <HR/>";
  
  error_reporting(E_ERROR);
  echo 4/0 , ' error_reporting(E_ERROR); <HR/>';
  
  error_reporting(E_ALL);
  echo 4/0 , ' error_reporting(E_ALL); <HR/>';
  include("arqfake.php");

  error_reporting(~E_ALL);
  echo 4/0 , ' error_reporting(~E_ALL); <HR/>';

  function filtraMensagem($errno, $errstring){
    $text = 'include';
    // $text = 'by zero';
    return !!stripos(" $errstring",$text);
  }

  echo ' Teste de ERRO filtrando<BR/>';
  set_error_handler('filtraMensagem',E_WARNING);
  error_reporting(E_ALL);
  echo 4/0 , ' error_reporting(E_ALL); <BR/>';
  include("arqfake.php");

  echo ' Teste de ERRO restaurando<BR/>';
  restore_error_handler();
  echo 4/0 , ' error_reporting(E_ALL); <BR/>';
  include("arqfake.php");