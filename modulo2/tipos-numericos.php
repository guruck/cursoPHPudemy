<div class="titulo">Tipos Basicos: Numeros</div>
<h2>Inteiros</h2>
<?php
$a = 1234; // número decimal
echo $a."<BR>";
$a = 0123; // número octal (equivalente a 83 em decimal)
echo $a."<BR>";
$a = 0x1A; // número hexadecimal (equivalente a 26 em decimal)
echo $a."<BR>";
$a = 0b11111111; // número binário (equivalente ao 255 decimal)
echo $a."<BR>";
//$a = 1_234_567; // decimal number (as of PHP 7.4.0)
// echo $a."<BR>";
echo " varDump {";
var_dump($a);
echo "}<BR>";
echo "Max: ".PHP_INT_MAX."<BR>";
echo "Min: ".PHP_INT_MIN."<BR>";
echo (int) ( (0.1+0.7) * 10 ); // imprime 7!
?>
<h2>Float</h2>
<?php
$a = 1.234;echo $a."<BR>";
$b = 1.2e3;echo $b."<BR>";
$c = 7E-10;echo $c."<BR>";
//$d = 1_234.567; echo $d."<BR>";// a partir do PHP 7.4.0
echo " varDump {";
var_dump($c);
echo "}<BR/>";
echo "Max: ".PHP_FLOAT_MAX."<BR>";
echo "Min: ".PHP_FLOAT_MIN."<BR>";
// $a e $b serão consideradas iguais até o 5º dígito de precisão.
$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001; //$epsilon = 0.00000001;

if(abs($a-$b) < $epsilon) {
    echo "iguais";
}else{
    echo "diferentes";
}
?>