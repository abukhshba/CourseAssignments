<?php

include "DB.php";

$db = new DB;
$dataOr = $db->delete("product")->where("id",6)->or("name" , "tea")->excute();
$dataAnd = $db->delete("product")->where("id",6)->and("name" , "tea")->excute();

$datajoin = $db->join("*","`student`", "`course_student`", "`student`.student_id", "`course_student`.student_id")->excute();

echo "<pre>";
print_r($data);

?>