<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include ("_includes/standardHeadImports.php"); ?>
  <title>Terry Bu - Personal Website | iOS </title>
</head>
<body>

  <div class="container">
    <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
    <?php include("_includes/gotSocial.php"); ?>
    <?php include("_includes/welcomeNav.php"); ?>
  </div>
  <img src="_images/ios.png">
  <div id="bodyContent">
    <div id="projectsDiviOS">
      <ul id="iosBullets"> 

        <li>
          <h3><a href="https://itunes.apple.com/us/app/win2/id1280580526?ls=1&mt=8" target="blank">Win2</a></h3>
          <ul>
            <img src="_images/Win2_app_team.jpg" style="max-height: 500px; max-width: 500px;">
            <img src="_images/win2Logo.png" style="max-height: 300px; max-width: 300px;">
            <li>
             Between April of 2015 to March of 2016, I founded and led a mobile app development project at a NYC Korean Christian church called Onnuri. The purpose of the app was to help various youth groups within the church to keep up-to date with latest events. We worked in a small team comprised of 1 UX Designer, 1 UI Designer, 1 Project Manager, 1 Android Developer and myself as the iOS Developer. The project is currently not maintained. 
            </li>
            <li>
            300+ installs through App Store. 100 User Signups. 
            </li>
            <li>
            Leveraged third-party libraries such as FBSDKCoreKit, Firebase and many others. 
            </li>
            <li>
              <a href="http://vision.onnuri.org/in2/" target="blank">http://vision.onnuri.org/in2/</a>
            </li>
            <li>
              <img src="_images/win2LandingPage.png" style="max-height: 300px; max-width: 300px;">
            </li>
            <li>
              <img src="_images/win2Menu.png" style="max-height: 300px; max-width: 300px;">
            </li>
            <li>
              <img src="_images/win2Gallery.png" style="max-height: 300px; max-width: 300px;">
            </li>
          </li> 
        </ul>
        <br>
        <ul>
            <li>
              <a href="https://github.com/terrybu/javaAtTurnToTech" target="blank">Notifications Queue/Event Processor Back-End System using APNS, Java, Pushy and Redis</a>
            </li>
            <li><a href="https://github.com/terrybu/AddressbookPull-MultiSelect" target="_blank">Addressbook Contacts Multi-Selection functionality for "Invite Your Friends" Functionality </a></li>
            <li><a href="https://github.com/terrybu/Parallax-Header" target="blank">Parallax UI Header Effect (making your tableview/imageview scroll prettier) </a></li>   
            <br>
            <img src="_images/parallax.gif" class="reflectorImage">
        </ul>
        <br>

        <li><h3>Trackerati</h3>
          <ul>
            <li>Internal app for The Hackerati for 3rd party contractors and consultants to track, record and report billable hours to clients</li>
            <br>
            <img src="_images/trackerati.gif" class="reflectorImage">
          </li>
        </ul>
        <br>

        <li>
          <h3>
            <a href="https://github.com/terrybu/TBVideoSplashScreen" target="_blank">TBVideoSplashScreen</a>
          </h3>
          <ul>
            <li>Cocoapod library for showing a short video on app launch instead of static launchscreen</li>
            <br> <img src="_images/splashScreenDemo.gif">
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
          <br>
          <img src="_images/openFrameworks.gif" class="reflectorImage">
        </ul>

        <br>
        <li><h3>Jest Notes</h3>
          <ul>
           <img src="_images/iOS_jestnotes_icon.png">
           <li>
            Productivity app for stand-up comics who need to write and organize their jokes and performance sets
          </li>
          <li>
            Rails Web App & iOS integration through Parse.com API backend 
          </li>
          <img src="_images/iOS_jestnotes_web.png"  style="height: auto; max-width: 500px;">
          <li>
            Core Data Local Caching for Offline Capability. 
          </li>
        </ul>
      </li>
      <br>
      <li>
        <h3><a href="https://github.com/terrybu/How-Much-Sunlight-Do-You-Need" target="blank">How Much Sunlight Do You Need?</a></h3>
        <ul>
          <img src="_images/iOS_sunlight.png">
          <li>
            Figure out how much sunlight exposure you need to get your healthy daily dosage of vitamin D, depending on your location and weather. Based on Fitzpatrick skin type scale. 
          </li>
          <br>
          <img src="_images/skinType.gif" class="reflectorImage">
        </li>
      </ul>

      <br>
      <li>
        <h3>
          <a href="https://github.com/terrybu/YelpAPIOnMapViewARC" target="_blank">Yelp API (Forked existing Github repo and enabled ARC)</a>
        </h3>
      </li>


    </ul>
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
