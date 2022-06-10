
<section class="header">
        <nav>
            <a id="home_image" href="index.php"><img src="img/frg_transparent.png"></a>
            <div class="nav-links">
                <ul>

                    <li>
                        <a href="sentiment.php">Sentiment Analysis</a>
                    </li>
                    <li>
                        <a href="review_analysis.php">Rating Analysis</a>
                    </li>
                    <li>
                        <a href="data_scraper.php">Data Scraping</a>
                    </li>
 
                </ul>
            </div>
            <?php
                if(isset($_SESSION["id"])){
                    echo "<a href='includes/logout.inc.php' class='logout-btn' id='logout-btn' onclick=''>LOGOUT</a>";
                }
                else{
                    echo "<button type='button' class='login-btn' id='login-btn' onclick='open_form()'>LOGIN</button>";
                }
            ?>
            
        </nav>
    </section>