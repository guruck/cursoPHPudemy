<div class='titulo'>Break Continue</div>

<?php
  $cont = 0;
  for(;;){
    $cont++;
    if ($cont % 2 === 1) continue ;
    echo " $cont";
    if ($cont > 8) break ;
  }
  echo "<BR/>";
  
  foreach(array(1,2,3,4,5,6) as $valor){
    if ($valor === 5) break;
    if ($valor % 2 === 0) continue;
    echo "$valor <BR/>";
  }
  echo "FIM!";