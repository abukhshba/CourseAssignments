<?php
$numbers = [10,20,30,40,50];
array_push($numbers , 60 , 70 , 80);
for($i = 0 ; $i< count($numbers) ; $i++){
    echo'<h3>' .$numbers[$i] .'<br>'.'</h3>';
}