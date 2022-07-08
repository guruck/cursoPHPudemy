<link rel="stylesheet" href="recursos/css/bootstrap.min.css">

<div class="titulo">Consultar Registros

</div>
<?php
  require_once("conexao.php");
  use \App\Banco as dbo;

  $sql = "SELECT * FROM cadastro ORDER BY id";

  $conexao = dbo\novaConexao();
  $result = $conexao->query($sql);

  $registros = [];

  if($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()){
      $registros[] = $row;
    }
  }elseif($conexao->error){
    echo "Erro: $conexao->error";
  }
  $conexao->close();
  
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
    <th><a href="exercicio.php?dir=modulo14&file=inserir_2" class="btn btn-primary">NOVO</a> </th>
  </thead>
  <tbody>
  <?php foreach($registros as $registro): ?>
    <tr>
      <!-- <td><? //$registro['id'] ?> </td> -->
      <td><a href="mailto:<?= $registro['email'] ?>"><?= $registro['nome'] ?> </a></td>
      <td><?= date('d/m/Y',strtotime($registro['nascimento'])) ?> </td>
      <!-- <td><? //$registro['site'] ?> </td> -->
      <td><?= $registro['filhos'] ?> </td>
      <td><?= $registro['salario'] ?> </td>
      <td> <a href="modulo14/excluir.php?id=<?= $registro['id'] ?>" class="btn btn-danger">excuir</a> </td>
      <td> <a href="exercicio.php?dir=modulo14&file=alterar&id=<?= $registro['id'] ?>" class="btn btn-info">alterar</a> </td>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>