<?php
require_once 'cPessoa.php';

  class Medico extends Pessoa{
    private $crm;

    public function __construct($nome,$idade,$cpf,$crm){
        parent::__construct($nome,$idade,$cpf);
        $this->crm=$crm;
    }
   
    public function exibirInfoM(){
        echo "Informações do Medico: <br>";
        echo "Nome: ". $this->nome . "<br>";
        echo "Idade: ". $this->idade . "<br>";
        echo "Cpf: ". $this->cpf . "<br>";
        echo "CRM: ". $this->crm . "<br>";
    }
  }
  ?>
