<?php
function check($arr , $item){
    $i = 0;
    while($i<count($arr)){
        if($arr[$i] == $item){
            return $item . " is in the array " ;
        }else{
            $i++;
        }
    }
}
$array = [2 , 4 , 8 , 9 , 7 , 55];
echo check( $array, 8);