<?php namespace App\Banco;

  function novaConexao($banco = 'curso_php'){
    $servidor = '127.0.0.1';
    $porta = '3306';
    $user = 'curso';
    $passwd = 'curso1';

    $dsn = "mysql:host=$servidor;dbname=$banco;charset=utf8";
    $opcoes = array(
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
    );
    try {
      $pdo = new \PDO($dsn, $user, $passwd, $opcoes);
      // $pdo->exec("SET CHARACTER SET utf8");
      return $pdo;
    } catch (\PDOException $e) {
      die('Erro: ' . $e->getMessage());
    } 
  }

  
