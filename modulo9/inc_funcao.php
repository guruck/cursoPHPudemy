<div class='titulo'>Include Funcao</div>

<?php
  echo 'carregando Include Funcao ';
  
  function carregarArquivo(){
    include("inc_arquivo1.php"); 
    echo '<BR/>',$variavel, soma(3,4), '<BR/>';
  }
  carregarArquivo();
  
  echo '<BR/> executando funcao ';
  echo '<BR/>', isset($variavel)?$variavel:'undefined <BR/>'; //variavel não foi definida no escopo
  echo soma(3,8), '<BR/>';