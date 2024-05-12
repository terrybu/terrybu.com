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
			<h1>Festival Credits & Club Appearances</h1>

			<ul>
				<li>Las Vegas World Series of Comedy Festival (Las Vegas, Nevada) 2016</li>
				<li>Flappers Comedy Club (Burbank, California)</li>
				<li>Comedy Chateau International Comedy Festival - Finalist/Best of Fest (Los Angeles, California) 2023</li>
				<li>Portland Maine Comedy Festival (Portland, Maine) 2023 </li>
				<li>North Carolina Comedy Festival (Greensboro, North Carolina) 2023 </li>
				<li>Fourth Wall Comedy Cafe (Los Angeles, California)</li>
				<li>The Hollywood Comedy (Los Angeles, California)</li>
				<li>Comedy Blvd (Los Angeles, California)</li>
				<li>The Ice House Comedy Club Pasadena</li>
				<li>The Comedy Store (Los Angeles, California)</li>
				<li>Boston Comedy Festival 2024 (Boston, Massachusetts)</li>
				<ui> <iframe width="560" height="315" src="https://youtu.be/XAL2h7bf-68" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></ui>
			</ul>

			<p><h2>2013-2016</h2></p>
			<ul>
			<li>Greenwich Village Comedy Club Showcase with Talia Reese/Steve Arons</li>
			<ui> <iframe width="560" height="315" src="https://youtu.be/9g_1bIP7duY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></ui>

			<li>Stand Up 360 Comedy Festival at Broadway Comedy Club (New York, NY) </li>
			<img src="_images/standup-me.jpg" style="max-height: 400px; max-width: 400px;">
			
			<li>The Stand NYC Comedy Club (New York, NY)</li>
			<ui> <iframe width="560" height="315" src="https://youtu.be/DXokKdpo4AU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></ui>

			<p><h2>2013</h2></p>
			<ul>
			<li>Gotham Comedy Club Showcase with Cory Kahaney and Harrison Greenbaum</li>
			<ui> <iframe src="https://www.youtube.com/embed/D5gLAzbEUtY" width=500px height=500px></iframe></ui>
			<li>Caroline's showcase with Linda Smith</li>
			<img src="_images/carolines.jpeg" style="max-height: 400px; max-width: 400px;">
			<li>Kollaborations showcase NYC</li>
			<img src="_images/personal_photos/standup_comedy_2013.jpg" style="max-height: 400px; max-width: 400px;">
			</ul>


			</div>

			
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
