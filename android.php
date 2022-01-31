<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include ("_includes/standardHeadImports.php"); ?>
  <link href="_css/android.css" rel="stylesheet" type="text/css">
  <title>Terry Bu - Personal Website | Android </title>
</head>
<body>
  <div class="container">
    <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
    <?php include("_includes/gotSocial.php"); ?>
    <?php include("_includes/welcomeNav.php"); ?>
</div><!--closes wrapper from welcomeNav -->
<div id="androidImage">
	<img src="_images/android_red.png" class="bottom"> 
	<img src="_images/android.png" class="top"> 
</div>

<div id="bodyContent" style="clear: both;">
	<hr>
	<div id="androidApps">
	<h1>24-Hour Life Age Clock (English + Korean)</h1>
  <ul>
    <li>See your life in a 80-year journey and see how that compares to where you are at in a 24-hour clock</li>
    <li><a href="https://play.google.com/store/apps/details?id=com.bucifer.lifeclock">Korean Version: 아프니까 인생시계 (Currently not maintained)</a></li>
    <li>3000+ organic installs. 4.67 out of 5 stars rating. </li>
  </ul>
  <br>
		<img class="short" src="_images/screenshot1.png">
		<img class="short" src="_images/screenshot2.png">
		<img class="long" src="_images/pscreen1.png">
		<img class="long" src="_images/pscreen2.png">
	</div>
</div> <!-- /bodyContent -->  
</div> <!-- /container -->  

<!--universal includes-->
<?php include("_includes/viewSizeDisplay.php"); ?>
<!--universal javascript-->
<script type="text/javascript" src="_javascript/nav.js"></script>
<!--universal sound effect -->
<audio id="1up" src="_sound/swim.wav"></audio>
<div id="sounddiv"><bgsound id="sound"></div>

</body>
</html>

