<?php

session_start();
$errors=[];
if(isset($_POST['submit'])&& $_SERVER['REQUEST_METHOD']=="POST"){
//get data
$username = trim(htmlspecialchars($_POST['username']));
$email = trim(htmlspecialchars($_POST['email']));
$password = trim(htmlspecialchars($_POST['password']));

include "../validation/validation.php";
//validate username
if(empty($username)){
    $errors[]= "type username";
}elseif(!minLen($username , 3)){
    $errors[]= "username must be > 3";
}elseif(!maxLen($username , 20)){
    $errors[]= "username must be < 20";
}

//validate password
if(empty($password)){
    $errors[]= "type password";
}elseif(!minLen($password , 6)){
    $errors[]= "password must be > 6";
}elseif(!maxLen($password , 20)){
    $errors[]= "password must be < 20";
}

//validate email
if(empty($email)){
    $errors[]= "type email";
}elseif(checkEmail($email)){
    $errors[]= "email not valid";
}


if(empty($errors)){
    $id = rand(1 , 10000);
    $users = [
        'id'=>$id,
        'username' =>$username,
        'email' =>$email,
        'password' =>sha1($password)
    ];
    if($_SESSION['users']==null){
        $_SESSION['users']=[$users];
    }else{
        array_push($_SESSION['users'],$users);
    }
    $userdata = file_get_contents("../user.json");
    $userdatade = json_decode($userdata,true);
    $userdatade[]=$users;
    file_put_contents("../user.json" ,json_encode($userdatade , true) );
    $_SESSION['id']= $id ;
    
    //setting cookies
    setcookie('username' , $username ,time()+ (60*60*24) );
    setcookie('Email' , $email ,time()+ (60*60*24) );
    setcookie('password' , sha1($password) ,time()+ (60*60*24) );

    
    $_SESSION['success']=['successfuly'];
    header("Location:../register.php");
}else{
    $_SESSION['errors']=$errors;
    header("location:../register.php" );
}

}