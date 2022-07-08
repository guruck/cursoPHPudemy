<div class="titulo">Conversoes</div>
<?php
  echo is_int(PHP_INT_MAX);
  echo '<br>';
  var_dump(PHP_INT_MAX + 1);  
  echo '<br>';
  var_dump(1 + 1.0);
  var_dump((float) 1);

  echo '<br>';
  var_dump((int) 1.6); //cast para int de valores float, acabam truncando a parte decimal
  var_dump(intval(1.999)); //cast para int de valores float, acabam truncando a parte decimal
  var_dump((int) round(1.999)); //cast para int com o round, pois o round sozinho não muda o tipo da variavel

  echo '<br>';
  var_dump(2 + "3"); // isso não concatenara, vai efetuar o cast da string e por fim somar, operador de concatenacao é o ponto
  var_dump(1 + "cinco 5"); // isso não concatenara e não soma, o resultado é 1, a unica parte numerica
  var_dump(1 + "5 cinco"); // isso soma o primeiro numerico encontrado, não concatenara, o resultado é 6, a unica parte numerica
  var_dump(1 + "5 + 3"); // isso soma o primeiro numerico encontrado, não faz a soma, o resultado é 6, a unica parte numerica

  echo '<br>';
  var_dump(1 + "-3.2e2");
  var_dump((int)"-10.2");
  var_dump((float)"-10.2");
