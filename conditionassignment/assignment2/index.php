<?php

$s1 = "molestiae distinctio quia ut beatae dicta";
$s2 = "Mollitia culpa magni voluptatum ";
$s1_lenth = strlen($s1);
echo '<br>';
$s2_lenth = strlen($s2);

if(20 < $s1_lenth and $s1_lenth< 40 ){
    echo "string is week";
}elseif(40 < $s1_lenth and $s1_lenth < 80){
    echo "string is good";

}elseif ($s1_lenth > 80){
    echo "string is good";

}else {
    echo "string is too week";
}

echo '<br>';
echo '<br>';

if($s1_lenth > $s2_lenth){
    echo " First string is greater then the second ";

}elseif($s1_lenth < $s2_lenth){
    echo " second string is greater then the first ";
}else{
    echo "both Strings are equal";
}