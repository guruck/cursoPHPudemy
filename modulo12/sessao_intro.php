<div class="titulo">Introdução Sessão & Cookie</div>

<?php
  //session_start();
  print_r($_SESSION);

  echo '<BR/>';

  if(!isset($_SESSION['nome'])){
    $_SESSION['nome'] = 'Juninho';
  }

  if(!isset($_SESSION['email'])){
    $_SESSION['email'] = 'juninho@bill.br';
  }
?>
<p>
  <a href="exercicio.php?dir=modulo12&file=altera_sessao">Alterar</a>
</p>
