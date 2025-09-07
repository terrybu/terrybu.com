<//?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('blog/wp-blog-header.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Terry Bu Personal Website with Portfolio">
  <meta name="author" content="Terry Bu">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include ("_includes/standardHeadImports.php"); ?>
  <title>Terry Bu - Personal Website | Home</title>
</head>
<body>

<div class="container">
    <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
    <?php include("_includes/gotSocial.php"); ?>
    <?php include("_includes/welcomeNav.php"); ?>
    <?php include("_includes/mainLandingLeftImage.php"); ?>
<!-- 
    <div id="bodyContent">
      <div class="panel-group" id="accordion"> -->
       <!--COLLAPSIBLE PANELS START HERE -->
<!--        <div id="CollapsiblePanel1" class="panel panel-default">
        <div href="#collapseOne" class="panel-heading" id="p1">
         <h4 class="panel-title">
           <span class="glyphicon glyphicon-flash"></span> TECHNOLOGY
         </h4>
       </div>
       <div id="collapseOne" class="panel-collapse collapse">
         <div class="panel-body" id="body1">
          <p>I give my biggest thanks to mentors, colleagues and managers who supported me in my technology career between 2013 to 2023 as a developer, engineer and consultant.</p>
        </div>
      </div>
    </div> -->
    <!-- <div id="CollapsiblePanel2" class="panel panel-default">
      <div href="#collapseTwo" class="panel-heading" id="p2">
       <h4 class="panel-title">
         <span class="glyphicon glyphicon-book"></span> EDUCATION
       </h4>
     </div>
     <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <p>Seoul, South Korea </p>
        <p>Woodbridge, Connecticut (2000 - 2007): Amity High School</p>
        <p>Chapel Hill, North Carolina (2007 - 2011): <a href=https://www.unc.edu/>The University of North Carolina at Chapel Hill</a> B.S. in Business Administration from Kenan-Flagler Business School with a Minor in Japanese </p>
        <p>Tokyo, Japan (2009): Keio University Foreign Exchange Program </p>
        <p>New York City, NY (2014-2015): <a href=http://turntotech.io/>TurnToTech</a> Full-Time Immersive Program in iOS, Objective-C, Swift, and the Fundamentals of Software Engineering</p>
        <p><a href=https://producthq.org/>Product HQ</a> (2022): Certified Product Owner/Product Manager</p>
        <p>Duke University of Engineering (2022): Machine Learning certification for Product Managers</p>
        <p><a href=https://www.scrumalliance.org/get-certified/scrum-master-track/certified-scrummaster>Scrum Alliance</a> (2022): Certified Scrum Master (CSM)</p>
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
      <p><a href="https://www.epsilon.com/us">Epsilon</a>: Digital Marketing Associate (2011)</p>
      <p>Logicalis: Account Executive - graduate of Cisco Partner Sales Academy (2013)</p>
      <p>Hackerati: Software Engineer (2015)</p>
      <p>Verizon: iOS Engineer (2017)</p>
      <p><a href="https://www.prove.com/">Prove</a>: Sr. Sales Engineer, R&D Engineer (2018-2022)</p>
      <p><a href="https://www.relexsolutions.com/">RELEX Solutions</a>: Technical Consultant (2022-Present)</p>
      <p><a href="https://www.linkedin.com/in/terrybu" target="_blank">LinkedIn Profile</a></p>
    </div>
  </div>
</div> -->
<!-- <div id="CollapsiblePanel4" class="panel panel-default">
  <div href="#collapseFour" class="panel-heading" id="p4">
   <h4 class="panel-title">
     <span class='glyphicon glyphicon-eye-open'></span> INTERESTS
   </h4>
 </div>
 <div id="collapseFour" class="panel-collapse collapse">
   <div class="panel-body">
    <p>Veganism, Mental Health, Fasting, Sustainability, Plant-based diet, Meditation, Mind-Body-Spirit connection, Animal Welfare, Social Activism, Purpose-Driven Career, Writing, Content Creation, Asian-American Identity </p>
  </div>
</div>
</div> -->
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
