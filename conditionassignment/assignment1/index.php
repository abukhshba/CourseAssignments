<?php
$age1 = rand(11 , 99);
$age2 = rand(11 , 99);
if($age1 > $age2){
echo "ahmed is older than mohmed";
}elseif($age1 < $age2){
echo "mohamed is older than ahmed";
}else{
   echo "age of ahmed and Mohamad is $age1" ;
}