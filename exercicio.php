<?php
  session_start();
  if(isset($_COOKIE['usuario'])) $_SESSION['usuario'] = $_COOKIE['usuario'];
  if(!isset($_SESSION['usuario'])) header('location: login.php');
//   header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    <link rel="stylesheet" href="./recursos/css/estilo.css">
    <link rel="stylesheet" href="./recursos/css/exercicio.css">
</head>
<body class="exercicio">
    <header class="cabecalho">
        <H1>Curso PHP</H1>
        <h2>Visualiza&ccedil;&atilde;o do exerc&iacute;cios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuario: <?= $_SESSION['usuario'] ?></span>
      
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem Formata&ccedil;&atilde;o</a>
        <a href="index.php" class="vermelho">Home</a>

        <a href="logout.php">sair</a>
    </nav>
    <main id="main" class="principal">
        <div class="conteudo">
           <?php
                // echo 'teste';
                // include($_GET['dir']."/".$_GET['file'].".php");
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                // echo(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                // echo '<BR>aqui';
           ?>
        </div>
    </main>
    <footer class="rodape">COD3R & ALUNOS © <?= date('Y'); ?></footer>
</body>
</html>