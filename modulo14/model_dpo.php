<?php

  require_once("conexao_pdo.php");
  use \App\Banco as dbo;

  $lote = [
    ['nome'=>'Marieta Rodrigues','nascimento'=>'2005-11-20','email'=>'marieta@rodrigues.com.br','site'=>'https://www.marieta.rodrigues.com.br','filhos'=>0,'salario'=>2005.11],
    ['nome'=>'Manuela Beatriz Melissa de Paula','nascimento'=>'1998-11-01','email'=>'manuelabeatrizmelissadepaula@cordeiromaquinas.com.br','site'=>'https://www.cordeiromaquinas.com.br','filhos'=>3,'salario'=>1998.11],
    ['nome'=>'Luiz Cauã Diego Novaes','nascimento'=>'1958-03-22','email'=>'luizcauadiegonovaes-94@mega-vale.com','site'=>'https://www.mega-vale.com','filhos'=>5,'salario'=>1958.03],
    ['nome'=>'Luan Luís Mário Freitas','nascimento'=>'1996-08-14','email'=>'lluanluismariofreitas@granvale.com.br','site'=>'https://www.granvale.com.br','filhos'=>9,'salario'=>1996.08],
    ['nome'=>'Allana Fernanda Sarah Rezende','nascimento'=>'1986-08-03','email'=>'allanafernandasarahrezende@bcconsult.com.br','site'=>'https://www.bcconsult.com.br','filhos'=>7,'salario'=>1986.08],
    ['nome'=>'Thales Paulo Assunção','nascimento'=>'1958-04-17','email'=>'thalespauloassuncao@avoeazul.com.br','site'=>'https://www.avoeazul.com.br','filhos'=>1,'salario'=>1958.04],
    ['nome'=>'Esther Sueli Isis da Costa','nascimento'=>'1964-03-10','email'=>'esthersueliisisdacosta-85@esctech.com.br','site'=>'https://www.esctech.com.br','filhos'=>9,'salario'=>1964.03],
    ['nome'=>'Thiago Samuel Pinto','nascimento'=>'1949-07-13','email'=>'thiagosamuelpinto-89@universo3d.com.br','site'=>'https://www.universo3d.com.br','filhos'=>2,'salario'=>1949.07],
    ['nome'=>'Diogo Thales da Paz','nascimento'=>'1977-11-17','email'=>'diogothalesdapaz_@sorocaba.com','site'=>'https://www.sorocaba.com','filhos'=>9,'salario'=>1977.11],
    ['nome'=>'Mariana Sophia Alícia Nogueira','nascimento'=>'1990-09-13','email'=>'mmarianasophiaalicianogueira@publicarbrasil.com.br','site'=>'https://www.publicarbrasil.com.br','filhos'=>3,'salario'=>1990.09],
    ['nome'=>'Pedro Henrique Caleb Mendes','nascimento'=>'1955-06-21','email'=>'pedrohenriquecalebmendes@nhrtaxiaereo.com','site'=>'https://www.nhrtaxiaereo.com','filhos'=>8,'salario'=>1955.06],
  ];
  function inserirEmLote($registros){
    $conexaoPDO = dbo\novaConexao();
    // print_r(get_class_methods($conexaoPDO)); //exibe os metodos dentro da classe
    $results = [];
    foreach($registros as $registro){
      // print_r($registro);
      $sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario)
      VALUES('".
        $registro['nome'] . "','" .
        $registro['nascimento'] . "','" . 
        $registro['email'] . "','" .
        $registro['site'] . "'," . 
        $registro['filhos'] . "," .
        $registro['salario'] . ")";
      if($conexaoPDO->exec($sql)){
        $id = $conexaoPDO->lastInsertId();
        $results[] = "Novo cadastro inserido com sucesso com id: {$id}";
      }else{
        $results[] = "ERRO " . $stmt->errorCode() . "-" . $stmt->errorInfo();
      }
    }
    $conexaoPDO=null;
    return $results;
  }
  
  function listar(){
    $conexaoPDO = dbo\novaConexao();
    // print_r(get_class_methods($conexaoPDO));
    $sql = "SELECT * FROM cadastro";
    // $resultado = $conexaoPDO->query($sql)->fetchAll();
    // $resultado = $conexaoPDO->query($sql)->fetchAll(PDO::FETCH_NUM); //resultado apenas indexado numericamente, como 1=>valor
    // $resultado = $conexaoPDO->query($sql)->fetchAll(PDO::FETCH_CLASS); //formato de classe, acessa os resultados como se fossem Objetos
    // $resultado = $conexaoPDO->query($sql)->fetchAll(PDO::FETCH_BOTH); //formato numerico e associativo.
    $resultado = $conexaoPDO->query($sql)->fetchAll(PDO::FETCH_ASSOC); //formato de associação, como chave=>valor
    $conexaoPDO=null;
    return $resultado;
  }

  function listarRange($qtde, $inicio){
    $conexaoPDO = dbo\novaConexao();
    $sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";
    $stmt = $conexaoPDO->prepare($sql);
    $stmt->bindValue('qtde',$qtde,PDO::PARAM_INT);
    $stmt->bindValue('inicio',$inicio,PDO::PARAM_INT);
    if ($stmt->execute()){
      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $conexaoPDO = null;
      return $resultado;
    }else{
      $erro['lista'] = $stmt->errorCode() . "-" . $stmt->errorInfo();
      $conexaoPDO = null;
      return null;
    }
  }

  function listarById($id){
    $conexaoPDO = dbo\novaConexao();
    // $sql = "SELECT * FROM cadastro WHERE id = ?"; //se for com interrogação podemos passar diretamente
    $sql = "SELECT * FROM cadastro WHERE id = :id";
    $stmt = $conexaoPDO->prepare($sql);
    // $stmt->bindValue(':id',$id,PDO::PARAM_INT);
    // $stmt->bindValue(':id',$id);
    $stmt->bindValue('id',$id,PDO::PARAM_INT);
    // if ($stmt->execute([':id'=>$id])){
    // if ($stmt->execute([$id])){ //se for com interrogação podemos passar diretamente
    if ($stmt->execute()){
      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $conexaoPDO = null;
      return $resultado;
    }else{
      $erro['lista'] = $stmt->errorCode() . "-" . $stmt->errorInfo();
      $conexaoPDO = null;
      return null;
    }
  }

  function removerById($id){
    $conexaoPDO = dbo\novaConexao();
    $sql = "DELETE FROM cadastro WHERE id = :id";
    $stmt = $conexaoPDO->prepare($sql);
    $stmt->bindValue('id',$id,PDO::PARAM_INT);
    if ($stmt->execute()){
      $conexaoPDO = null;
      return "Registro removido com sucesso com id: {$id}";
    }else{
      $erro['delete'] = $stmt->errorCode() . "-" . $stmt->errorInfo();
      $conexaoPDO = null;
      return null;
    }
  }

  function inserir($dadosOk){

    $conexaoPDO = dbo\novaConexao();
    // print_r(get_class_methods($conexaoPDO)); //exibe os metodos dentro da classe

    $sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario)
    VALUES (:nome,:nascimento,:email,:site,:filhos,:salario)";
    $stmt = $conexaoPDO->prepare($sql);
    $stmt->bindValue(':nome',$dadosOk['nome']);
    $stmt->bindValue(':nascimento',$dadosOk['nascimento']);
    $stmt->bindValue(':email',$dadosOk['email']);
    $stmt->bindValue(':site',$dadosOk['site']);
    $stmt->bindValue(':filhos',$dadosOk['filhos'],PDO::PARAM_INT);
    // $sal = $dadosOk['salario'] ? floatval($dadosOk['salario']) : null;
    $stmt->bindValue(':salario',$dadosOk['salario']);

    if ($stmt->execute()){
      $id = $conexaoPDO->lastInsertId();
      $conexaoPDO = null;
      return "Novo cadastro inserido com sucesso com id: {$id}";
    }else{
      $erro['insert'] = $stmt->errorCode() . "-" . $stmt->errorInfo();
      $conexaoPDO = null;
      return null;
    }
  }

  function atualizarDados($dadosOk){

    $conexaoPDO = dbo\novaConexao();
    // print_r(get_class_methods($conexaoPDO)); //exibe os metodos dentro da classe
    $sql = "UPDATE cadastro 
    SET nome = :nome, nascimento =:nascimento , email= :email, site= :site, filhos= :filhos, salario= :salario
    WHERE id= :id";

    $stmt = $conexaoPDO->prepare($sql);
    $stmt->bindValue(':nome',$dadosOk['nome']);
    $stmt->bindValue(':nascimento',$dadosOk['nascimento']);
    $stmt->bindValue(':email',$dadosOk['email']);
    $stmt->bindValue(':site',$dadosOk['site']);
    $stmt->bindValue(':filhos',$dadosOk['filhos'],PDO::PARAM_INT);
    // $sal = $dadosOk['salario'] ? floatval($dadosOk['salario']) : null;
    $stmt->bindValue(':salario',$dadosOk['salario']);
    $stmt->bindValue(':id',$dadosOk['id'],PDO::PARAM_INT);

    if ($stmt->execute()){
      $conexaoPDO = null;
      return "Registro atualizado com sucesso com id: {$dadosOk['id']}";
    }else{
      $erro['update'] = $stmt->errorCode() . "-" . $stmt->errorInfo();
      $conexaoPDO = null;
      return null;
    }
  }
  // $teste = inserirEmLote($lote);
  // print_r($teste);
  // $dados = [
  //   "id"=>5,
  //   "nome"=>"Luiz Cauã Diego Novaes",
  //   "nascimento"=>"1958-03-22",
  //   "email"=>"luizcauadiegonovaes-94@mega-vale.com",
  //   "site"=>"https://www.mega-vale.com",
  //   "filhos"=>5,
  //   "salario"=>1958.03,
  // ];

  // $lista = listar();
  // $lista = listarRange(1,0);
  // $lista = listarById(3);
  // $lista = removerById(14);
  // $lista = inserir($dados);
  // $lista = atualizarDados($dados);

  // echo $lista;