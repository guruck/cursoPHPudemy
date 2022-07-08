<link rel="stylesheet" href="recursos/css/bootstrap.min.css">
<div class="titulo">Alterar Registro Form</div>

<?php 
  require_once("conexao.php");
  use \App\Banco as dbo;

  if (isset($_GET['id'])){

    $sql = "SELECT * FROM cadastro WHERE id = ?";
    
    $conexao = dbo\novaConexao();
    //statement -> serve para criar um 'sandbox' e montar a query de forma segura para executar.
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i",$_GET['id']);

    if ($stmt->execute()) {
      $row = $stmt->get_result();
      if($row->num_rows > 0) {
        $dados = $row->fetch_assoc();
      }else{
        echo "Erro: $conexao->error";
        header('location: exercicio.php?dir=modulo14&file=consultar');
      }
    }
    $conexao->close();
   
  }else{
    header('location: exercicio.php?dir=modulo14&file=consultar');
  }

  //print_r($dados);

  $erros = [];
  $successo = [];
  if (count($_POST) > 0){
    
    $dados = $_POST;
    if(trim($dados['nome']) === ''){
      $erros['nome'] = 'Nome é obrigatorio';
    }

    if(isset($dados['nascimento'])){
      $data = DateTime::createFromFormat('d/m/Y',$dados['nascimento']);
      if (!$data) {
        $erros['nascimento'] = 'Data deve estar no formato dd/mm/aaaa';
      }
    }

    // if(!filter_input(INPUT_POST, 'email')){
    //   $erros  'E-mail é obrigatorio';
    // }else{
      if(!filter_var($dados['email'],FILTER_VALIDATE_EMAIL)){
        $erros['email'] = 'E-mail informado não é valido';
      }
    // }
      
    if(!filter_var($dados['site'],FILTER_VALIDATE_URL)){
      $erros['site'] = 'Site informado não é valido';
    }
    
    $filhosConfig = ["options" => ["min_range"=>0, "max_range"=>20]];
    if(!filter_var($dados['filhos'],FILTER_VALIDATE_INT,$filhosConfig) && $dados['filhos'] !=0){
      $erros['filhos'] =  'Quantidade de filhos informada não é valida';
    }

    $salariosConfig = ["options" => ["decimal"=>","]];
    if(!filter_var($dados['salario'],FILTER_VALIDATE_FLOAT,$salariosConfig) ){
      $erros['salario'] =  'salario informado não é valido';
    }

    if (!count($erros)){
      require_once("conexao.php");
      
      $sql = "UPDATE cadastro 
      SET nome = ?, nascimento =?, email=?, site=?, filhos=?, salario=?
      WHERE id=?";

      $conexao = \App\Banco\novaConexao();
      //statement -> serve para criar um 'sandbox' e montar a query de forma segura para executar.
      $stmt = $conexao->prepare($sql);
      
      $params = [
        $dados['nome'],
        $data ? $data->format('Y-m-d') : null,
        $dados['email'],
        $dados['site'],
        $dados['filhos'],
        $dados['salario'] ? str_replace(",",".",$dados['salario']) : null,
        $dados['id'],
      ];
      $stmt->bind_param("ssssidi",...$params);

      // $stmt->bind_param("s",$dados['nome']);
      // $stmt->bind_param("s",$dados['nascimento']);
      // $stmt->bind_param("s",$dados['email']);
      // $stmt->bind_param("s",$dados['site']);
      // $stmt->bind_param("i",$dados['filhos']);
      // $stmt->bind_param("d",$dados['salario']);
      
      $result = $stmt->execute();
      $conexao->close();
  
      if($result) {
        unset($dados);
        $sucesso['insert'] = "Registro alterado com sucesso!";
        header('location: exercicio.php?dir=modulo14&file=consultar');
      }else{
        $erro['insert'] = "Erro: $conexao->error";
      }
    }

  }
?>
<?php if(isset($erro['insert'])): ?>
  <div class="alert alert-danger" role='alert'>
    <?= $erro['insert'] ?>
  </div>
<?php endif ?>
<?php if(isset($sucesso['insert'])): ?>
  <div class="alert alert-success" role='alert'>
    <?= $sucesso['insert'] ?>
  </div>
<?php endif ?>
<form action="#" method="post">
<input type="hidden" name="id" id="id" value="<?= (isset($dados['id'])? $dados['id'] : '') ?>">
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="nome">Nome: </label>
      <input type="text" name="nome" id="nome" class="form-control <?= $erros['nome']? 'is-invalid' : '' ?>" placeholder="Nome" value="<?= (isset($dados['nome'])? $dados['nome'] : '') ?>">
      <div class="invalid-feedback"><?= $erros['nome'] ?></div>
    </div>
    <div class="form-group col-md-4">
      <label for="nascimento">Nascimento: </label>
      <input type="text" name="nascimento" id="nascimento" class="form-control <?= $erros['nascimento']? 'is-invalid' : '' ?>" placeholder="nascimento" value="<?= (isset($dados['nascimento'])? date('d/m/Y',strtotime($dados['nascimento'])) : '') ?>">
      <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">E-mail: </label>
      <input type="text" name="email" id="email" class="form-control <?= $erros['email']? 'is-invalid' : '' ?>" placeholder="E-mail" value="<?= (isset($dados['email'])? $dados['email'] : '') ?>">
      <div class="invalid-feedback"><?= $erros['email'] ?></div>
    </div>
    <div class="form-group col-md-6">
      <label for="site">Site: </label>
      <input type="text" name="site" id="site" class="form-control <?= $erros['site']? 'is-invalid' : '' ?>" placeholder="Site" value="<?= (isset($dados['site'])? $dados['site'] : '') ?>">
      <div class="invalid-feedback"><?= $erros['site'] ?></div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="filhos">Filhos Quantidade: </label>
      <input type="number" name="filhos" id="filhos" class="form-control <?= $erros['filhos']? 'is-invalid' : '' ?>" placeholder="0" value="<?= (isset($dados['filhos'])? $dados['filhos'] : '') ?>">
      <div class="invalid-feedback"><?= $erros['filhos'] ?></div>
    </div>
    <div class="form-group col-md-6">
      <label for="salario">Salário: </label>
      <input type="text" name="salario" id="salario" class="form-control <?= $erros['salario']? 'is-invalid' : '' ?>" placeholder="Salário" value="<?= (isset($dados['salario'])? str_replace(".",",",$dados['salario']) : '') ?>">
      <div class="invalid-feedback"><?= $erros['salario'] ?></div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
  <a href="exercicio.php?dir=modulo14&file=consultar" class="btn btn-success btn-lg">Voltar</a> 
</form>
