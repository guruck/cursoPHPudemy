<div class="titulo">Utilizando PDO</div>

<?php

  require_once("conexao_pdo.php");
  use \App\Banco as dbo;

  $conexaoPDO = dbo\novaConexao();
  // print_r(get_class_methods($conexaoPDO)); //exibe os metodos dentro da classe

  $sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario)
  VALUES
  ('Marieta Rodrigues','2005-11-20','marieta@rodrigues.com.br','https://www.marieta.rodrigues.com.br',0,2005.11),
  ('Manuela Beatriz Melissa de Paula','1998-11-01','manuelabeatrizmelissadepaula@cordeiromaquinas.com.br','https://www.cordeiromaquinas.com.br',3,1998.11),
  ('Luiz Cauã Diego Novaes','1958-03-22','luizcauadiegonovaes-94@mega-vale.com','https://www.mega-vale.com',5,1958.03),
  ('Luan Luís Mário Freitas','1996-08-14','lluanluismariofreitas@granvale.com.br','https://www.granvale.com.br',9,1996.08),
  ('Allana Fernanda Sarah Rezende','1986-08-03','allanafernandasarahrezende@bcconsult.com.br','https://www.bcconsult.com.br',7,1986.08),
  ('Thales Paulo Assunção','1958-04-17','thalespauloassuncao@avoeazul.com.br','https://www.avoeazul.com.br',1,1958.04),
  ('Esther Sueli Isis da Costa','1964-03-10','esthersueliisisdacosta-85@esctech.com.br','https://www.esctech.com.br',9,1964.03),
  ('Thiago Samuel Pinto','1949-07-13','thiagosamuelpinto-89@universo3d.com.br','https://www.universo3d.com.br',2,1949.07),
  ('Diogo Thales da Paz','1977-11-17','diogothalesdapaz_@sorocaba.com','https://www.sorocaba.com',9,1977.11),
  ('Mariana Sophia Alícia Nogueira','1990-09-13','mmarianasophiaalicianogueira@publicarbrasil.com.br','https://www.publicarbrasil.com.br',3,1990.09),
  ('Pedro Henrique Caleb Mendes','1955-06-21','pedrohenriquecalebmendes@nhrtaxiaereo.com','https://www.nhrtaxiaereo.com',8,1955.06)";

  if($conexaoPDO->exec($sql)){
    $id = $conexaoPDO->lastInsertId();
    echo "Novo cadastro inserido com sucesso com id: {$id}";
  }else{
    echo $conexaoPDO->errorCode(),"<BR/>";
    print_r( $conexaoPDO->errorInfo() );
    
  }

  $conexaoPDO=null;
  
  