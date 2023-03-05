<?php
session_start();
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $userdata = file_get_contents("user.json");
    $userdatade = json_decode($userdata,true);
    for($i = 0 ; $i < count($userdatade) ; $i++){
            if($userdatade[$i]['id']==$id){
                $_SESSION['user'] = $userdatade[$i];
                break;
            }
        }
    echo '<pre>';
    print_r($_SESSION['user']);
}