<?php

$numbers = [10,20,30,40,50];
for($i = 0 ; $i< count($numbers) ; $i++){
    $numbers[$i] =  $numbers[$i]+5 ;
    echo $numbers[$i] . "<br>";
}