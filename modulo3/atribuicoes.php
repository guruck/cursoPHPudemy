<div class="titulo">Atribui&ccedil;&otilde;es</div>
<?php

$title = "Atribuições";
$numero = 10;
echo '<BR>';
var_dump($numero);
$numero = $numero - 3;
echo '<BR>';
var_dump($numero);
$numero = $numero + 1.45;
echo '<BR>';
var_dump($numero);
$numero--; //decremento pos fixado; 
var_dump($numero);
echo '<BR>' . $numero++; //incremento posFixado
echo '<BR>' . ++$numero; //incremento preFixado
$numero = 20;
echo '<BR>' . $numero+=5; // 
echo '<BR>' . $numero-=5; // 
echo '<BR>' . $numero*=10; // 
echo '<BR>' . $numero/=2; // 
echo '<BR>' . $numero%=6; // 
echo '<BR>' . $numero**=4; // 
echo '<BR>' . $numero.=4; // 
$texto = 'Esse é um texto';
echo '<BR>' . $texto .= " aqui"; // 
echo '<BR>' . $texto;

/** Interpolação
 * Aspas, simples não é interpretado variaveis internas
 * Duplas, serão interpretadas as variaveis internas
 */
echo '<BR>$texto'; // 
echo "<BR>{$texto}"; //ideal
echo "<BR>{ $texto}"; // problema
echo "<BR>{$texto }"; // não da problema
