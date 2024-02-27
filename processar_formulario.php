<?php
  include_once 'pessoa.php';

  $nome = $_POST["nome"];
  $idade = $_POST["idade"];


  $pessoa = new Pessoa ($nome,$idade);


  $pessoa->exibirInfo();
  ?>