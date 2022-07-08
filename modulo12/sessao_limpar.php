<div class="titulo">Limpando Sessão</div>

<?php
  //session_start();
  session_destroy();
  header('location: exercicio.php?dir=modulo12&file=sessao_intro');
?>
