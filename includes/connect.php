<?php
    $serverName = 'localhost';
    $dBUsername = 'root';
    $dBPassword = '';
    $dBName = 'frg_simple';


    //DB CONNECTION
    $conn = new mysqli($serverName,$dBUsername,$dBPassword,$dBName);
    if(!$conn){
        die('Connection Failed!'.mysqli_connect_error());
    }

?>