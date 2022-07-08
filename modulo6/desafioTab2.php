<div class='titulo'>Desafio Tabela 02</div>


<form action="#" method="post">
  <label for="teste01">Linhas</label> 
  <input type="number" name="linha" id="teste01" value=<?=$_POST['linha']??2?> min="-1" max="15"/><BR/>
  <label for="teste02">Colunas</label>
  <input type="number" name="coluna" id="teste02" value=<?=$_POST['coluna']??2?> min="-1" max="15" /><BR/>
  <button>enviar</button>
</form>

<?php
  if(isset($_POST['linha'])&&isset($_POST['coluna'])){
    $col = intval($_POST['coluna']);
    $lin = intval($_POST['linha']);
    if (($col > 0)&& ($lin > 0)){
      echo '<table class="doctable table">';
      echo "<caption><strong>Criando Tabela2</strong></caption><thead>";
      echo "<tr>";
      for($i = 1; $i <= $col;$i++){
        echo "<th>Header{$i}</th>";
      };
      echo '</tr></thead><tbody class="tbody">';
      $num = 1;
      for($i = 1; $i <= $lin;$i++){
        echo "<tr>";
        for($j = 1; $j <= $col;$j++){
          echo "<td>L{$i} C{$j} = ".$num++." celulas</td>";
        }
        echo "</tr>";
      };
      echo "</tbody></table>";
    }else{
      echo "<h2>Informar Valores positivos</h2>";
    }
  }
