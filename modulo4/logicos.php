<div class="titulo">Operadores Lógicos</div>
<?php
  var_dump(true);
  echo "<BR>";
  var_dump(!true);
  echo "<HR>";
?>

<table class="doctable table">
  <caption><strong>Tabela Verdade</strong></caption>
  <thead >
  <tr style="color:white!important;">
    <td>A</td>
    <td>B</td>
    <td>A OR B</td>
    <td>A AND B</td>
    <td>A XOR B</td>
  </tr>
  </thead>
  <tbody class="tbody">
  <tr>
    <td>V</td>
    <td>V</td>
    <td><?=var_dump(true or true);?></td> <!-- pode ser usado OR-->
    <td><?=var_dump(true and true);?></td> <!-- pode ser usado AND-->
    <td><?=var_dump(true xor true);?></td> <!-- pode ser usado AND-->
  </tr>
  <tr>
    <td>V</td>
    <td>F</td>
    <td><?=var_dump(true || false);?></td> <!-- pode ser usado || -->
    <td><?=var_dump(true && false);?></td> <!-- pode ser usado && -->
    <td><?=var_dump(true xor false);?></td> <!-- pode ser usado && -->
  </tr>
  <tr>
    <td>F</td>
    <td>V</td>
    <td><?=var_dump(false || true);?></td>
    <td><?=var_dump(false && true);?></td>
    <td><?=var_dump(false xor true);?></td>
  </tr>
  <tr>
    <td>F</td>
    <td>F</td>
    <td><?=var_dump(false || false);?></td>
    <td><?=var_dump(false && false);?></td>
    <td><?=var_dump(false xor false);?></td>
  </tr>
  </tbody>
</table>

<p>Apenas será FALSO no lógico OU, quando as duas condições são FALSAS</p>
<p>Apenas será VERDADE no lógico E, quando as duas condições são VERDADE</p>
<p>Apenas será VERDADE no lógico XOR, quando as duas condições são DIFERENTES, ambas VERDADE ou ambas FALSAS, resulta FALSO</p>