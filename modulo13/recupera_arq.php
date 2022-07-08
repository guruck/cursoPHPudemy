<div class="titulo">API do PHP - Arquivo Leitura</div>

<a href="https://www.php.net/manual/pt_BR/" target="_blank">Manual PHP</a><BR/>
<?php
  date_default_timezone_set("America/Sao_Paulo");
  setlocale(LC_ALL, 'pt_BR.utf-8');

  $pathArquivo = 'teste.txt';
  $arquivo = fopen($pathArquivo,'r');
  echo fread($arquivo, 10),'<BR/>';
  echo fread($arquivo, 10),'<BR/>';
  fclose($arquivo);

  $arquivo = fopen($pathArquivo,'r');
  $tamanho = filesize($pathArquivo);
  echo fread($arquivo, $tamanho ),'<BR/>';
  fclose($arquivo);
  
  $arquivo = fopen($pathArquivo,'r');
  echo fgets($arquivo),'<BR/>';
  echo fgets($arquivo),'<BR/>';
  while (!feof($arquivo)) {
    echo fgetc($arquivo),'<BR/>';
  }
  var_dump(fgets($arquivo));
  fclose($arquivo);
  echo '<HR/>';
  
  $arquivo = fopen($pathArquivo,'r');
  while (!feof($arquivo)) {
    echo fgets($arquivo),'<BR/>';
  }
  fclose($arquivo);
  echo '<HR/>';
  
  $arquivo = fopen($pathArquivo,'r+');
  echo fgets($arquivo),'<BR/>';
  echo fgets($arquivo),'<BR/>';
  fwrite($arquivo,"\nDurante a leitura\n");
  fclose($arquivo);
  



