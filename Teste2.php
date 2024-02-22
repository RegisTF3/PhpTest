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

 printf("<p> Valor em Dollar $valorDollar")