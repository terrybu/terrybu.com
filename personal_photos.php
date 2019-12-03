<!DOCTYPE html>
<html class="">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php include ("_includes/standardHeadImports.php"); ?>
   <script type="text/javascript" src="https://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
   <link href="_css/personal_projects.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="_css/colorbox.css">
   <title>Terry Bu - Personal Website | Photos</title>
</head>
<body>

    <!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
    <div class="container">
        <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
        <?php include("_includes/gotSocial.php"); ?>
        <?php include("_includes/welcomeNav.php"); ?>
        <?php include("_includes/mainLandingLeftImage.php"); ?>

        <div id="bodyContent">
          <h1 style="color: #C63B3B; clear: both;">Photos</h1>
          <ul>
            <li>
                <p><h3>2009: UNC DSP International Business Fraternity</p></h3>
                <img src="_images/personal_photos/dsp_guitar.jpg" style="max-height: 400px; max-width: 400px;">
                <br><br>
            </li>
            <li>
                <p><h3>2011: UNC Acapella Group "ASAP" Founder </p></h3>
                <img src="_images/personal_photos/asap_acapella.jpg" style="max-height: 400px; max-width: 400px;">
                                <br><br>

            </li>
            <li>
                <p><h3>2012 to Present: NYC Standup Comedy</p></h3>
                <p>Kollaboration 2012</p>
                <img src="_images/personal_photos/standup_comedy_2013.jpg" style="max-height: 400px; max-width: 400px;">
                <p>Gotham Comedy Club 2013</p>
                    <ui> <iframe src="https://www.youtube.com/embed/dGxV3Q0TdRQ" width=400px height=400px></iframe></ui>
                <p>Greenwich Village Comedy Club 2016</p>    
                    <ui><iframe src="https://www.youtube.com/embed/9g_1bIP7duY" width=400px height=400px></iframe></ui>
                
                                <br><br>

            </li>
            <li>
                <p><h3>2016: The Hackerati (software consulting & engineering startup in Cooper Union)</p></h3>
                <img src="_images/personal_photos/gozChengSergey.png" style="max-height: 400px; max-width: 400px;">
                                <br><br>

            </li>
            <li>
                <p><h3>2018: <a href="https://www.meetup.com/juntonyc/"target=blank>JuntoNYC</a> Group Goal-Setting &  Acountability Meetup</p></h2>
                <img src="_images/personal_photos/JuntoNYC.JPG" style="max-height: 400px; max-width: 400px;">
                <img src="_images/personal_photos/JuntoNYC2.JPG" style="max-height: 400px; max-width: 400px;">
                                <br><br>

            </li>
            <li>
                <p><h3>2018 to Present: Payfone (Fastest-growing technology company listed on Deloitte Fast 500)</p></h3>
                <img src="_images/personal_photos/payfone_island.jpg" style="max-height: 400px; max-width: 400px;">
            </li>
        </ul>
    </div>
</div>



<!--for colorbox jQuery plugin -->
<script type="text/javascript" src="_javascript\vendor\jquery.colorbox-min.js"></script>
<script>
    $(document).ready(function(e) {
        $(".group1").colorbox({rel:'group1'});
    });   
</script>
<!--universal includes-->
<?php include("_includes/viewSizeDisplay.php"); ?>
<!--universal javascript-->
<script type="text/javascript" src="_javascript/nav.js"></script>
<!--universal sound effect -->
<audio id="1up" src="_sound/swim.wav"></audio>
<div id="sounddiv"><bgsound id="sound"></div>


</body>
</html>
