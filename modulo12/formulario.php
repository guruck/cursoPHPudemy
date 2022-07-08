<link rel="stylesheet" href="recursos/css/bootstrap.min.css">
<div class="titulo">Formulario</div>

<h2>Cadastro</h2>

<?php 
// print_r($_POST);
$erros = [];
  if (count($_POST) > 0){

    
    //isset($_POST['nome']
    if(!filter_input(INPUT_POST, 'nome')){
      $erros['nome'] = 'Nome é obrigatorio';
    }

    if(filter_input(INPUT_POST, 'nascimento')){
      $data = DateTime::createFromFormat('d/m/Y',$_POST['nascimento']);
      if (!$data) {
        $erros['nascimento'] = 'Data deve estar no formato dd/mm/aaaa';
      }
    }

    // if(!filter_input(INPUT_POST, 'email')){
    //   $erros  'E-mail é obrigatorio';
    // }else{
      if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $erros['email'] = 'E-mail informado não é valido';
      }
    // }
      
    if(!filter_var($_POST['site'],FILTER_VALIDATE_URL)){
      $erros['site'] = 'Site informado não é valido';
    }
    
    $filhosConfig = ["options" => ["min_range"=>0, "max_range"=>20]];
    if(!filter_var($_POST['filhos'],FILTER_VALIDATE_INT,$filhosConfig) && $_POST['filhos'] !=0){
      $erros['filhos'] =  'Quantidade de filhos informada não é valida';
    }

    $salariosConfig = ["options" => ["decimal"=>","]];
    if(!filter_var($_POST['salario'],FILTER_VALIDATE_FLOAT,$salariosConfig) ){
      $erros['salario'] =  'salario informado não é valido';
    }
  }
?>
<?php foreach($erros as $erro): ?>
  <!-- <div class="alert alert-danger" role='alert'> -->
    <?= ''//$erro ?>
  <!-- </div> -->
<?php endforeach ?>
<form action="#" method="post">
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="nome">Nome: </label>
      <input type="text" name="nome" id="nome" class="form-control <?= $erros['nome']? 'is-invalid' : '' ?>" placeholder="Nome" value="<?= (isset($_POST['nome'])? $_POST['nome'] : '') ?>">
      <div class="invalid-feedback"><?= $erros['nome'] ?></div>
    </div>
    <div class="form-group col-md-4">
      <label for="nascimento">Nascimento: </label>
      <input type="text" name="nascimento" id="nascimento" class="form-control <?= $erros['nascimento']? 'is-invalid' : '' ?>" placeholder="nascimento" value="<?= (isset($_POST['nascimento'])? $_POST['nascimento'] : '') ?>">
      <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">E-mail: </label>
      <input type="text" name="email" id="email" class="form-control <?= $erros['email']? 'is-invalid' : '' ?>" placeholder="E-mail" value="<?= (isset($_POST['email'])? $_POST['email'] : '') ?>">
      <div class="invalid-feedback"><?= $erros['email'] ?></div>
    </div>
    <div class="form-group col-md-6">
      <label for="site">Site: </label>
      <input type="text" name="site" id="site" class="form-control <?= $erros['site']? 'is-invalid' : '' ?>" placeholder="Site" value="<?= (isset($_POST['site'])? $_POST['site'] : '') ?>">
      <div class="invalid-feedback"><?= $erros['site'] ?></div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="filhos">Filhos Quantidade: </label>
      <input type="number" name="filhos" id="filhos" class="form-control <?= $erros['filhos']? 'is-invalid' : '' ?>" placeholder="0" value="<?= (isset($_POST['filhos'])? $_POST['filhos'] : '') ?>">
      <div class="invalid-feedback"><?= $erros['filhos'] ?></div>
    </div>
    <div class="form-group col-md-6">
      <label for="salario">Salário: </label>
      <input type="text" name="salario" id="salario" class="form-control <?= $erros['salario']? 'is-invalid' : '' ?>" placeholder="Salário" value="<?= (isset($_POST['salario'])? $_POST['salario'] : '') ?>">
      <div class="invalid-feedback"><?= $erros['salario'] ?></div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
</form>


