<?php namespace App\Banco;

  function novaConexao($banco = 'curso_php'){
    $servidor = '127.0.0.1';
    $porta = '3306';
    $user = 'curso';
    $passwd = 'curso1';

    $con = new \mysqli("{$servidor}:{$porta}", $user, $passwd, $banco);

    if(isset($con->conect_error)){
      die('Erro: ' . $con->conect_error);
      // echo('Erro: ' . $con->conect_error);
      // exit();
    }
    mysqli_set_charset($con,"utf8");
    return $con;
  }

// Para PDO
// $dsn = "mysql:host=localhost;dbname=world;charset=utf8";
// $opcoes = array(
//     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
// );
// $pdo = new PDO($dsn, $usuario, $senha, $opcoes);