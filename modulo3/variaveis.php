<div class="titulo">Vari&aacute;veis</div>
<?php

$numeroA = 13;
echo $numeroA, "<BR>";
var_dump($numeroA);
// variaveis são case sensitive: $asd != $Asd != $asD != $aSd
echo "<BR>";
$a = 3; $b = 16;
$soma = $a + $b;
echo $soma . "<BR>";

echo isset($soma);
unset($soma);
echo "<BR>";
echo isset($soma);
var_dump($soma);
echo "<BR>";
$variavel = 10;
var_dump($variavel);
echo "<BR>";
$variavel = "Agora sou uma String";
var_dump($variavel);

//Nomes de Variaveis, não existe uma convensão para PHP dentre os diversos tipos de possiveis definiçoes de variaveis
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // não é legal, evitar!
//$6var = 'invalida';
//$%var7 = 'invalida';
//$var8% = 'invalida';
//$va-r8 = 'invalida';
echo "<BR>";
var_dump($_SERVER); 