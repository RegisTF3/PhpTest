<?php
  include_once("Calcular.php");
  $valor1 = $_POST['valor1'];
  $valor2 = $_POST['valor2'];
  $operacao = $_POST['operacao'];

  $calc = new Calcular();
  $calc->setValor1($valor1);
  $calc->setValor2($valor2);

  switch($operacao){
    case '+':
        echo "Soma dos valores: "
        .$cakc->soma();
        break;
    case '-':
        echo"Sub dos valores: "
        .$calc->subtracao();
        break;
    case '*':
        echo "Multi dos valores: "
        .$calc->multi();
        break;
    case '/':
        echo "Div dis Valores: "  
        .$calc->div();
        break;
        default:
        echo "Erro na Matrix!!"
        break        
  }
  ?>