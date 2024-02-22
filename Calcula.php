<?php
        
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $operacao = $_POST['operacao'];

            switch ($operacao) {
                case "Soma":
                    $resultado = $valor1 + $valor2;
                    break;
                case "Sub":
                    $resultado = $valor1 - $valor2;
                    break;
                case "Mult":
                    $resultado = $valor1 * $valor2;
                    break;
                case "Divi":
                    if ($valor2 != 0) {
                        $resultado = $valor1 / $valor2;
                    } else {
                        $resultado = "Erro: divisão por zero.";
                    }
                    break;
                default:
                    $resultado = "Operação inválida";
            }

            echo "<p>O resultado da $operacao entre $valor1 e $valor2 é: $resultado</p>";
        
    ?>