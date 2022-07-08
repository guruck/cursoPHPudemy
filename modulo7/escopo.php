<div class='titulo'>ESCOPO</div>

<?php
  function imprimirMensagem($parametro = "Ola!"){
    echo "$parametro <BR/>";
  }
  imprimirMensagem("teste!");
  imprimirMensagem("");
  imprimirMensagem();

  $variavel = 1;
  
  function trocaValor(){
    $variavel = 2;
    imprimirMensagem("Durante a funcao o valor é $variavel " );
  }
  
  imprimirMensagem("-----------trocaValor");
  imprimirMensagem("Antes o valor é $variavel");
  trocaValor();
  imprimirMensagem("Depois o valor é $variavel");
  imprimirMensagem("-----------trocaValorDeVerdade");
  
  function trocaValorDeVerdade(){
    global $variavel;
    $variavel += 2;
    imprimirMensagem("Durante a funcao o valor é $variavel");
  }

  imprimirMensagem("Antes o valor é $variavel");
  trocaValorDeVerdade();
  imprimirMensagem("Depois o valor é $variavel");

  var_dump(  trocaValorDeVerdade()  );

  echo '<p class="titulo">Recursividade</p>';//-----------------------------------------

  function somaRecursiva($param){
    if ($param === 1) return 1;
    return $param + somaRecursiva($param -1);
  }

  echo somaRecursiva(5)."<BR/>";

  function fatorialRecursivo($param){
    if ($param === 1) return 1;
    return $param * fatorialRecursivo($param -1);
  }

  echo "5! = ".fatorialRecursivo(5)."<BR/>";