<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="Terry Bu, terrybu, terry bu korean, terry bu nyc, terry bu unc, terry bu standup"> 
  <meta name="description" content="Terry Bu Personal Website with Portfolio">
  <meta name="author" content="Terry Bu">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include ("_includes/standardHeadImports.php"); ?>
  <title>Terry Bu - Portfolio Website | Home</title>
</head>
<body>

  <div class="container">
    <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
    <?php include("_includes/gotSocial.php"); ?>
      <?php include("_includes/welcomeNav.php"); ?>
      <?php include("_includes/mainLandingLeftImage.php"); ?>

  <div id="bodyContent">
    <div class="panel-group" id="accordion">
           <!--COLLAPSIBLE PANELS START HERE -->
      <div id="CollapsiblePanel1" class="panel panel-default">
      <div href="#collapseOne" class="panel-heading" id="p1">
         <h4 class="panel-title">
               <span class="glyphicon glyphicon-flash"></span> TECHNOLOGY
         </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse">
         <div class="panel-body" id="body1">
          <p>Technology binds knowledge across multiple disciplines and drives global innovation. I believe the future will be largely impacted by the creators and the movers of technology.</p>
          <p>I look forward to a future where an even higher level of knowledge transfer is possible between all industries of the world and people can collaborate in ways never imagined before to create new solutions to existing problems. </p>
         </div>
      </div>
   </div>
   <div id="CollapsiblePanel2" class="panel panel-default">
      <div href="#collapseTwo" class="panel-heading" id="p2">
         <h4 class="panel-title">
               <span class="glyphicon glyphicon-book"></span> BACKGROUND
         </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse">
        <div class="panel-body">
          <p>Seoul, South Korea (1988 - 1995)</p>
          <p>Tokyo, Japan (1995 - 1999)</p>
          <p>Woodbridge, Connecticut (2000 - 2007): Amity High School</p>
          <p>Chapel Hill, NC (2007 - 2011): The University of North Carolina at Chapel Hill. BSBA Kenan-Flagler Business School</p>
          <p>New York, NY (2014-2015): TurnToTech Full-Time Immersive Program in iOS, Objective-C, Swift, and the Fundamentals of Software Engineering</p>
        </div>
     </div>
   </div>
   <div id="CollapsiblePanel3" class="panel panel-default">
      <div href="#collapseThree" class="panel-heading" id="p3">
         <h4 class="panel-title">
               <span class="glyphicon glyphicon-tasks"></span> EXPERIENCE
         </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse">
         <div class="panel-body">
      <p>Ogilvy &amp; Mather: Account Management Intern</p>
      <p>Epsilon: Digital Marketing Associate</p>
      <p>Logicalis: B2B Sales Account Executive. Graduate of Cisco Partner Sales Academy</p>
      <p>Hackerati: Software Engineer</p>
      <p>Tastii: Lead iOS Engineer</p>
      <p>Verizon: iOS Developer</p>
      <p>Payfone: Sr. Sales Engineer</p>
      <p>Please check out my <a href="https://www.linkedin.com/in/terrybu" target="_blank">LinkedIn</a></p>
         </div>
      </div>
   </div>
   <div id="CollapsiblePanel4" class="panel panel-default">
      <div href="#collapseFour" class="panel-heading" id="p4">
         <h4 class="panel-title">
               <span class='glyphicon glyphicon-eye-open'></span> VISION
         </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse">
         <div class="panel-body">
      <p>My current focus is to keep growing and evolving as a versatile leader. I attribute my growth to great mentors I've met at past and current organizations.</p>
         </div>
      </div>
     </div>
    </div> <!-- /bodyContent -->  

  </div> <!-- /container -->  
  <?php include("_includes/viewSizeDisplay.php"); ?>


<!--BELOW is javascript-->
<script type="text/javascript" src="_javascript/nav.js"></script>
<script src="_javascript/collapsible.js"></script>

<!--sound effects -->
<script type="text/javascript" src="_javascript/sound-mouseover.js"></script>
<!--sound effects only for index -->
<audio><source src="_sound/click.mp3"></source></audio>
<audio><source src="_sound/rollover.mp3"></source></audio>

<!--universal sound effect -->
<audio id="1up" src="_sound/swim.wav"></audio>
<div id="sounddiv"><bgsound id="sound"></div>

</body>
</html>