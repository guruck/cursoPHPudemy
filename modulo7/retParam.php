<div class='titulo'>Parametros, Retorno, Argumentos</div>

<?php
  // Argumentos Variaveis
  function soma(...$nums){
    $result = 0;
    foreach($nums as $num) $result += intval($num);
    return $result;
  }

  echo soma();
  echo "<BR/>";
  echo soma(1,2,3,4,5);
  echo "<BR/>";
  $array = [6,7,8];
  echo soma(...$array);

  //Argumento PADRÃO
  function getMessageWellcome($tratamento = "Sr(a).", $nome = "Cliente"){
    return "Seja Bem Vindo, {$tratamento} {$nome}!";
  }
  function imprimirMensagem($parametro = "Ola!"){
    echo "{$parametro} <BR/>";
  }
  imprimirMensagem('');
  imprimirMensagem();
  imprimirMensagem(getMessageWellcome());
  imprimirMensagem(getMessageWellcome("Mestre","Supremo"));
  imprimirMensagem(getMessageWellcome("","Tiago"));

  var_dump(getMessageWellcome());
  imprimirMensagem('');
  imprimirMensagem(getMessageWellcome());

  function trocaValor($var1, $var2){
    $var1 = $var2;
    imprimirMensagem("Durante a funcao o valor é $var1 " );
  }
  $variavel = 1;
  imprimirMensagem("-----------trocaValor");
  imprimirMensagem("Antes o valor é $variavel");
  trocaValor($variavel,3);
  imprimirMensagem("Depois o valor é $variavel");

  function trocaValorDeVerdade(&$var1, $var2){
    $var1 = $var2;
    imprimirMensagem("Durante a funcao o valor é $var1 " );
  }
  $variavel = 1;
  imprimirMensagem("-----------trocaValorDeVerdade");
  imprimirMensagem("Antes o valor é $variavel");
  trocaValorDeVerdade($variavel,3);
  imprimirMensagem("Depois o valor é $variavel");


  echo '<p class="titulo">Retorno Função</p>';//-----------------------------------------
  // não funciona pois o valor de $a não faz parte do escopo
  function somarDefeituoso($a){
    return function($b){
      return $a + $b;
    };
  }

  function somarCorreto($a){
    //$a = 32; // pode ser trabalhado outros tempos da função antes de chamar o ultimo processamento
    return function($b) use ($a){ // deve usar para poder passar o valor de $a para funcao interna
      return $a + $b;
    };
  }

  echo somarCorreto(13)(3)."<BR/>";

  $doisMais = somarCorreto(2); // armazena parte primaria da função.
  echo '<BR/>', $doisMais(10); // => somarCorreto(2)(10)
  echo '<BR/>', $doisMais(0);
  echo '<BR/>', $doisMais(50);