
    
<?php
    session_start();
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
        <p id="create-content-text">RATING ANALYZER</p>
        <br>
        <p id="create-content-text-tut">
        </p>
        
        <div class="form-generate-review"><img id ="graph" src="includes/pie.png" width="500" height="500" onerror="this.style.display='none'"/>
        <!-- <img id ="graph" src="includes/bar.png" width="600" height="600" onerror="this.style.display='none'"/> -->
            <form action="includes/analyze.inc.php" method="post" id="login" class="input-group-rev" enctype="multipart/form-data">
                <!-- <input type="text" name="ama_link" class="input-field-rev" placeholder="Enter Product Link..." required style="width:500px;height:30px"> -->
                <input type="file" name="scraped_reviews">
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