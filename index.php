<?php
  session_start();
  if(isset($_COOKIE['usuario'])) $_SESSION['usuario'] = $_COOKIE['usuario'];
  if(!isset($_SESSION['usuario'])) header('location: login.php');
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
</head>
<body>
    <header class="cabecalho">
        <H1>Curso PHP</H1>
        <h2>&Iacute;ndice dos exerc&iacute;cios</h2>
    </header>
    <nav class="navegacao">
      <span class="usuario">Usuario: <?= $_SESSION['usuario'] ?></span>
      <a href="logout.php">sair</a>
    </nav>
    <main id="main" class="principal">
        <div class="conteudo">
          <nav class="modulos">
            <?php require_once("menu.php"); ?>
          </nav>
        </div>
    </main>
    <footer class="rodape">COD3R & ALUNOS © <?= date('Y'); ?></footer>
</body>
</html>