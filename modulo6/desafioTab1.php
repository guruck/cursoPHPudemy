<div class='titulo'>Desafios Tabela 01</div>

<?php
  $matriz = [
    ['01','02','03','04','05'],
    ['06','07','08','09','10'],
    ['11','12','13','14','15'],
    ['16','17','18','19','20'],
    ['21','22','23','24','25'],
    ['26','27','28','29','30'],
    ['31','32','33','34','35'],
    ['36','37','38','39','40'],
  ];
?>

<table class="doctable table">
  <caption><strong>Criando Tabela</strong></caption>

  <thead>
  <tr>
    <th>Bola1</th>
    <th>Bola2</th>
    <th>Bola3</th>
    <th>Bola4</th>
    <th>Bola5</th>
  </tr>

  </thead>

  <tbody class="tbody">
    <?php
      foreach($matriz as $linha){
        echo "<tr>";
        foreach($linha as $coluna){
          echo "<td>$coluna</td>";
        }
        echo "</tr>";
      }
    ?>
  </tbody>
</table>