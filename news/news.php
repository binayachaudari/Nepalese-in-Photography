<?php
session_start();
error_reporting( ~E_NOTICE ); // avoid notice
	require_once 'dbconfig.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>NEPALESE IN PHOTOGRAPHY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link rel="stylesheet" href="news.css?<?php echo time(); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

    <link href="assets/animate.css" rel="stylesheet">
    <link href="assets/style.css?<?php echo time();?>" rel="stylsheet">
        <script type="text/javascript" src="sem.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Icon Packs -->
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">    
        <script src="js/bootstrap.min.js"></script>
        <script src="assets/jquery.lettering.js" type="text/javascript"></script>
        <script src="assets/jquery.textillate.js" type="text/javascript"></script>
        <script src="assets/jquery.fittext.js" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope|Berkshire+Swash|Courgette|Grand+Hotel|Oregano|Rochester" rel="stylesheet">
          
          </head>

<body>
    
    <nav>
                <ul>
				<?php if($_SESSION['logged_in']==1){?>
                    <li><a id="home" href="../home/AfterLogin.php">HOME</a></li>
				<?php } else{?>
					<li><a id="home" href="../home/index.php">HOME</a></li>
				<?php } ?>
				
                    <li><a id="cat" href="#catSection">CATEGORIES</a>
                      <ul class="drop-menu menu-1">
                          <li><a href="../Category/festivals.php">Festivals</a></li>                        
                          <li><a href="../Category/potraits.php">Potraits</a></li>                        
                          <li><a href="../Category/landscape.php">Landscape</a></li>                        
                          <li><a href="../Category/panoroma.php">Panoroma</a></li>                        
                          <li><a href="../Category/macro.php">Macro</a></li>                        
                      </ul>
                    </li>
                    <li><a id="tuto" href="#tutoSection">TUTORIALS</a>
                      <ul class="drop-menu menu-2">
                          <li><a href="sem.php">Videos</a></li>                        
                          <li><a href="tip.php">Tips</a></li>                                 
                      </ul>
                    </li>
                    <li><a id="event" href="news.php">NEWS &amp; EVENTS</a>
                      <ul class="drop-menu menu-3">
                          <li><a href="news.php">Competetion</a></li>
                          <li><a href="news.php">Programs</a></li>                        
                          <li><a href="news.php">Festivals</a></li>                        
                          <li><a href="news.php">Exhibition</a></li>                        
                          <li><a href="news.php">Trending</a></li>                        
                          <li><a href="news.php">Training Events</a></li>
                        </ul>
                        <li><a id="contact" href="#contactSection">CONTACT US</a></li>
                   
                    <?php if($_SESSION['logged_in']==1){?>
                    <li><a href="#" class="logged"><?=$_SESSION['Login']?></a>
                    <ul class="drop-menu menu-5">
                        <li><a href="Portfolio.php">Portfolio</a></li>                        
                        <li><a href="../home/changeusername.php">Change Username</a></li>                        
                        <li><a href="../home/changepassword.php">Change Password</a></li>                        
                        <li><a href="../Login/logout.php">Logout</a></li>                        
                        </ul>
                    </li>
				<?php } else{?>
                    <li><a href="../Login/index.php" class="log">LOGIN</a></li>
				<?php } ?>     
                    
                    
  </ul>
            </nav>
    
    
    <div class="img1" id="scroll3">
     <div class="pic">
         <span class="txt">NEWS AND EVENTS</span>
         <div class="pic1">
            <a href="#scroll"> 
                <span class="pic2">PHOTOGRAPGY COMPETETION</span></a>
             <a href="#scroll1"> 
                <span class="pic2">FESTIVALS</span>
              </a>
             <a href="#scroll2"> 
                <span class="pic2">PHOTOGRAPHY EXHIBITION</span>
              </a>
         </div>
        </div>
    </div>
    
    
    <div style="background-color:#48D1CC;color:black;padding:40px 40px;opacity:0.85;" id="scroll">
        <div class="panel panel-default">
    <div class="panel-heading">COMPETITION SLOGAN</div>
    <div class="panel-body"  style="max-height: 10;">“The best thing about a picture is that it never changes, even when the people in it do.”
</div>
  </div>

   <div class="panel panel-default">
       <div class="panel-heading">Open Photography Competition</div>
              <div class="panel-body1">
            <p>  Open photography competition is a pre-event of 10th National ASA Architecture Exhibition. The theme for the compitition this year is 'Life in Slum'.</p>
         <p>  The three categories of the competition are:</p>
         <p>1.Photography Competition</p> 
         <p>2.Photostory Competition</p>
         <p>3.Videography Competition</p>
         <p>- Any professional or amateur photographers/videographers, media practitioners or students of all ages can participate in the competition.</p>
         <p>- All the photographs/videographs must be taken within Nepal</p>   
         <p>- Winners of each categories will be awarded NRS 10,000 and a winner's certificate. </p>
            </div>
            <div class="panel-footer">
          <h4>DEADLINE:january 21</h4>
         <h4>TIME:11:00 am onward Friday June 10, 2017</h4>
         <h4>PLACE: KATHMANDU UNIVERSITY</h4>
       </div>

        </div>
    </div>
    
    
    <script>                          
    $( document ).ready(function() {                            
    $('.txt').textillate({                            
    in: {                          
    effect: 'bounceIn',                         
    delayScale: 1,                           
    delay: 50,                           
    sync: false,                          
    shuffle: true                          
    },       
    out:{
    effect:'bounceOut'
    },
    loop: true                           
    });                       
    });                           
    </script>
    
    <script>                          
    $( document ).ready(function() {                            
    $('.panel-body').textillate({                            
    in: {                          
    effect: 'fadeInLeft',                         
    delayScale: 2,                           
    delay: 50,                           
    sync: false,                          
    shuffle: true                          
    },       
    out:{
    effect:'fadeOutRight'
    },
    loop: true                           
    });                       
    });                           
    </script>
    
    
    
    <div class="img2"></div>
    
     <div style="background-color:#48D1CC;color:black;padding:40px 40px;opacity:0.85;text-align:justify;" id="scroll1">
  <div class="panel panel-default">
          <div class="panel-heading">RECENT FESTIVALS</div>
        <div class="panel-body"  style="max-height: 10;">"Happy new year to all of us. may this year be full of love and happiness.”
      </div>
         </div>
           <div class="panel panel-default">
              <div class="panel-heading">BISKET JATRA</div>
                 <div class="panel-body1">
         <p>  Bisket Jatra is an annual event in Bhaktapur, Madhyapur Thimi, Dhapasi and Tokha in Nepal. This festival is celebrated at the start of the new year on the Bikram Sambat calendar, however, the festival it self is not related to Bikram Sambat.Legend has it that this celebration is the "festival after the death of the serpent". Numerous areas of Bhaktapur city celebrate this festival according to their own ritual. The most eventful places in the course of the festival are Bhaktapur Durbar Square and Thimi Balkumari. A huge chariot carrying a statue of the God Bhairava is pulled by hundreds of people to the Khalna Tole. Approximately a month earlier, the chariot is assembled near the Nyatapole temple (five stair temple). The most spectacular event on Bhaktapur Durbar square is a huge tug-of-war between the eastern and western part of town. Each team tries to pull to their side but later the chariot heads toward Khalna Tole. A huge approximately 25 meters Yoh si (lingo) is erected in the stone called yoni (female genital) base. In the evening of New Year, the Yoh si is pulled down as the New Year officially commences.</p>
         <p>Another part of Bhaktapur called Balkumari Thimi has very spectacular color festival (Sindur Jatra). Folks from various parts of Madhyapur Thimi gather, carrying their own chariots in Layeku Thimi. People celebrate and share greeting throwing simrik color powder, playing Dhimay music. A place called Bode witnesses a tongue-piercing ceremony. One of a resident spend whole day with iron spike piercing in his tongue and roams different part of city by carrying multiple fire torch on shoulder. Juju Bhai Shrestha is the most renown and frequent tongue piercer in the town.</p>
               </div>
          <div class="panel-footer">
         <h4>DATE:Baisakh 1 and 2</h4>
         <h4>Please visit Bhaktapur to capture moments in your camera ! and also to enjoy and your develop photography skills.</h4>
         <h4>For more information plz visit:
             <a href="http://www.bhaktapur.com">bhaktapur.com</a></h4>
               </div>
         </div>
         </div>
    
    
<div class="img5">
    
<div class="sam">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/bisk.jpg" width="600" height="400">
      </div>

      <div class="item">
        <img src="images/bisk1.png"  width="600px" height="400px">
      </div>
    
      <div class="item">
        <img src="images/bisk2.jpg" width="600px" height="400px">
      </div>

      <div class="item">
        <img src="images/bisk3.jpg" width="600" height="400">
      </div>
        
        
      <div class="item">
        <img src="images/bisk4.jpg" width="600" height="400">
      </div>
        
        
      <div class="item">
        <img src="images/bisk5.jpg" width="600" height="400">
      </div>
        
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    
  <div class="panel panel-default">
    <div class="panel-heading">Some glimpse of Bisket jatra</div>
    </div>
</div>
    </div>
    
      <div style="background-color:#48D1CC;color:black;padding:40px 40px;opacity:0.85;text-align:justify;" id="scroll2">
          
          <div class="panel panel-default">
              <div class="panel-heading">PHOTOGRAPHY EXHIBITION :- 'Life on the Streets: Untold Stories, Unheard Voices'</div>
              <div class="panel-body"  style="max-height: 10;">"Art isnot what you see but what you make others see.”
      </div>
         </div>
          
        <div class="panel panel-default">
            <div class="panel-body1">
            <p>A two day photo exhibition based on the life of street children titled 'Life on the Streets: Untold Stories, Unheard Voices' is going to be held in Kathmandu. The photos will be taken by Seth Ostrowski(photojournalism intern) from, Alaska, USA and is sponsored by SAHARA Nepal, a non-profit organization. It will be inaugurated by Mrs. Bindra Hada Bhattarai, the Secretary of Ministry of Women, Children and Social Welfare in Nepal.A 20 minutes documentary on the same topic prepared by Jonathan Libeling, (documentary film intern) From USA, will also be presented at the inaugural ceremony . </p></div>
        <div class="panel-footer">
            <h4>DATE:January 22 and 23</h4>    
            <h4>PLACE:Kathmandu</h4>
              <h4>FOR MORE INFO:
                  <a href="http://www.photoktm.com">Photoktm.com</a></h4>
            </div>
          </div>
          </div>

    
    <div class="img4">
        <div class="pic">
            <a href="#scroll3">
                </a></div>
    </div>
     <footer class="footer-distributed">

			<div class="footer-left">

				<h3>Nepalese in<span> Photography</span></h3><br>
                
                <p class="footer-Developer">Developed By:-<span><br><a href="https://www.facebook.com/binayachaudari">Binaya Kumar Chaudhary</a><span><br><a href="https://www.facebook.com/prabishkayastha">Prabish Kayastha</a><span><br><a href="https://www.facebook.com/uwjol.lakhaju">Ujwal Lakhaju</a><span><br><a href="">Sumit Luitel</a></span></span></span></span></p>
					
				<p class="footer-company-name">Copyright &copy; 2016. All Rights Reserved.</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Kathmandu University</span>Dhulikhel, Kavre</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&source=mailto&su=Automatic%20Mail%20system&to=binayachaudari@icloud.com">support@nip.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the Website</span>This is a photography website, Share your Best Shots..				
				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/groups/Nepalese.In.Photography/"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/__Binaya__"><i class="fa fa-twitter"></i></a>
					<a href="https://www.linkedin.com/in/binaya-chaudhary-36230380/"><i class="fa fa-linkedin"></i></a>
					<a href="https://github.com/binayachaudari"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

    
        
<script>
$(document).ready(function(){
  $("a").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 700, function(){
   
        window.location.hash = hash;
      });
    } 
  });
});
</script>
    
    
    </body>
</html>