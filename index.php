<?php 
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

    <div id="bodyContent" style="display: none;">
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
          <p>Technology drives global innovation across industries. There's little doubt that the future of the world will be heavily transformed by the creators and movers of technology. </p>
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
        <p>Seoul, South Korea </p>
        <p>Tokyo, Japan</p>
        <p>Woodbridge, Connecticut (2000 - 2007): Amity High School</p>
        <p>Chapel Hill, North Carolina (2007 - 2011): The University of North Carolina at Chapel Hill. BSBA at Kenan-Flagler Business School</p>
        <p>New York City, NY (2014-2015): TurnToTech Full-Time Immersive in iOS, Objective-C, Swift, and the Fundamentals of Software Engineering</p>
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
      <p>Ogilvy &amp; Mather: Account Management Intern (2010)</p>
      <p>Epsilon: Digital Marketing Associate (2011)</p>
      <p>Logicalis: Account Executive. Graduate of Cisco Partner Sales Academy (2013)</p>
      <p>Hackerati: Software Engineer (2015)</p>
      <p>Verizon: iOS Engineer (2017)</p>
      <p>Payfone: R&D Engineer, Product Innovation (Present) </p>
      <p><a href="https://www.linkedin.com/in/terrybu" target="_blank">LinkedIn Profile</a></p>
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
    <p>My current focus is to keep growing in knowledge, versatility, creativity and leadership. I give big thanks to great mentors I've met along the way.</p>
  </div>
</div>
</div>
</div>


<!-- There's some problems getting any texts BELOW the four panels to align correctly. Margin and clears are not working" 
<div style="margin-top: 8em; clear: both;">
  <?php
  $posts = get_posts('numberposts=10&order=ASC&orderby=post_title');
  foreach ($posts as $post) : setup_postdata( $post ); ?>
    <?php the_date(); echo "<br />"; ?>
    <?php the_title(); ?>    
    <?php the_excerpt(); ?> 
    <?php
  endforeach;
  ?>
</div> -->


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