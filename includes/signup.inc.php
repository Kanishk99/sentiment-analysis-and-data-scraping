<?php

if(isset($_POST['submit'])){
    $userid = $_POST['userid'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    require_once 'connect.php';
    require_once 'functions.inc.php';
    if(emptyInputSignup($userid,$email,$pass)!==false){
        
        header("location: ../index.php?error=emptyinput");
        exit();
    }
    if(invalidUid($userid)!==false){
        header("location: ../index.php?error=invaliduid");
        exit();

    }
    if(invalidEmail($email)!==false){
        header("location: ../index.php?error=invalidemail");
        exit();

    }
    if(invalidPass($pass)!==false){
        header("location: ../index.php?error=invalidpass");
        exit();
    }
    if(uidExists($conn, $userid,$email)!=false){
        header("location: ../index.php?error=usernametaken");
        exit();
    }
    createUser($conn, $userid, $email, $pass);
}
   
else{
    header("location: ../index.php");
}

