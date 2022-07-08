<link rel="stylesheet" href="recursos/css/bootstrap.min.css">

<div class="titulo">DPO - CRUD

</div>
<?php
  require_once("model_dpo.php");
  $result = listar();

  $registros = [];

  if(count($result) > 0) {
      $registros = $result;
  }

  if (isset($_GET['code'])){
    $lista = removerById($_GET['code']);
    if ($lista !== null) {
        header('location: exercicio.php?dir=modulo14&file=crud_dpo');
    }
  }

  //echo print_r($registros[0] )," <BR/>";
?>

<table class="table table-striped table-hover table-bordered" style="font-size:1.2rem;">
  <thead>
    <!-- <th>id</th> -->
    <th>nome</th>
    <th>nascimento</th>
    <!-- <th>site</th> -->
    <th>filhos</th>
    <th>salario</th>
    <th>ação</th>
    <th><a href="exercicio.php?dir=modulo14&file=create_dpo" class="btn btn-primary">NOVO</a> </th>
  </thead>
  <tbody>
  <?php foreach($registros as $registro): ?>
    <tr>
      <!-- <td><? //$registro['id'] ?> </td> -->
      <td><a href="mailto:<?= $registro['email'] ?>"><?= $registro['nome'] ?> </a></td>
      <td><?= date('d/m/Y',strtotime($registro['nascimento'])) ?> </td>
      <!-- <td><? //$registro['site'] ?> </td> -->
      <td><?= $registro['filhos'] ?> </td>
      <td><?= $registro['salario'] ? str_replace(".",",",$registro['salario']) : "" ?> </td>
      <td> <a href="exercicio.php?dir=modulo14&file=crud_dpo&code=<?= $registro['id'] ?>" class="btn btn-danger">excuir</a> </td>
      <td> <a href="exercicio.php?dir=modulo14&file=update_dpo&id=<?= $registro['id'] ?>" class="btn btn-info">alterar</a> </td>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>