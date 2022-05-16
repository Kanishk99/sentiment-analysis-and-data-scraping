<?php
function emptyInputSignup($name, $email, $pass){
    if(empty($name)||empty($email)||empty($pass)){
        $result=true;

    }
    else{
        $result=false;
    }
    return $result; 
}
function invalidUid($userid){
    if(preg_match("/^[a-zA-Z0-9]*$/", $userid)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result; 
}
function invalidEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result; 
}
function invalidPass($userid){
    if(preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $userid)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result; 
}
function uidExists($conn, $userid, $email){
    $sql = "SELECT * FROM registration WHERE userid=? OR email=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=emptyinput");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss", $userid, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
         return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createUser($conn, $userid, $email,$pass){
    $sql = "INSERT INTO registration (userid, email, password) VALUES (? ,? ,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"sss", $userid, $email, $hashedPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php");
}
?>