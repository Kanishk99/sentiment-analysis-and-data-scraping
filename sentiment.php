<?php
    session_start();
?>
<?php
    include 'includes/delete_files.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    @import url('./style/style.css');
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
        <p id="create-content-text">SENTIMENT ANALYZER</p>
        <br>
        <?php
        if(isset($_COOKIE["Sentiment"])) {
        if($_COOKIE["Sentiment"]== '1'){
            echo '<p id="create-content-text-tut">POSITIVE</p>';
            setcookie("Sentiment", "", time() - 3600);
        }
        else if($_COOKIE["Sentiment"]== '0'){
            echo '<p id="create-content-text-tut">NEGATIVE</p>';
            setcookie("Sentiment", "", time() - 3600);
        }
        else{
            echo '<p id="create-content-text-tut">POSITIVE OR NEGATIVE?</p>';
        }}
        ?>
        <div class="form-generate-review">
            <form action="includes/sendreview.inc.php" method="post" id="login" class="input-group-rev">
                <textarea name="review" class="input-field-rev" placeholder="Your text here..."  style="height:500px;" required></textarea>
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