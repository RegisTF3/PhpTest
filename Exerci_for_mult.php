<?php
function verifica($num1,$num2)
{
    if($num1>$num2)
    {
        $aux = $num1;
        $num1 = $num2;
        $num2 = $aux;
    }
    $soma=0;
    for($i=$num1;$i<$num2;$i++){
        if($i % 7 == 0)
        {
            $soma=$soma+$i
        }
    }
    return $soma;
   echo "A soma dos multiplos é $soma <br>";
}
?>