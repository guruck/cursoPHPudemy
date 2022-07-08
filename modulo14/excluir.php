<?php
  require_once("conexao.php");
  use \App\Banco as dbo;

  if (isset($_GET['id'])){

    $sql = "DELETE FROM cadastro WHERE id = ?";
    
    $conexao = dbo\novaConexao();
    //statement -> serve para criar um 'sandbox' e montar a query de forma segura para executar.
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i",$_GET['id']);

    $result = $stmt->execute();
    $conexao->close();

    if($result) {
      //echo "sucesso!<BR/>";
      header('location: ../exercicio.php?dir=modulo14&file=consultar');
    }else{
      //echo "Erro: $conexao->error";
      header('location: ../exercicio.php?dir=modulo14&file=consultar');
    }
    
  }