<?php
function number($num ){
    if($num%2 ==0){
        return $num . " is even";
    }
    else{
        return $num . " is odd";
    }
}

echo number(8);