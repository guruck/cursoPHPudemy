<div class="titulo">Desafio PI</div>

<?php
  echo pi();
  $pi = 3.14;
  echo "<BR>";

  var_dump(pi());
  echo "<BR>";
  var_dump($pi);
  echo "<BR>";

  if ($pi == pi()) {
    echo "PI iguais...<BR>";
  } elseif (($pi - pi()) <= 0.01){ 
    echo "PI aproximados...<BR>";
  }else {
    echo "PI diferentes...<BR>";
  }

  $pidoidao = 3.4;
  if ($pidoidao == pi()) {
    echo "PI iguais...<BR>";
  } elseif (($pidoidao - pi()) <= 0.01){ 
    echo "PI aproximados...<BR>";
  }else {
    echo "PI diferentes...<BR>";
  }
  