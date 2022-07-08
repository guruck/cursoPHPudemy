<div class='titulo'>Usando Tipos</div>

<?php
// Tipagems
function soma($a,$b){
  var_dump($a);
  echo "<BR/>";
  var_dump($b);
  $c = $a + $b;
  echo "<BR/>$c<BR/>";
}

soma(1,2);
soma(1.7,2.5);
soma(1,'4dois');

function soma2(int $a,int $b){
  var_dump($a);
  echo "<BR/>";
  var_dump($b);
  $c = $a + $b;
  echo "<BR/>$c<BR/>";
}

soma2(1,2);
soma2(1.7,2.5);
soma2(1,'4dois');

function soma3($a,$b){
  var_dump($a);
  echo "<BR/>";
  var_dump($b);
  return (int)$c = $a + $b;
  
}

echo "<BR/>".soma3(1,2)."<BR/>";
echo "<BR/>".soma3(1.7,2.5)."<BR/>";
echo "<BR/>".soma3(1,'4dois')."<BR/>";