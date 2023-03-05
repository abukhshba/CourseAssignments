<?php
$i = 1 ;
$j = 1;
while($i < 20){
   $i++;
   while($j < $i ){
      echo  " #";
      $j++;
   }
echo '<br>';
$j = 1; 
$i++;
}