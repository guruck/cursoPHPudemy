<div class="titulo">Vari&aacute;veisVari&aacute;veis</div>
<?php

$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a}<BR> $valorA";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!!';
echo "$epa {$$epa} {$$$epa}";
echo '<br>';
// desafio PHP
$a = 'Nossa';
$Nossa = 'Eu';
$Eu = 'consegui';
$consegui = 'responder';
$responder = 'esse';
$esse = 'desafio';

echo "Nossa! Eu consegui responder esse desafio.";
echo '<br>';
echo "{$a}! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.";
