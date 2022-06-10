<?php
    session_start();
    include 'includes/delete_files.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    @import url('style/style.css');
</style>
<script src="js/form-display.js"></script>
<script src="js/form-transition.js"></script>

<body>
    <?php
    include_once 'login.php'
    ?>
    <?php 
    include_once 'header.php'

?>




    <div class="spacer layer1">
        <p id="create-content-text">DATA SCRAPER</p>
        <br>
        <p id="create-content-text-tut"><br><span id='scrap-tut'>
            Go to page 2 of your product's review page on amazon.com and copy given link <img src='url-tut.png'>
        </span></p>
        <img>
        
        <div class="form-generate-review">
            <form action="includes/datascrap.inc.php" method="post" id="login" class="input-group-rev">
                <input type="text" name="ama_link" class="input-field-rev" placeholder="Enter Product Link..." required style="width:500px;height:30px">
                <button type="submit" class="submit-btn" name="submit-rev">Submit</button>
                <?php
                if(!isset($_SESSION["id"])){
                    echo "<script> document.querySelector('.bg-modal').style.display = 'flex'; </script>";
                    echo "<script> document.querySelector('.close').style.display = 'none'; </script>";
                }

            ?>
        </div>
    </div>
    <section class="section-body" id="fifth">
        <?php 
    include_once 'footer.php'
?>
</body>

</html>