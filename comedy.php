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
   <title>Terry Bu - Personal Website | Standup Comedy</title>
</head>
<body>

	<!--[if lt IE 7]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
	<div class="container">
		<div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
		<?php include("_includes/gotSocial.php"); ?>
		<?php include("_includes/welcomeNav.php"); ?>
		<?php include("_includes/mainLandingLeftImage.php"); ?>

		<div id="bodyContent">

			<!--
			<script src="https://apis.google.com/js/platform.js"></script>
			<div class="g-ytsubscribe" data-channel="burownrice" data-layout="full" data-count="default"></div>
			<p>Subscribe above on YouTube for more comedy videos!</p>
			<br><br>
	-->
			<div>
			<h4>Festival Credits & Club Appearances</h4>
			<p>2016: Stand Up 360 Comedy Festival at Broadway Comedy Club (NYC) </p>
			<img src="_images/standup-me.jpg" style="max-height: 400px; max-width: 400px;">
			<p>2016: The Stand Comedy Club (Laughing Buddha Industry Showcase) (NYC)</p>
			<img src="_images/the-stand-nyc.png" style="max-height: 400px; max-width: 400px;">
			<p>2016: Las Vegas World Series of Comedy Festival (Las Vegas, Nevada)</p>
			<p>2023: 2nd Annual Comedy Chateau International Comedy Festival - Finalist/Best of Fest (Los Angeles, California)</p>
			<img src="_images/chateau.png" style="max-height: 400px; max-width: 400px;">
			<p>2023: Portland Maine Comedy Festival (Portland, Maine)</p>
			<p>2023: North Carolina Comedy Festival (Greensboro, North Caorlina)</p>
			</div>

			<br><br>

			<p><h4>Clips</p></h4>

			<p><h4>Gotham Comedy Club 2013 (showcase with Cory Kahaney and Harrison Greenbaum) </p></h4>
			<ui> <iframe src="https://www.youtube.com/embed/D5gLAzbEUtY" width=500px height=500px></iframe></ui>
			<p><h4>Greenwich Village Comedy Club 2016 (showcase with Talia Reese)</p>   </h4>
			<ui><iframe src="https://www.youtube.com/embed/9g_1bIP7duY" width=500px height=500px></iframe></ui>
			<br><br>			
			
			<img src="_images/personal_photos/standup_comedy_2013.jpg" style="max-height: 400px; max-width: 400px;">
			<p>Kollaborations showcase NYC 2013</p>

			<img src="_images/carolines.jpeg" style="max-height: 400px; max-width: 400px;">
			<p>Caroline's showcase with Linda Smith 2013</p>

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
