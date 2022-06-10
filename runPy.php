<?php
    $command = escapeshellcmd('dm\sentiment_analysis\prediction.py');
    $output = shell_exec($command);
    $myfile = fopen('dm\sentiment_analysis\mySentiment.txt','r');
    $sentiment = fgets($myfile);
    setcookie("Sentiment", $sentiment);
    header("location: sentiment.php");
?>