<div class="bg-modal">
    <div class="form-box">
        <button class="close" onclick="close_form()">+</button>
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Login</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
        <form action="includes/login.inc.php" method="post" id="login" class="input-group">
            <input type="text" name="email" class="input-field" placeholder="User Id" required>
            <input type="password" name="password" class="input-field" placeholder="Password" required>
            <!---<input type="checkbox" class="check-box"><span id="check-box-text">Remember Password</span>--->
            <?php 
        if(isset($_GET["error"])){
            if($_GET["error"]=="emptyinput"){
                echo"<p class=\"error\">Fill in all fields!</p>";
                echo "<script> document.querySelector('.bg-modal').style.display = 'flex'; </script>";
            }
            else if($_GET["error"]=="wronglogin"){

                echo "<p class=\"error\">Incorrect Email/Password</p>";
                echo "<script> document.querySelector('.bg-modal').style.display = 'flex'; </script>";
            }

        }
        ?>
            <button type="submit" class="submit-btn" name="submit">Log In</button>
        </form>

        <form action="includes/signup.inc.php" method="post" id="register" class="input-group">
            <input type="text" id="userid" name="userid" class="input-field" placeholder="User Id" required>
            <input type="text" id="email" name="email" class="input-field" placeholder="E-Mail" required>
            <input type="password" id="password" name="password" class="input-field" placeholder="Password" required>
            <!---<input type="checkbox" class="check-box"><span id="check-box-text">I agree to the terms &
                        conditions</span>-->
            <?php
        if(isset($_GET["error"])){
            if($_GET["error"]=="emptyinput"){
                echo"<p class=\"error\">Fill in all fields!</p>";
                echo "<script> document.querySelector('.bg-modal').style.display = 'flex'; </script>";
            }
            else if($_GET["error"]=="invaliduid"){
                echo"<p class=\"error\">Choose a proper username!</p>";
                echo "<script> document.querySelector('.bg-modal').style.display = 'flex'; </script>";
            }
            else if($_GET["error"]=="invalidemail"){
                echo "<p class=\"error\">Choose a proper email!</p>";
                echo "<script> document.querySelector('.bg-modal').style.display = 'flex'; </script>";
            }
            else if($_GET["error"]=="invalidpass"){
                echo "<p class=\"error\">Choose a proper password!</p>";
                echo "<script> document.querySelector('.bg-modal').style.display = 'flex'; </script>";
            }
            else if($_GET["error"]=="usernametaken"){
                echo "<p class=\"error\">Username already taken!</p>";
                echo "<script> document.querySelector('.bg-modal').style.display = 'flex'; </script>";
            }
            else if($_GET["error"]=="stmtfailed"){
                echo "<p class=\"error\">Something went wrong..</p>";
                echo "<script> document.querySelector('.bg-modal').style.display = 'flex'; </script>";
            }
            else if($_GET["error"]=="none"){
                echo "<p class=\"error\">Sign up succesful!</p>";
                echo "<script> document.querySelector('.bg-modal').style.display = 'none'; </script>";
            }
        }
        ?>
            <button name="submit" type="submit" class="submit-btn">Register</button>

        </form>
    </div>
</div>