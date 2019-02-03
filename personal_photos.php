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
   <title>Terry Bu - Portfolio Website | Personal Photos</title>
</head>
<body>

    <!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
    <div class="container">
        <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
        <?php include("_includes/gotSocial.php"); ?>
        <?php include("_includes/welcomeNav.php"); ?>
        <?php include("_includes/mainLandingLeftImage.php"); ?>

        <div id="bodyContent">
          <h1 style="color: #C63B3B; clear: both;">Personal Photos</h1>
          <ul>
            <li>
                <p>2009 - UNC</p>
                <img src="_images/personal_photos/dsp_guitar.jpg" style="max-height: 500px; max-width: 500px;">
            </li>
            <li>
                <p>2011 - UNC</p>
                <img src="_images/personal_photos/asap_acapella.jpg" style="max-height: 500px; max-width: 500px;">
            </li>
            <li>
                <p>2012 to 2016 - Standup Comedy</p>
                <img src="_images/personal_photos/standup_comedy_2013.jpg" style="max-height: 500px; max-width: 500px;">
                <iframe allowfullscreen="" frameborder="0" height="360" src="https://www.youtube.com/embed/dGxV3Q0TdRQ?ecver=2" style="height: 50%; width: 50%;" width="400"></iframe>
                <iframe allowfullscreen="" frameborder="0" height="360" src="https://www.youtube.com/embed/9g_1bIP7duY?ecver=2" style="height: 50; width: 50%;" width="400"></iframe>
            </li>
            <li>
                <p>2016 - Hackerati Co-workers NYC</p>
                <img src="_images/personal_photos/gozChengSergey.jpg" style="max-height: 500px; max-width: 500px;">
            </li>
            <li>
                <p>2018 - JuntoNYC Meetup Organizer</p>
                <img src="_images/personal_photos/JuntoNYC.jpg" style="max-height: 500px; max-width: 500px;">
                <img src="_images/personal_photos/JuntoNYC2.jpg" style="max-height: 500px; max-width: 500px;">
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
