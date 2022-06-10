
</html>
<?php
include_once 'connect.php';
session_start();
    $ama_link = $_POST['ama_link'];
    $myfile = fopen("link_store.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $ama_link);
    fclose($myfile);
    
    // $sd = escapeshellcmd('D:');
    // $set_drive = shell_exec($sd);
    // $sp = escapeshellcmd('cd D:\xampp\htdocs\FRG\dm\amazon_reviews_scraping\spiders');
    // $set_path = shell_exec($sp);
    // $command = escapeshellcmd('amazon_reviews_scraping\amazon_reviews.py');
    // $output = shell_exec($command);
    // exec('scrapy runspider amazon_reviews_scraping\spiders\amazon_reviews.py -o output2.csv');
    $scrap = escapeshellcmd('C:\Users\Kanishk\AppData\Local\Programs\Python\Python310\Scripts\scrapy.exe runspider amazon_reviews_scraping/spiders/amazon_reviews.py -o output2.csv');
    $output = shell_exec($scrap);

    $file_url = 'output2.csv';  
    header('Content-Type: application/octet-stream');  
    header("Content-Transfer-Encoding: utf-8");   
    header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
    readfile($file_url);  

    header("location: ../data_scraper.php");
?>