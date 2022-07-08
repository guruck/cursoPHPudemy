<?php namespace Nome\Bem\Grande\App; ?>
<div class='titulo'>Desafio</div>
<?php
  // ini_set('display_errors',0);

  require_once("usuario.php");
  use \Empresa\App\Usuario as User;
  use \Empresa\Locado\Depto\RH\Pessoa as People;
  
  $p = new People('Atchim',55);
  echo $p->apresentar(), '<BR/>';

  $u = new User('Atchim',55,'atchim','d0L@r1');
  echo $u->apresentar(), '<BR/>';
  unset($u);
  unset($p);