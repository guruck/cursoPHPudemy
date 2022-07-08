<div class="titulo">Estruturas Condicionais</div>

<?php
  $condicional = rand(1, 3);

  //Condicional If---------------
  if ($condicional==1){
    echo 'IF  '. $condicional;
  }elseif($condicional === 2){
    echo 'ELSEIF '. $condicional;
  }else{
    echo 'ELSE '.$condicional;
  }

  //Ternario---------------
  echo ($condicional >=2 )? "<BR> Show!" : "<BR>Eta nóis!";

  //Switch------------------
  switch($condicional){
    case 1:
      echo "<BR>Resultado deu 1.";
      break;
    case 2:
      echo "<BR>O resultado é par.";
      break;
    default:
      echo "<BR>E agora?";
  }