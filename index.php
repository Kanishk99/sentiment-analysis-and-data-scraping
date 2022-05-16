<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Review Generator</title>
</head>

<style>
    @import url('./style.css');
</style>
<script src="form-display.js"></script>
<script src="slideshow.js"></script>
<script src="form-transition.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;900&family=Ubuntu+Mono:wght@700&display=swap"
    rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&family=Roboto+Slab:wght@400;600;900&family=Ubuntu+Mono:wght@700&display=swap"
    rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<body>
    <div class="form-pop">
        <div class="bg-modal">
            <div class="form-box">
                <button class="close" onclick="close_form()">+</button>
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Login</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <form action="includes/login.inc.php" method="post" id="login" class="input-group">
                    <input type="text" class="input-field" placeholder="User Id" required>
                    <input type="text" class="input-field" placeholder="Password" required>
                    <!---<input type="checkbox" class="check-box"><span id="check-box-text">Remember Password</span>--->
                    <button type="submit" class="submit-btn" name="submit">Log In</button>
                </form>
                <form action="includes/signup.inc.php" method="post" id="register" class="input-group">
                    <input type="text" id="userid" name="userid" class="input-field" placeholder="User Id" required>
                    <input type="text" id="email" name="email" class="input-field" placeholder="E-Mail" required>
                    <input type="text" id="password" name="password" class="input-field" placeholder="Password"
                        required>
                    <!---<input type="checkbox" class="check-box"><span id="check-box-text">I agree to the terms &
                        conditions</span>-->
                    <button name="submit" type="submit" class="submit-btn">Register</button>
                    <?php
        if(isset($_GET["error"])){
            if($_GET["error"]=="emptyinput"){
                echo "<script> alert(Empty Input!) </script>";
                "<p>Fill in all fields!</p>";
            }
            else if($_GET["error"]=="invaliduid"){
                echo "<script>  </script>";
                "<p>Choose a proper username!</p>";
            }
            else if($_GET["error"]=="invalidemail"){
                echo "<p>Choose a proper email!</p>";
            }
            else if($_GET["error"]=="invalidpass"){
                echo "<p>Choose a proper password!</p>";
            }
            else if($_GET["error"]=="usernametaken"){
                echo "<p>Username already taken!</p>";
            }
            else if($_GET["error"]=="stmtfailed"){
                echo "<p>Something went wrong..</p>";
            }
            else if($_GET["error"]=="none"){
                echo "<p>Sign up succesful!</p>";
            }
        }
        ?>
                </form>
            </div>
        </div>

    </div>
    <?php 
include_once 'header.php'
?>



    <section class="section-body" id="first">

        <h1>OUR GOAL</h1>
        <p id="section-body-content">FAKE REVIEWS GENERATED WITH A SINGLE <SPAN>CLICK</SPAN></p>
        <div class="curve1"></div>
    </section>
    <!--<section class="section-body" id="second">
        <h1>Curvy</h1>
        <p>Necessitatibus aliquam, iste perspiciatis tempore iure, cumque dolore quod omnis ducimus id, libero veritatis
            vero beatae. Unde excepturi molestiae quod, ullam dolorem esse ipsum natus similique, at cumque eius dolore.
        </p>
        <div class="curve2"></div>
    </section>-->
    <section class="section-body" id="third">

        <img name="slide1" id="mySlider1">
    </section>

    <div class="spacer layer2">


    </div>

    <section class="section-body" id="fourth">
        <!-- <img name="slide2" id="mySlider2"> -->
        <h1>Curvy</h1>
        <p>Fugiat, enim molestias libero quos eum illo delectus. Dolores aspernatur laboriosam non, ipsum ut veritatis,
            ratione nesciunt exercitationem magni amet voluptatum laborum. Voluptatum inventore temporibus dolor,
            consequuntur cum rerum cumque!</p>

    </section>
    <div class="spacer layer1"></div>
    <section class="section-body" id="fifth">
        </div>
        <?php
        include_once 'footer.php'
        ?>
    </section>

</body>

</html>