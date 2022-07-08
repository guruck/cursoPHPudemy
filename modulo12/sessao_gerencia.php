<div class="titulo">Gerenciando a Sessão</div>

<?php
  // session_id('0q8t1j8b9tfh3vgpp0or0qkjs8'); // define a sessão
  // session_start();
  echo session_id();

  $contador = &$_SESSION['contador'];
  $contador = $contador ? $contador + 1 : 1;

  echo '<BR/>', $_SESSION['contador'];

  if ($_SESSION['contador'] % 5 === 0){
    session_regenerate_id(); //faz com que a cada 5 na contagem o id da sessão é regerado.
  }

  if ($_SESSION['contador'] % 16 === 0){
    session_destroy(); //faz com que a cada 16 na contagem o id da sessão é destruído.
  }

