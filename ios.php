<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include ("_includes/standardHeadImports.php"); ?>
  <title>Terry Bu - Portfolio Website | iOS </title>
</head>
<body>
  <?php include_once("analyticstracking.php") ?>

  <div class="container">
    <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
    <?php include("_includes/gotSocial.php"); ?>
    <?php include("_includes/welcomeNav.php"); ?>
  </div>
  <img src="_images/ios.png" id="headImageRails">
  <div id="bodyContent">
    <h1 style="color: blue; clear: both;">iOS</h1>
    <div id="projectsDiviOS">
      <ul id="iosBullets"> 
        <li>
          <h3><a href="https://itunes.apple.com/us/app/up-anonymously-spread-kindness/id985699487?mt=8" target="blank">Up: anonymously spread kindness</a></h3>
          <ul>
            <li> <img src="_images/iOS_UP.jpeg"></li>
            <li>
              Description: Up is a simple app with a huge mission -- to make the world a better place. UP, allows you to anonymously send positive and encouraging messages to your phone contacts. Anonymous kindness is the best kind. It frees the recipient from embarrassment and the burden of feeling any need to reciprocate.
            </li>
            <li>
              <a href="http://wakeupuseup.com/" target="blank">http://wakeupuseup.com</a>
            </li>
            <li>
              <a href="https://github.com/terrybu/javaAtTurnToTech" target="blank">Notifications Queue/Event Processor Back-End System using APNS, Java, Pushy and Redis</a>
            </li>
            <li><a href="https://github.com/terrybu/AddressbookPull-MultiSelect" target="_blank">Addressbook Contacts Multi-Selection functionality for "Invite Your Friends" Functionality </a></li>
            <li><a href="https://github.com/terrybu/Parallax-Header" target="blank">Parallax UI Header Effect (making your tableview/imageview scroll prettier) </a></li>   
            <br>
            <img src="_images/parallax.gif" class="reflectorImage">
          </ul>
        </li> 
        <br>
        <li>
          <h3><a href="https://itunes.apple.com/us/app/jest-notes/id956914230?mt=8s" target="blank">Jest Notes</a></h3>
          <ul>
            <li> <img src="_images/iOS_jestnotes_icon.jpeg"></li>
            <li>
              Productivity app for stand-up comics who need to write and organize their jokes and performance sets
            </li>
            <li>
              Rails Web App & iOS integration through Parse.com API backend 
            </li>
            <li> <img src="_images/iOS_jestnotes_web.jpeg"></li>
            <li>
              Core Data Local Caching for Offline Capability. 
            </li>
          </ul>
        </li>
        <br>
        <h3><a href="https://itunes.apple.com/us/app/how-much-sunlight-do-you-need/id979996036?mt=8" target="blank">How Much Sunlight Do You Need?</a></h3>
        <ul>
          <li>
            Figure out how much sunlight exposure you need to get your healthy daily dosage of vitamin D, depending on your location and weather. 
          </li>
          <li>Based on Fitzpatrick skin type scale. 
          </li>
          <br>
          <img src="_images/skinType.gif" class="reflectorImage">

        </ul>
        <br>

        <li>
          <h3>
            Trackerati 
          </h3>
          <ul>
            <li>Internal app for The Hackerati for 3rd party contractors and consultants to track, record and report billable hours to clients</li>
            <img src="_images/trackerati.gif" class="reflectorImage">
          </ul>
        </li>
        <br>

        <li>
          <h3>
            <a href="https://github.com/terrybu/TBVideoSplashScreen" target="_blank">TBVideoSplashScreen</a>
          </h3>
          <ul>
            <li>Cocoapod library for showing a short video on app launch instead of static launchscreen</li>
          </ul>
        </li>

        <li>
          <h3>
            <a href="https://github.com/terrybu/TBFaceMorpherPhoto">
              TBFaceMorpher
            </a>
          </h3>
          <ul>
            <li>(Leverages Open Frameworks and Objective-C++ to merge your face with another mask image of your choosing)</li>
          </li>
        </ul>
        <img src="_images/openFrameworks.gif" class="reflectorImage">
        <br>

        <li>
          <h3>
            <a href="https://github.com/terrybu/YelpAPIOnMapViewARC" target="_blank">Yelp API (Forked existing Github repo and enabled ARC)</a>
          </h3>
        </li>


      </ul>
    </div>

  </div> <!-- /bodyContent -->  

  <!-- START OF HIT COUNTER CODE -->
  <br><script language="JavaScript" src="http://www.counter160.com/js.js?img=3"></script><br><a href="http://www.000webhost.com"><img src="http://www.counter160.com/images/3/left.png" alt="Free web hosting" border="0" align="texttop"></a><a href="http://www.hosting24.com"><img alt="Web hosting" src="http://www.counter160.com/images/3/right.png" border="0" align="texttop"></a>
  <!-- END OF HIT COUNTER CODE -->

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
