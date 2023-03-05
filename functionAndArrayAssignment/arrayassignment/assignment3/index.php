<?php
$colors = ["red","green","blue","black","white"];
array_push($colors , "yellow" , "orange" , "pink");
for($i = 0 ; $i< count($colors) ; $i++){
    echo'<h3>' .$colors[$i] .'<br>'.'</h3>';
}