<div class="titulo">Banco de Dados</div>
<?php
  echo "/**
  <BR/>* mysql  -> deprecated
  <BR/>* mysqli -> mysql-improved é a versão melhorada, exclusiva do MySQL
  <BR/>* PDO  -> tem um conjunto de funcionalidades padronizadas para trabalhar com outros bancos
  <BR/>*/";

  echo "<BR/>Criar Banco: ";
  require_once("conexao.php");
  use \App\Banco as dbo;

  $conexao = dbo\novaConexao(null);
  $sql = 'CREATE DATABASE IF NOT EXISTS curso_php DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci';

  $result = $conexao->query($sql);
  if($result) {
    echo "sucesso!<BR/>";
  }else{
    echo "Erro: $conexao->error";
  }

  $conexao->close();

  echo "Criar Tabela: ";
  $conexao = dbo\novaConexao();
  //DDL - Data Definition Language
  $sql = "CREATE TABLE IF NOT EXISTS cadastro (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    filhos INT,
    salario FLOAT
    )CHARACTER SET utf8 COLLATE utf8_general_ci;";

  $result = $conexao->query($sql);
  if($result) {
    echo "sucesso!<BR/>";
  }else{
    echo "Erro: $conexao->error";
  }

  $conexao->close();