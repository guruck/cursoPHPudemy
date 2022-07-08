<div class='titulo'>While Do While</div>

<?php
  const LIMITE = 5;
  $contador = 0;
  
  while ($contador < LIMITE) {
    echo "while $contador <BR/>";
    $contador++;
  };
  echo "<BR>while(true)";
  $contador = 0;
  while (true) {
    echo " $contador ";
    $contador++;
    if ($contador >= LIMITE) break;
  };

  echo "<HR>";
  $contador = 10;
  do{
    echo "doWhile $contador <BR/>";
    $contador++;
  }while ($contador < LIMITE);