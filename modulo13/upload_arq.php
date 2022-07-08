<div class="titulo">API do PHP - Upload Arquivo</div>

<a href="https://www.php.net/manual/pt_BR/" target="_blank">Manual PHP</a><BR/>
<?php
  
  print_r($_FILES);
  print_r($_POST);
  print_r($_GET);

  $arquivos = $_SESSION['arquivos'] ?? [];


  if (isset($_FILES) && isset($_FILES['userfile'])){
    $uploaddir = 'uploads/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    $tmp = $_FILES['userfile']['tmp_name'];
    echo '<pre>';
    if (move_uploaded_file($tmp, $uploadfile)) {
      echo "Arquivo válido e enviado com sucesso.\n";
      $arquivos[] = $_FILES['userfile']['name'];
      $_SESSION['arquivos'] = $arquivos;
    } else {
        echo "Possível ataque de upload de arquivo!\n";
    }

    echo 'Aqui está mais informações de debug:';
    print_r($_FILES);

    print "</pre>";
  }

?>

<!-- O tipo de encoding de dados, enctype, DEVE ser especificado abaixo -->
<form enctype="multipart/form-data" action="#" method="POST">
    <!-- MAX_FILE_SIZE deve preceder o campo input -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- O Nome do elemento input determina o nome da array $_FILES -->
    Enviar esse arquivo: <input name="userfile" type="file" />
    <input type="submit" value="Enviar arquivo" />
</form>
