    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php include ("_includes/standardHeadImports.php"); ?>
      <title>Terry Bu - Personal Website | Web Apps </title>
      <?php include_once("analyticstracking.php") ?>
    </head>
    <body>
      <?php include_once("analyticstracking.php") ?>
      <div class="container">
        <div id="browser"><p>*Optimal in 1920x1080 resolution/Chrome</p></div>
        <?php include("_includes/gotSocial.php"); ?>
        <?php include("_includes/welcomeNav.php"); ?>
      </div>
      <img src="_images/rubyonrails.png" id="headImageRails">

      <div id="bodyContent">
        <h1 style="color: #C63B3B">Web Application Development Work</h1>
        <div class="projectsDiv">
         <ul>
           <li>
             <h3>Nestle Waters - MEAN stack web application for Nestle internal employees to report safety issues. Implemented database model using MongoDB and Mongoose + server-side API routes and leveraged bower/npm for libraries such as Node Mailer for emailing and excel exporting capabilities.</h3>
             <br>
             <li><img src="_images/JS_Nestle.png"></li>
             <li><img src="_images/JS_Nestle2.png"></li>
           </li>
         </ul>
       </div>    
       <hr>  
       <div class="projectsDiv">
        <ul>
          <li>
            <h3><a href="https://www.carforo.com">CarForo</a>, an Angular/Flask web app that connects consumers with car dealerships to negotiate car purchases online (team of 4). Worked across AngularJS, Python Flask backend REST API and features like Facebook posting to pages using Facebook SDK. </h3>
            <a href="https://www.carforo.com" target="_blank"><img src="_images/carforo.png"></a>   
          </li>
        </ul>
      </div>

      <hr> 
      <div class="projectsDiv">
        <ul>
          <li>
            <h3>Helping non-profit organization (<a href="http://www.ourgoods.org">Ourgoods.org</a>) by rebuilding their Admin CMS interface through Rails migrations, model/database manipulation</h3>
            <br>
            <a href="_images/ourgoods1.png" target="_blank"><img src="_images/ourgoods1.png"></a> 
            <a href="_images/ourgoods2.png" target="_blank"><img src="_images/ourgoods2.png"></a>
          </li> 
          <li>
           <h3>Close 18 Github issue tickets using jQuery, Haml, Ruby and CSS for a Rails App. Push code and contribute through Git</h3>
           <br>
           <a href="_images/ourgoods3.png" target="_blank"><img src="_images/ourgoods3.png"></a>   
           <a href="_images/ourgoods4.png" target="_blank"><img src="_images/ourgoods4.png"></a>       
         </li>
       </ul>
     </div>
     <hr>
       <div class="projectsDiv">
        <ul>
          <li>
            <h3><a href="http://www.lifeandstylemag.com/" target="_blank">Bauer Media Life And Style Magazine</a>, Email development using HTML and Sailthru Zephyr</h3>
            <a href="http://www.lifeandstylemag.com/" target="_blank"><img src="_images/bauerEmail.png"></a>   
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
