<div class="titulo">Tratando erros</div>

<?php
  echo 'Ola testando PHP, tratamento de erros';
  
  try {
    echo intdiv(7,0);
  } catch (\Throwable $th) {
    echo '<BR/>' ,$th->getMessage(), ' Throwable';
  }

  try {
    echo intdiv(7,0);
  } catch (\DivisionByZeroError $e){
    echo '<BR/>' ,$e->getMessage(), ' DivisionByZeroError';
  } catch (\Error $err){
    echo '<BR/>' ,$err->getMessage(), ' Error';
  }
  try {
    throw new Exception ('Algo de errrado não está certo...');
    echo '<BR/>não deve imprimir isso...';
  } catch (\Exception $e){
    echo '<BR/>' ,$e->getMessage(), ' Exception';
  }finally{
    echo '<BR/>deve sempre imprimir isso...finally';
  }

  try {
    echo '<BR/>',intdiv(7,1);
    echo '<BR/>deve imprimir isso...sem ERRO';
  } catch (\Throwable $th) {
    echo '<BR/>' ,$th->getMessage(), ' Throwable';
  }finally{
    echo '<BR/>deve sempre imprimir isso...finally';
  }

