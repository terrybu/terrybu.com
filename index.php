<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include ("_includes/standardHeadImports.php"); ?>
  <title>Terry Bu - Portfolio Website | Home</title>
</head>
<body>
<?php include_once("analyticstracking.php") ?>

  <div class="container">
    <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
    <?php include("_includes/gotSocial.php"); ?>
      <?php include("_includes/welcomeNav.php"); ?>
      <?php include("_includes/kyotoImage.php"); ?>

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
          <p>Technology binds knowledge across all disciplines and drives progress. The Future will be driven by the Creators and the Movers of Technology. </p>
         </div>
      </div>
   </div>
   <div id="CollapsiblePanel2" class="panel panel-default">
      <div href="#collapseTwo" class="panel-heading" id="p2">
         <h4 class="panel-title">
               <span class="glyphicon glyphicon-book"></span> EDUCATION
         </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse">
        <div class="panel-body">
          <p>Seoul, South Korea (1988 - 1995): 위례초등학교 </p>
          <p>Tokyo, Japan (1995 - 1999): 佃島小学校　</p>
          <p>Connecticut, USA (2000 - 2007): Peck Place Elementary ~ Amity High School </p>
          <p>Chapel Hill, NC, USA (2007 - 2011): The University of North Carolina at Chapel Hill <br>B.S. in Business Administration with a Minor in Japanese Language </p>
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
      <p>Ogilvy &amp; Mather: Global advertising agency founded by David Ogilvy: Account Management Intern</p>
      <p>Epsilon: Global digital marketing agency with presence in NYC and Boston: Marketing Associate</p>
      <p>Logicalis &amp; Cisco: Cisco Sales Academy 2013, Sales Account Executive </p>
      <p>Hackerati: A boutique consulting company for web and mobile software, Software Engineer</p>
      <p>Tastii: Lead iOS Engineer </p>
      <p>Sogeti: Sr. iOS Consultant for Johnson &amp; Johnson</p>
      <p>Please refer to my <a href="http://www.linkedin.com/in/terrybu" target="_blank">LinkedIn</a></p>
         </div>
      </div>
   </div>
   <div id="CollapsiblePanel4" class="panel panel-default">
      <div href="#collapseFour" class="panel-heading" id="p4">
         <h4 class="panel-title">
               <span class='glyphicon glyphicon-eye-open'></span> FUTURE VISION
         </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse">
         <div class="panel-body">
      <p>My current vision is -3.75 </p>
      <p>So my future vision would probably be worse</p>
      <p>JUST KIDDING, JE RIGOLE</p>
         </div>
      </div>
     </div>
    </div> <!-- /bodyContent -->  

<!-- START OF HIT COUNTER CODE -->
<br><script language="JavaScript" src="http://www.counter160.com/js.js?img=3"></script><br><a href="http://www.000webhost.com"><img src="http://www.counter160.com/images/3/left.png" alt="Free web hosting" border="0" align="texttop"></a><a href="http://www.hosting24.com"><img alt="Web hosting" src="http://www.counter160.com/images/3/right.png" border="0" align="texttop"></a>
<!-- END OF HIT COUNTER CODE -->

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