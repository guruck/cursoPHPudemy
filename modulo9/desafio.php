<div class='titulo'>Desafio</div>
<?php
  // ini_set('display_errors',0);

  require_once("usuario.php");

  $p = new Pessoa('Atchim',55);
  echo $p->apresentar(), '<BR/>';

  $u = new Usuario('Atchim',55,'atchim','d0L@r1');
  echo $u->apresentar(), '<BR/>';
  unset($u);
  unset($p);