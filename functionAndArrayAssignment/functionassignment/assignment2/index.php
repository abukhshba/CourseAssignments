<?php
function s($string , $num){
    if($string>$num){
        return $string . " is bigger than ".$num;
    }elseif($string==$num){
        return $string . " and ".$num . " are equal";
    }else{
        return $num . " is bigger than ".$string;
    }
}

echo s("25" , 55);