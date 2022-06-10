<?php
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $pass = $_POST["password"];

    require_once 'connect.php';
    require_once 'functions.inc.php';
    if(emptyInputLogin($email,$pass)!==false){
        header("location: ../index.php?error=emptyinput");
        exit();
    }
    loginUser($conn, $email, $pass);
}
else{
    header("location: ../index.php");
    exit(); 
}