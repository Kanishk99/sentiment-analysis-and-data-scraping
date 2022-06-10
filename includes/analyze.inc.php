
</html>
<?php
include_once 'connect.php';
session_start();
$targetDir = "uploads/";
$fileName = basename($_FILES["scraped_reviews"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_FILES["scraped_reviews"]) && $_FILES["scraped_reviews"]["error"] == 0){

    $filename = $_FILES["scraped_reviews"]["name"];
    $filetype = $_FILES["scraped_reviews"]["type"];
    $filesize = $_FILES["scraped_reviews"]["size"];
    $id = $_SESSION['id'];


    // Validate file size - 10MB maximum
    $maxsize = 10 * 1024 * 1024;
    if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

    // Validate type of the file


            if(move_uploaded_file($_FILES["scraped_reviews"]["tmp_name"], 'output2.csv')){
                $sql="INSERT INTO scrap_data(id,file,type,size) VALUES($id,'$filename','$filetype','$filesize')";
                mysqli_query($conn,$sql);
            }else{
               echo "File is not uploaded";
            }
            
        
    } else{
        echo "Error: There was a problem uploading your file. Please try again."; 
    }

    


    // $ama_link = $_POST['ama_link'];
    // $myfile = fopen("link_store.txt", "w") or die("Unable to open file!");
    // fwrite($myfile, $ama_link);
    // fclose($myfile);
    // echo "test1";
    $make_graphs = escapeshellcmd('make_graphs.py');
    // echo "test2";
    $op = shell_exec($make_graphs);
    // echo "test3";
    header("location: ../review_analysis.php");
?>