<?php namespace Empresa\App;
require_once("pessoa.php");
use Empresa\Locado\Depto\RH as ctxRH;

class Usuario extends ctxRH\Pessoa{
    public $login;
    public $senha;

    public function __construct($nome,$idade,$login, $senha){
      parent::__construct($nome,$idade);
      $this->login = $login;
      $this->senha = $senha;
    }

    public function apresentar(){
      return parent::apresentar() . ", Login:{$this->login}, Senha: {$this->senha}"; 
    } 
  }