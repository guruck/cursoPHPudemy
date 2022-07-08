<div class="titulo">Alterando Sessão</div>
<?php // session_start(); ?>

<p>
<b>Nome  : </b> <?= $_SESSION['nome'] ?><BR/>
<b>E-mail: </b> <?= $_SESSION['email'] ?><BR/>
</p>

<?php   
  $_SESSION['nome'] = 'Koko Konka';
  $_SESSION['email'] = 'koko@com.ka';
?>
<p>
  <a href="exercicio.php?dir=modulo12&file=sessao_intro">Voltar</a>

  <a href="exercicio.php?dir=modulo12&file=sessao_limpar">Limpar</a>
</p>