<?php
  function isPrimo($nun){
    if($num <= 1)return false;
     for($i = 2; $i <=sqrt($num); $i++){
        id($num % $i == 0) return false;
     }
     return true;
  }
  for($i = 1;$i <= 100; $i++){
    if(isPrimo($i)){
        echo $1 . ""; 
    }
  }
  ?>