<div class="titulo">Desafio - Imagens</div>

<?php
  $arquivos = $_SESSION['arquivos'] ?? [];
  
  $uploaddir = __DIR__ . '/../uploads/';
  
  if (isset($_FILES) && isset($_FILES['userfile'])){
    $arqSessao = basename($_FILES['userfile']['name']);
    $uploadfile = $uploaddir . $arqSessao;
    $tmp = $_FILES['userfile']['tmp_name'];

    echo '<pre>';
    if (move_uploaded_file($tmp, $uploadfile)) {
      echo "Arquivo válido e enviado com sucesso.\n";
      $arquivos[] = $arqSessao;
      $_SESSION['arquivos'] = $arquivos;
    } else {
        echo "Possível ataque de upload de arquivo!\n";
    }

  }

?>

<form enctype="multipart/form-data" action="#" method="POST">
    <input name="userfile" type="file" />
    <input type="submit" value="Enviar arquivo" />
</form>

<ul>
  <?php foreach($arquivos as $arqSessao): ?>
    <?php if(stripos($arqSessao,'.jpg')>0): ?>
      <li>
        <img src="uploads/<?= $arqSessao ?>" alt="<?= $arqSessao ?>" height="220"/>
      </li>
    <?php endif ?>
  <?php endforeach ?>
</ul>