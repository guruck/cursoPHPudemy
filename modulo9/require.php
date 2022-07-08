<div class='titulo'>Includes Vs Require</div>
<h3>Include</h3>
<p>Serve para realizar a inclusao de um arquivo em outro arquivo php, caso ele não encontre é gerado uma advertencia</p>

<h3>Require</h3>
<p>Serve para requerer um arquivo dentro de outro arquivo php, caso ele não exista é gerado uma Excessão</p>
<HR/>
<?php
  echo 'carregando linha inicial ';
  
  include_once("inc_arquivo1.php");
  /**
   * Warning: include_once(inc_arquivo10.php): failed to open stream: No such file or directory
   * Warning: include_once(): Failed opening 'inc_arquivo10.php' for inclusion
   */
  echo '<BR/>carregando linha pos Include ';
  
  require_once("inc_arquivo1.php");
  /**
   * Warning: require_once(inc_arquivo10.php): failed to open stream: No such file or directory
   * Fatal error: require_once(): Failed opening required 'inc_arquivo10.php' 
   */
  echo '<BR/>carregando linha pos Require ';
  echo '<BR/>',$variavel, soma(3,4), '<BR/>';
  
  $valorRetornoRequire = require_once("inc_arquivo2.php");
  $valorRetornoRequire2 = require_once("inc_arquivo2.php");
  $valorRetornoInclude = include_once("inc_arquivo2.php");
  $valorRetornoInclude2 = include_once("inc_arquivo2.php");
  
  echo $valorRetornoRequire;
  echo '<BR/>' .$valorRetornoRequire2;
  echo '<BR/>' .$valorRetornoInclude;
  echo '<BR/>' .$valorRetornoInclude2;
  echo '<BR/>' . __DIR__ ;

  