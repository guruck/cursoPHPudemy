<div class='titulo'>Opera&ccedil;&otilde;es</div>

<?php
  $dados1 = ['nome'=>'Jose','idade'=>28];
  $dados2 = ['nome'=>'Maria','naturalidade'=>'Fortaleza'];
  $dadosCompletos = $dados1 + $dados2;
  $dadosCompletos2 = $dados2 + $dados1;

  print_r($dadosCompletos);
  echo '<BR>';
  print_r($dadosCompletos2);
  echo '<BR>'.is_array($dadosCompletos); //verifica se é array
  echo '<BR>'.count($dadosCompletos); // conta os elementos do array
  $indice = array_rand($dadosCompletos);
  echo "<BR> $indice = $dadosCompletos[$indice]";
  echo "<BR> {$dadosCompletos['idade']}";
  echo "<BR> ${dadosCompletos['idade']}";
  unset($dadosCompletos['nome']);
  echo '<BR>';
  print_r($dadosCompletos);

  unset($dadosCompletos);
  echo '<BR>';
  function nullMsg(){
    echo 'NULL<BR/>';
  };
  (isset($dadosCompletos)) ? var_dump($dadosCompletos) : nullMsg();

  $pares = [0,2,4,6,8];
  $impares = [1,3,5,7,9];

  $decimais = $pares + $impares;
  print_r($decimais);

  $decimais = array_merge($pares,$impares);
  echo '<BR>';
  print_r($decimais);

  echo '<BR>';
  sort($decimais); //altera o array original
  print_r($decimais);

  echo '<p class="titulo">Comparando Arrays</p>';
  $arr1 = ['nome'=>'Maria','idade'=>20];
  $arr2 = ['nome'=>'Maria','idade'=>'20']; //o tipo é diferente
  $arr3 = ['idade'=>20,'nome'=>'Maria'];   //a ordem dos elementos é diferente
  ?>
  <p>
  $arr1 = ['nome'=>'Maria','idade'=>20];<BR>
  $arr2 = ['nome'=>'Maria','idade'=>20];<BR>
  $arr3 = ['idade'=>20,'nome'=>'Maria'];<BR>
  </p>
  <table class="doctable table">
  <thead>
    <tr>
      <th>Array</th>
      <th>==</th>
      <th>===</th>
      <th>!=</th>
      <th>!==</th>
    </tr>
  </thead>
  <tbody class="tbody">
    <tr>
      <td>$arr1 <=> $arr2 </td>
      <td><?=var_dump($arr1 == $arr2 );?></td>
      <td><?=var_dump($arr1 === $arr2 );?></td>
      <td><?=var_dump($arr1 != $arr2 );?></td>
      <td><?=var_dump($arr1 !== $arr2 );?></td>
    </tr>
    <tr>
      <td>$arr2 <=> $arr3</td>
      <td><?=var_dump($arr2 == $arr3 );?></td>
      <td><?=var_dump($arr2 === $arr3 );?></td>
      <td><?=var_dump($arr2 != $arr3 );?></td>
      <td><?=var_dump($arr2 !== $arr3 );?></td>
    </tr>
  </tbody>
  </table>
