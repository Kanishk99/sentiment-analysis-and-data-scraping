<?php
session_start();
if(isset($_POST["submit-rev"])){
    $prod_name = $_POST["pname"];
    $user_id = $_SESSION["id"];
    $rating = $_POST["rating"];
    if($rating=='positive'){
        $data = "$prod_name is a great product!";
    }
    else{
        $data = "$prod_name is a great product!";
    }
    require_once 'connect.php';
    require_once 'functions.inc.php';
    sendReviewInfo($conn, $prod_name,$user_id,$rating,$data);
}
else{
    header("location: create.php");
    exit(); 
}