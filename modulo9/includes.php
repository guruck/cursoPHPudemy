<div class='titulo'>Includes</div>

<?php
  echo 'carregando linha inicial ';

  include_once("inc_arquivo1.php");
  include("inc_arquivo1.php"); //Fatal error: Cannot redeclare soma(), se não tratar a soma

  echo '<BR/>',$variavel, soma(3,4), '<BR/>';
