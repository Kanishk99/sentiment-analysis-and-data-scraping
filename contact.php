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
        <div id="contact-box">
            <div id="contact-box-left">

                <form id="comment-form">
                    <p>Give us your own review of our website!</p>
                    <input type="text" id="name" name="name" placeholder="Enter your name.." required>
                    <textarea></textarea>
                </form>
            </div>
            <div id="contact-box-right">
                <div id="map"><embed id="map-frame"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d817.3523575523915!2d79.16545816158813!3d12.971534441016582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad474a40ce9b35%3A0xd4263ff41c2191ea!2sPearl%20Research%20Block!5e0!3m2!1sen!2sin!4v1652737391123!5m2!1sen!2sin"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">

                </div>
            </div>
        </div>
    </div>
    <?php 
    include_once 'footer.php'
?>
</body>

</html>