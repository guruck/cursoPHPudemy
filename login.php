<?php session_start();
if(isset($_POST['email']) & isset($_POST['password'])){
  $email = $_POST['email'];
  $senha = $_POST['password'];

$usuarios = [
  ['nome'=>'Aluno Um','email'=>'aluno1@curso.com','senha'=>'123456'],
  ['nome'=>'Aluno Dois','email'=>'aluno2@curso.com','senha'=>'654321'],
  ['nome'=>'Aluno Tres','email'=>'aluno3@curso.com','senha'=>'098765'],
  ['nome'=>'Aluno Quatro','email'=>'aluno4@curso.com','senha'=>'567890'],
  ['nome'=>'Aluno Cinco','email'=>'aluno5@curso.com','senha'=>'121212'],
];

  foreach($usuarios as $usuario){
    $emailValido = $email === $usuario['email'];
    $senhaValida = $senha === $usuario['senha'];
    if($emailValido && $senhaValida){
      $_SESSION['erros'] = null;
      $_SESSION['usuario'] = $usuario['nome'];
      $exp = time() + 60 * 60 * 24 * 10; //10 dias segundos, minutos, horas, dias
      setcookie('usuario',$usuario['nome'],$exp);
      header('location: index.php');
    }
  }

  if(!isset($_SESSION['usuario'])) {
    $_SESSION['erros'] = ['Usuário/Senha inválida!'];
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    <link rel="stylesheet" href="./recursos/css/estilo.css">
    <link rel="stylesheet" href="./recursos/css/login.css">
</head>
<body class="login">
    <header class="cabecalho">
        <H1>Curso PHP</H1>
        <h2>Seja Bem Vindo!</h2>
    </header>
    <nav class="navegacao">
      
    </nav>
    <main id="main" class="principal">
        <div class="conteudo">
          <h3>Identifique-se</h3>
          <?php if(isset($_SESSION['erros'])): ?>
            <div class="erros">
              <?php foreach($_SESSION['erros'] as $erro): ?>
                <p><?= $erro ?></p>
              <?php endforeach ?>
            </div>
          <?php endif ?>
          <form action="#" method="post">
            <div>
              <label for="email">E-mail</label>
              <input type="text" name="email" id="email" value="aluno4@curso.com"/>
            </div>
            <div>
              <label for="password">Senha</label>
              <input type="password" name="password" id="password" value="567890"/>
            </div>
            <div>
              <button>Entrar</button>
            </div>

          </form>
          
        </div>
    </main>
    <footer class="rodape">COD3R & ALUNOS © <?= date('Y'); ?></footer>
</body>
</html>

