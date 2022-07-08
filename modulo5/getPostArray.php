<div class='titulo'>GET ARRAY $_GET</div>

<?php
  var_dump($_GET);
  echo "<BR> Diret&oacute;rio: {$_GET['dir']}; Arquivo: {$_GET['file']}.php";

  echo '<p class="titulo">POST ARRAY $_POST</p>';
  if(isset($_POST['nome'])){
    print_r($_POST);
  }
  ?>
<form action="#" method="post">
  <label for="teste01">Nome Sobrenome</label>
  <input type="text" name="nome" id="teste01" placeholder="nome"/>
  <input type="text" name="sobrenome" id="teste02" placeholder="sobrenome"/>
  <select name="estado" id="UF">
    <option value="AC">Acre</option>
    <option value="SP">São Paulo</option>
  </select>
  <button>enviar</button>
</form>


