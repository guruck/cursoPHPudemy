<div class="titulo">API do PHP - Arquivo Download</div>

<a href="https://www.php.net/manual/pt_BR/" target="_blank">Manual PHP</a><BR/>
<?php
  print_r($_FILES);
  echo '<BR/>';
  print_r($_POST);
  echo '<BR/>';
  print_r($_GET);
  echo '<BR/>';
  print_r($_SESSION);
  echo '<BR/>';

  $arquivos = $_SESSION['arquivos'] ?? [];
  $uploaddir = __DIR__ . '/../uploads/';

?>

<ul>
  <?php foreach($arquivos as $arqSessao): ?>
    <li>
      <a href="uploads/<?= $arqSessao ?>"><?= $arqSessao ?></a>
    </li>
  <?php endforeach ?>
</ul>