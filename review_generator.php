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
        <p id="create-content-text">FAKE REVIEW GENERATOR</p>
        <br>
        <p id="create-content-text-tut"></p>
        <div class="form-generate-review">
            <form action="includes/create.inc.php" method="post" id="login" class="input-group-rev">
                <input type="text" name="pname" class="input-field-rev" placeholder="Product Name" required>
                <input type="radio" class="input-field-rev" id="neg" name="rating" value="negative">
                <label for="html">Positive</label><br>
                <input type="radio" class="input-field-rev" id="pos" name="rating" value="positive">
                <label for="css">Negative</label><br>
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