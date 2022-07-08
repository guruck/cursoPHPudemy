<div class='titulo'>Orientação a Objetos</div>

<h3>Classe</h3>
<p>A classe é o modelo de atributos e comportamentos na qual definimos uma determinada estrutura de dados.</p>
<p>class Nome &lt;variações&gt;{ 
  <BR/>&nbsp;&nbsp;&nbsp;//corpo possue os membros:
  <BR/>&nbsp;&nbsp;&nbsp;&lt;acesso&gt; +.atributos[ caracteristicas|dados | variaveis/constantes ]
  <BR/>&nbsp;&nbsp;&nbsp;-.construtor[ responsavel por gerar a estrutura ]
  <BR/>&nbsp;&nbsp;&nbsp;&lt;acesso&gt; -.comportamentos[ verbos|ações ]
  <BR/>&nbsp;&nbsp;&nbsp;-.destrutor[ encerra a estrutura ]
  <BR/>}

<BR/>static => define se um atributo|metodo é de classe ou de instancia
<BR/>&nbsp;&nbsp;&nbsp;-> para acessar membros de instancia
<BR/>&nbsp;&nbsp;&nbsp;:: para acessar membros da classe
</p>
<h3>Objeto</h3>
<p>O objeto é algo que é contruído partindo de um modelo. Sinonimo : Instância</p>
<p><i>Ou seja, a <strong>planta</strong> de arquitetura (classe) é o modelo 
<BR/>qual podemos construir diversas <strong>casas</strong> (objetos) baseados nessa planta</i></p>
<hr/>
<?php
  
  class Cliente {
    //atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    //metodos
    public function apresentar(){
      return "Ola, sou {$this->nome} e possuo {$this->idade} anos de idade"; 
    } 
  }

  $cliente = new Cliente();
  
  $cliente2 = new Cliente();
  $cliente2->nome = "Tomas Edson";
  $cliente2->idade = 67;

  echo $cliente->apresentar(),"<BR/>";
  echo $cliente2->apresentar(),"<BR/>";

  echo '<p class="titulo">Desafio Classe DATA</p>';
  class DesafioData{

    private $dia = 1;
    private $mes = 1;
    private $ano = 1970;

    public function getDia(){
      return $this->dia;
    }

    public function getMes(){
      return $this->mes;
    }

    public function getAno(){
      return $this->ano;
    }

    public function setDia($dia){
      $this->dia = $dia;
    }

    public function setMes($mes){
      $this->mes = $mes;
    }

    public function setAno($ano){
      $this->ano = $ano;
    }

    public function apresentar(){
      $dia = ($this->dia < 10) ? "0".$this->dia : $this->dia;
      $mes = ($this->mes < 10) ? "0".$this->mes : $this->mes;
      return "{$dia}/{$mes}/{$this->ano}"; 
    } 
  }

  $data = new DesafioData();
  echo "Data base: ",$data->apresentar(), '<BR/>';
  $data->setDia(14);
  $data->setMes(8);
  $data->setAno(1984);
  echo "Data mudada: ",$data->apresentar(), '<BR/>';