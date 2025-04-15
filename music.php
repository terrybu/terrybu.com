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
   <title>Terry Bu - Personal Website | Music</title>
   <style>
    .track {
      margin-bottom: 1em;
    }
    button {
      margin-right: 10px;
    }
  </style>
</head>
<body>

    <div class="container">
        <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
        <?php include("_includes/gotSocial.php"); ?>
        <?php include("_includes/welcomeNav.php"); ?>
        <?php include("_includes/mainLandingLeftImage.php"); ?>

        <div id="bodyContent">
          <h1 style="color: #C63B3B; clear: both;">Music</h1>
          <h2>Terry Original Cover Songs Playlist</h2>

<div class="track">
  <button onclick="togglePlay(this)">Play</button>
  <span>love story</span>
  <audio src="music/lovestory.m4a"></audio>
</div>

<div class="track">
  <button onclick="togglePlay(this)">Play</button>
  <span>busker busker</span>
  <audio src="music/busker.m4a"></audio>
</div>

<div class="track">
  <button onclick="togglePlay(this)">Play</button>
  <span>isnt she lovely</span>
  <audio src="music/isntshe.m4a"></audio>
</div>

<div class="track">
  <button onclick="togglePlay(this)">Play</button>
  <span>radical dreamers chrono cross</span>
  <audio src="music/radical.m4a"></audio>
</div>

<div class="track">
  <button onclick="togglePlay(this)">Play</button>
  <span>shepherd of my soul sung by katie in Korean</span>
  <audio src="music/shepherd.mp3"></audio>
</div>

<div class="track">
  <button onclick="togglePlay(this)">Play</button>
  <span>motherland by crystal kay in Japanese sung by Katie</span>
  <audio src="music/motherland.mp3"></audio>
</div>

<div>
<h2>Terry's Smule Profile Link (I sang a lot of songs on that app)</h2>
<a href='https://www.smule.com/terrybu?utm_source=web&utm_campaign=share&utm_medium=copylink'>https://www.smule.com/terrybu?utm_source=web&utm_campaign=share&utm_medium=copylink</a>
</div>

<script>
  let currentlyPlaying = null;

  function togglePlay(button) {
    const audio = button.nextElementSibling.nextElementSibling;

    // If a different audio is currently playing, pause it
    if (currentlyPlaying && currentlyPlaying !== audio) {
      currentlyPlaying.pause();
      const oldBtn = currentlyPlaying.previousElementSibling.previousElementSibling;
      oldBtn.textContent = 'Play';
    }

    if (audio.paused) {
      audio.play();
      button.textContent = 'Pause';
      currentlyPlaying = audio;
    } else {
      audio.pause();
      button.textContent = 'Play';
      currentlyPlaying = null;
    }

    // Reset button text on audio end
    audio.onended = () => {
      button.textContent = 'Play';
      currentlyPlaying = null;
    };
  }
</script>

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
