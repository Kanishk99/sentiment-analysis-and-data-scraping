<?php
    session_start();
?>
<HTML>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Review Generator</title>
</head>

<style>
    @import url('style/style.css');
</style>
<script src="js/form-display.js"></script>
<script src="js/slideshow.js"></script>
<script src="js/form-transition.js"></script>
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

<body><?php
    include 'includes/delete_files.php'?>
    <?php
include_once 'login.php'
?>
    <?php 
include_once 'header.php'
?>



    <section class="section-body" id="first">

        <p style="font-size:80px;font-weight:bolder">SENTIMENT ANALYZER</p>
        <p id="section-body-content">PREDICT TEXT EMOTIONS WITH YOUR OWN <br><span style="text-align:center;"> COMMENTS </span>
        <!-- <button onclick="location.href='./review_generator.php'">Review Generator</button></SPAN></span> -->
        <button class="options" onclick="location.href='./sentiment.php'">CLICK HERE</button></SPAN>
        <!-- <button class="options" onclick="location.href='./review_analysis.php'">Rating Analysis</button></SPAN> -->
        <!-- <button class="options" onclick="location.href='./data_scraper.php'">Data Scraper</button></SPAN>--></p> 
    </section>

    </div>
        <!-- <div class="curve1"></div> -->
    </section>
    <div class="spacer layer3"></div> 

    <div class="spacer layer2"> 
        <section class="section-body" id="third">
        <p style="font-size:80px;font-weight:bolder">Rating Analysis</p>
    <p id="section-body-content">SCAN YOUR DATASETS TO CREATE GRAPHS <br><span style="text-align:center;">OUR OPTIONS </span>
        <!-- <button onclick="location.href='./review_generator.php'">Review Generator</button></SPAN></span> -->
        <!-- <button class="options" onclick="location.href='./sentiment.php'">Sentiment Analysis</button></SPAN> -->
        <button class="options" onclick="location.href='./review_analysis.php'">Click Here</button></SPAN>
        <!-- <button class="options" onclick="location.href='./data_scraper.php'">Data Scraper</button></SPAN>--></p> 
</section>
    </div>


    <div class="spacer layer1">
    <section class="section-body" id="fourth">
    <p style="font-size:80px;font-weight:bolder">Data Scraper</p>
    <p id="section-body-content">SCRAP AMAZON FOR RATINGS AND REVIEWS USING OUR <br><span style="text-align:center;">SCRAPY TOOL </span>
        <!-- <button onclick="location.href='./review_generator.php'">Review Generator</button></SPAN></span> -->
        <!-- <button class="options" onclick="location.href='./sentiment.php'">Sentiment Analysis</button></SPAN> -->
        <!-- <button class="options" onclick="location.href='./review_analysis.php'">Rating Analysis</button></SPAN> -->
        <button class="options" onclick="location.href='./data_scraper.php'">Click Here</button></SPAN></p>
    </section>
    </div>
    <section class="section-body" id="fifth">
        
        </div>
        <?php
        include_once 'footer.php'
        ?>
    </section>

</body>

</html>