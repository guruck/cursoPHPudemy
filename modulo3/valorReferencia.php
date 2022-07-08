<div class="titulo">Valor Vs Referencia</div>
<?php
//Passagem por valor (cópia), por padrão no PHP a atribuição é feita por cópia
$a = 3; // aponta para uma area de memoria
$b = $a; // aponta para outra area de memoria

$a++;
echo "Valor: de a {$a} e de b {$b} <BR>";

//Passagem por referencia, geralmente mais usado para Orientação a Objeto (??sei ñ)
$c = 3; // aponta para uma area de memoria
$d = &$c; // aponta para mesma area de memoria

$d+=10;
echo "Referencia: de c {$c} e de d {$d} <BR>";
