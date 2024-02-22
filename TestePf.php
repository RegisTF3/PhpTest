<?php
 define("Dollar",4.96);
 define("Libra",0.16);
 define("Euro",5.34);
 define("Iene",0.033);
 define("PesoArg",0.0059);

 $valorReal = 10.00;

 $valorDollar = $valorReal/Dollar;
 $valorLibra = $valorReal/Libra;
 $valorEuro = $valorReal/Euro;
 $valorIene = $valorReal/Iene;
 $valorPesoArg = $valorReal/PesoArg;

 printf("Valor em Dollar: %.2f  ",$valorDollar );
 echo "<br>";
 printf("Valor em Libra Egipicia: %.2f ",$valorLibra );
 echo "<br>";
 printf("Valor em Euro: %.2f  ",$valorEuro );
 echo "<br>";
 printf("Valor em Iene: %.2f ",$valorIene );
 echo "<br>";
 printf("Valor em Peso Argentino: %.2f \n ",$valorPesoArg);
 echo "<br>";
 ?>