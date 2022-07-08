<div class="titulo">Desafio - Operadores Lógicos</div>

<form action="#" method="post">
  <div>
    <label for="txtTrabalho1">Trabalho 1 (Ter&ccedil;a);</label>
    <select name="txtTrabalho1" id="txtTrabalho1">
      <option value="1" <?= ($_POST['txtTrabalho1'] === '1') ? 'selected' : ''; ?> >Executado</option>
      <option value="0" <?= ($_POST['txtTrabalho1'] === '0') ? 'selected' : ''; ?> >Não executado</option>
    </select>
  </div>
  <div>
    <label for="txtTrabalho2">Trabalho 2 (Quinta);</label>
    <select name="txtTrabalho2" id="txtTrabalho2">
      <option value="1" <?= ($_POST['txtTrabalho2'] === '1') ? 'selected' : ''; ?> >Executado</option>
      <option value="0" <?= ($_POST['txtTrabalho2'] === '0') ? 'selected' : ''; ?> >Não executado</option>
    </select>
  </div>
  <button>Executar</button>
</form>
<style>
  button, select{
    font-size: 1.8rem;
  }
</style>
<?php
  $tercaTrabalho = false;
  $quintaTrabalho = false;

  if( isset($_POST['txtTrabalho1']) and isset($_POST['txtTrabalho2'])){
    $tercaTrabalho = !!$_POST['txtTrabalho1'];
    // $tercaTrabalho = (bool) $tercaTrabalho;
    var_dump($tercaTrabalho);

    $quintaTrabalho = $_POST['txtTrabalho2'] === '1';
    var_dump($quintaTrabalho);
  
    if($tercaTrabalho and $quintaTrabalho){
      echo "<BR> TV 50' e Sorvete";
    } elseif($tercaTrabalho xor $quintaTrabalho){
      echo "<BR> TV 32' e Sorvete";
    } else {
      echo "<BR> Fica em casa mais saudável";
    };
  };