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
          <p>As impressed as we already are with the exponential advancement in technology (mobile, cloud, IoE) in recent years, I believe we've only scratched the surface. </p>
          <p>Technology will continue to be the glue that binds information and knowledge across all disciplines. I'm excited by the future where technology and entrepreneurship continue to be more and more closely intertwined, and we are enabled to create and transform things we could not fathom before. </p>
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
          <p>After picking up HTML in elementary school, I returned to programming again at age 25 as an adult. I learned Ruby on Rails and JavaScript through self-study and then iOS mobile development at TurnToTech in NYC. I am now proficient across mobile and web development with Objective-C/Swift being my favorite. I also have a working knowledge of Java/Android, AngularJS and Node.js from past projects. </p>
          <p>I graduated with a Bachelor's in Business Administration and a minor in Japanese from UNC - Chapel Hill in 2011. </p>
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
      <p>After initially considering Consulting/Finance positions out of college and then exploring Digital Marketing and Sales for about 3 years, I wanted to find a career that felt more aligned with my strengths and passion. That initially led me to pursue stand-up comedy (naturally?) and then computer programming. I do consider myself a Generalist with diverse interests and hope to ultimately find a career where I can combine all that I've learned and and think broadly. In early 2015, I became a Software Engineer at the Hackerati, a boutique consulting startup.</p>
      <p>Please refer to <a href="http://www.linkedin.com/in/terrybu" target="_blank">LinkedIn</a> for details.</p>
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
      <p>I am deeply curious about the future of tech entrepreneurship. I would be very happy working alongside driven entrepreneurs and learning from them. </p>
      <p>In the short term, I want to keep growing and developing my Engineering skills at a place where I can make an impact. </p>
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