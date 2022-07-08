<div class="titulo">Constantes</div>
<?php
  define('TAXA_DE_JUROS',5.9);
  const QUEBRA = '<BR>';

  echo TAXA_DE_JUROS . QUEBRA;
  // TAXA_DE_JUROS = 2.6; //erro ao reatribuir constante
  $valorVariavel = 2.5;
  define('TAXA_DE_CARTAO',TAXA_DE_JUROS - $valorVariavel);
  echo TAXA_DE_CARTAO . QUEBRA;

  const NOVA_TAXA = TAXA_DE_JUROS ; // - $valorVariavel; // não é possivel realizar operação com o "const" usar com o "define"
  echo NOVA_TAXA . QUEBRA;

  echo PHP_VERSION . " :" . __LINE__ . QUEBRA ;
  echo PHP_INT_MAX . " :" . __LINE__ . QUEBRA ;
  echo __FILE__ . " :" . __LINE__ . QUEBRA;
  echo __DIR__ . " :" . __LINE__ . QUEBRA;