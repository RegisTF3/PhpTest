<?php
include_once 'cMedico.php';

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$cpf = $_POST["cpf"];
$crm = $_POST["crm"];

$cmedico = new cMedico($nome, $idade, $cpf, $crm);

$cmedico->exibirInfoM();
?>