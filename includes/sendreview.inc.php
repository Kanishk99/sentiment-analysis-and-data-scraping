<?php
session_start();
if(isset($_POST["submit-rev"])){
    $user_id = $_SESSION["id"];
    $myfile = fopen('..\dm\sentiment_analysis\output_fresh_dump.csv',"w");
    $review = $_POST["review"];
    $data = [['Comment'],
    [$review]
];
    
    #fwrite($myfile,$review);
    foreach($data as $row){
        fputcsv($myfile,$row);
    }
    fclose($myfile);
    header("location: ../runPy.php");

    $myfile = fopen('..\FRG\dm\sentiment_analysis\mySentiment.txt','r');
    $sentiment = fgets($myfile);
    if($sentiment == '1'){
        echo "<script type=\"text/javascript\">
        console.log('test');
        document.getElementById('create-content-text-tut').innerHTML='HELLO';
        </script>";
    }
    else{
        
        echo "<script type=\"text/javascript\">
        console.log('test');
        document.getElementById('create-content-text-tut').innerHTML='HELLO';
        </script>";
    }
}
else{
    header("location: create.php");
    exit(); 
}
?>