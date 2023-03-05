<?php
function check(&$s , $word){
    $string = explode(" " , $s);
    $replaceOccured = false ;
    for($i = 0 ; $i< count($string) ; $i++){
        if($string[$i]== "like" or $string[$i]== "love" ){
            $string[$i] = $word ;
            $replaceOccured = true ;
        }
    }
    $s = join(" " , $string);
    return $replaceOccured;
}
$s = "I like you";
$w = "hate";

if(check($s , $w)){
echo "replace Occured";
}
echo '<br>';
echo $s ;