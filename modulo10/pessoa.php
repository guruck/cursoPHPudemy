<?php namespace Empresa\Locado\Depto\RH;
class Pessoa{

    public $nome ;
    public $idade ;

    public function __construct($nome, $idade = 18){
      $this->nome = $nome;
      $this->idade = $idade;
    }

    public function apresentar(){
      return "Pessoa => Nome: {$this->nome}, Idade: {$this->idade}"; 
    } 
  }