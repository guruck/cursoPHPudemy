<div class="titulo">API do PHP - Arquivo Escrita</div>

<a href="https://www.php.net/manual/pt_BR/" target="_blank">Manual PHP</a><BR/>
<?php
  date_default_timezone_set("America/Sao_Paulo");
  setlocale(LC_ALL, 'pt_BR.utf-8');

  $arquivo = fopen('teste.txt','w');
  fwrite($arquivo,"Valor inicial \n");
  $str = "Segunda linha \n";
  fwrite($arquivo,$str);
  fclose($arquivo);
  
  $arquivo = fopen('teste.txt','a');
  fwrite($arquivo,"Novo Conteúdo");
  fclose($arquivo);
  
  //ini_set('display_error',1);
  //$arquivo = fopen('teste2.txt','x'); // abre somente se o arquivo nao existe



