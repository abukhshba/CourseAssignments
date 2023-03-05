<?php
$c=1;
while($c<=50){
   $s = 2 ;
   $prime = 0 ;
   if($c===1 or $c===2 ) $prime=1;
   while($s < $c){
      if($c % $s){
         $prime = 1 ;
      }else{
         $prime = 0 ;
         break;
      }
      $s++ ;
   }
   $s = 2 ;
   if($prime){
      echo ($c%2) ? "{$c} is prime and  odd <br>" : 
      "{$c} is prime and even <br> ";
      }else {
         echo ($c%2) ? "{$c} is  not prime and odd <br>" : 
      "{$c} is not prime and even <br>";
   }
   $c++ ;
   
}