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
          <p>As impressed as we already are with the exponential advancement in technology (mobile, AI, IoE) in recent years, I believe we've only scratched the surface. </p>
          <p>Technology will continue to be the glue that binds knowledge across all disciplines and the driver of progress. I'm excited by the future where technology and entrepreneurship continue to be more and more closely intertwined, and we are enabled to create and transform the future. </p>
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
          <p>After teaching myself HTML in elementary school, I returned to programming again at age 25. I self-studied Ruby on Rails and JavaScript and then learned iOS mobile development through a full-time curriculum at TurnToTech in NYC. I am now proficient across mobile and web development with Swift being my favorite. I also have a working knowledge of Java/Android and M.E.A.N (Mongo, Express, Angular, Node) stack from past projects. I graduated with a Bachelor's in Business Administration and a minor in Japanese from UNC - Chapel Hill in 2011. </p>
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
      <p>In early 2015, I became a Software Engineer at the Hackerati, a boutique consulting startup in NYC that had notable clients like Viacom and Nestle. In later 2015, I was the lead iOS Developer at an early stage startup called Tastii and then moved on to Sogeti, whose client was Johnson &amp; Johnson in Raritan, NJ. My prior background to transitioning into programming was in digital marketing and sales. </p>
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
      <p>I am deeply curious about the future of tech entrepreneurship. I become inspired when I am working alongside driven entrepreneurs and engineers and learning from them. As a big fan of entrepreneurs like Steve Jobs, Mark Cuban, Mark Zuckerberg, Marc Andreessen, Ben Horowitz, Peter Thiel, Reed Hastings, Reid Hoffman, Jeremy Stoppelman, Paul Graham and many others, I want to get up to speed on both engineering and entrepreneurial knowledge so that I can start my own vision. </p>
      <p>In the short term, I want to keep growing and developing my engineering skills at a place where I can make an impact. </p>
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