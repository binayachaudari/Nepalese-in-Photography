<?php
session_start();
error_reporting( ~E_NOTICE ); // avoid notice
	require_once 'dbconfig.php';

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="tip.css?<?php echo time(); ?>">
    <link href="assets/animate.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link href="assets/style.css" rel="stylsheet">   
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
    
     <!-- Icon Packs -->
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
        <script src="assets/jquery.min.js" type="text/javascript"></script>
        <script src="assets/jquery.lettering.js" type="text/javascript"></script>
        <script src="assets/jquery.textillate.js" type="text/javascript"></script>
        <script src="assets/jquery.fittext.js" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css?family=Sansita|Ravi+Prakash|Courgette" rel="stylesheet"> 
        <title>NEPALESE IN PHOTOGRAPHY</title>

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
    
    <div class="img1" id="img1">
     <div class="lp">
         <span class="txt">TIPS AND SUGGESTIONS</span>
         <div class="lp1">
            <a href="#scroll"> 
                <span class="pic">PHOTOGRAPGY TIPS</span></a>
             <a href="#scroll1"> 
                <span class="pic">DSLR SETTINGS</span>
              </a>
         </div>
        </div>
    </div>
    
    <div style="background-color:black;padding:60px 60px;text-align:center;color:#777;opacity:0.9;">
        <div class="tip">
         <ul class="texts" style="display: none">
    <li>TIPS AND SUGGESTIONS</li>                          
    <li>WE RISE  </li>                           
    <li>YOU CANNOT TEACH A PERSON ANYTHING,</li>                          
    </ul>
        </div>
        
        <div class="tip1">
         <ul class="texts">
    <li>WE ARE HERE TO HELP YOU!</li>                   
    <li>BY LIFTING OTHERS.</li>                
    <li>YOU CAN ONLY HELP HIM FIND IT WITHIN HIMSELF.</li>                            
         </ul>
        </div>
     </div>
    
    
    <script type="text/javascript">                          
    $( document ).ready(function() {                            
    $('.txt').textillate({                            
    in: {                          
    effect: 'bounce',                         
    delayScale: 2,                           
    delay: 100,                           
    sync: false,                          
    shuffle: true                          
    },       
    out:{
    effect:'bounce'
    },
    loop: true                           
    });                       
    });                           
    </script>
    
    <script type="text/javascript">                        
    $( document ).ready(function() {                          
    $('.tip').textillate({                          
    in: {                         
    effect: 'fadeInLeft',                         
    delayScale: 2,                         
    delay: 80,                        
    sync: false,                       
    shuffle: true                      
    },
    out: {                       
    effect: 'fadeOutUp',                          
    shuffle: true,                            
    sync: false                           
    },                          
    loop: true                           
    });                         
    });
    
    </script>
    
    <script type="text/javascript">                          
    $( document ).ready(function() {                            
    $('.tip1').textillate({                            
    in: {                          
    effect: 'fadeInRight',                         
    delayScale: 1.5,                           
    delay: 80,                           
    sync: false,                          
    shuffle: true                          
    },                          
    out: {                          
    effect: 'fadeOutDown',                           
    shuffle: true,                          
    sync: false                           
    },                          
    loop: true                           
    });                       
    });          
        
    </script>
    
    
    <script type="text/javascript">                          
    $( document ).ready(function() {                            
    $('.pic').textillate({                            
    in: {                          
    effect: 'fadeInRight',                         
    delayScale: 1.5,                           
    delay: 80,                           
    sync: false,                          
    shuffle: true                          
    },                          
    out: {                          
    effect: 'flipOutX',                           
    shuffle: true,                          
    sync: false                           
    },                          
    loop: true                           
    });                       
    });                           
    </script>
    
    <div style="background-color:#48D1CC;padding:40px 40px;color:black;" id="scroll">
        <div class="marg">
          <div class="panel panel-default">
            <div class="panel-heading"><h4> PHOTOGRAPHY TIPS</h4> </div>
        </div>
        
        
  <div class="panel panel-default">
    <div class="panel-heading"><h3>1. Compose in Thirds</h3></div>
    <div class="panel-body"><p> use the rule of thirds, imagine four lines, two lying horizontally across the image and two vertical creating nine even squares. Some images will look best with the focal point in the center square, but placing the subject off center will often create a more aesthetically composed photograph. When a photograph is composed using the rule of thirds the eyes will wander the frame. A picture composed by the rule of thirds is more interesting and pleasing to the eye.</p></div>
      
      <div class="panel-heading"><h3>2.Avoid Camera Shake</h3></div>
      <div class="panel-body"><p>Camera shake or blur is something that can plague any photographer and here are some ways to avoid it. First, you need to learn how to hold your camera properly; use both hands, one around the body and one around the lens and hold the camera close to your body for support. Also make sure you are using a shutter speed that matches the lens focal length. So if you’re using a 100mm lens, then your shutter speed should be no lower than 1/100th of a second. Use a tripod or monopod whenever possible. In lieu of this, use a tree or a wall to stabilize the camera.</p></div>
      
      <div class="panel-heading"><h3>3.The Sunny 16 Rule</h3></div>
    <div class="panel-body"><p>The idea with the Sunny 16 rule is that we can use it to predict how to meter our camera on a sunny outdoor day. So when in that situation, choose an aperture of f/16 and 1/100th of a second shutter speed (provided you are using ISO 100). You should have a sharp image that is neither under or over exposed. This rule is useful if you don’t have a functioning light meter or if your camera doesn’t have an LCD screen to review the image.</p></div>
      
      <div class="panel-heading"><h3>4.Use a Polarizing Filter</h3></div>
    <div class="panel-body">
        <p>If you can only buy one filter for your lens, make it a polarizer. This filter helps reduce reflections from water as well as metal and glass; it improves the colors of the sky and foliage, and it will protect your lens too. There’s no reason why you can’t leave it on for all of your photography. The recommended kind of polarizer is circular because these allow your camera to use TTL (through the lens) metering (i.e. Auto exposure).</p></div>
      
      <div class="panel-heading"><h3>5.Create a Sense of Depth</h3></div>
    <div class="panel-body"><p>When photographing landscapes it really helps to create a sense of depth, in other words, make the viewer feel like they are there. Use a wide-angle lens for a panoramic view and a small aperture of f/16 or smaller to keep the foreground and background sharp. Placing an object or person in the foreground helps give a sense of scale and emphasizes how far away the distance is. Use a tripod if possible, as a small aperture usually requires a slower shutter speed.</p>
</div>
         
        </div>
    </div>
    </div>
    
    <div class="img2">
   </div>
    
    <div style="background-color:#48D1CC;color:black;padding:40px 40px;" id="scroll1">
        
        <div class="marg">
          <div class="panel panel-default">
            <div class="panel-heading"><h4>DSLR SETTINGS</h4> </div>
        </div>
            
            <div class="panel panel-default">
                
    <div class="panel-heading"><h3>1. Aperture</h3></div>
            <div class="panel-body"><p> Aperture controls the amount of light that enters the camera through the iris in the lens.These amounts are represented by "f-stops," and a large aperture is represented by a smaller number. So, for instance, f/2 is a large aperture and f/22 is a small aperture. Learning about aperture is an important aspect of advanced photography.However, aperture also controls depth of field. Depth of field refers to how much of the image surrounding and behind the subject is in focus. A small depth of field is represented by a small number, so f2 would give a photographer a small depth of field, while f/22 would give a large depth of field.</p></div>
      
      <div class="panel-heading"><h3>2.Shutter speed</h3></div>
            <div class="panel-body"><p>Shutter speed controls the amount of light entering your camera through its mirror -- i.e., through the hole in the camera, as opposed to the lens.DSLRs allow users to set the shutter speed from settings of around 1/4000th of a second through about 30 seconds ... and on some models "Bulb," which allows the photographer to keep the shutter open for as long as they choose. Photographers use fast shutter speeds to freeze action, and they use slow shutter speeds at night to allow more light into the camera</p></div>
      
      <div class="panel-heading"><h3>3.ISO</h3></div>
             <div class="panel-body"><p>ISO refers to the camera's sensitivity to light, and it has its origins in film photography, where different speeds of film had different sensitivities.ISO settings on digital cameras typically range from 100 to 6400. Higher ISO settings allow more light into the camera, and they allow the user to shoot in low light situations. But the trade-off is that, at higher ISOs, the image will start to show noticeable noise and grain.ISO should always be the last thing that you change, because noise is not desirable! Leave your ISO on its lowest setting as a default, only changing it when absolutely necessary.</p></div>
      
      <div class="panel-heading"><h3>4.Turn off the flash</h3></div>
            <div class="panel-body"><p>If you leave your camera in Auto mode, it will try to fire the pop-up flash to compensate for the low light. All this will achieve is an "over-lit" foreground, with a background that's been plunged into darkness.Using any of the other camera modes will negate this problem.</p></div>
      
      <div class="panel-heading"><h3>5. Use the tripod</h3></div>
            <div class="panel-body"><p>You will need to use long exposures to get great nighttime shots and that means that you will need a tripod.If your tripod is a bit flimsy, hang a heavy bag from the center section to keep it from blowing around in the wind. Even the slightest amount of wind can shake the tripod while exposing and you may not be able to see a soft blur on the LCD screen. Err on the side of caution.</p></div>
                
        <div class="panel-heading"><h3>6.Use the self-timer </h3></div>
            <div class="panel-body"><p>Just pressing the shutter button can cause camera shake, even with a tripod. Use your camera's self-timer function, in conjunction with the mirror lock-up function (if you have this on your DSLR) to prevent blurry photos.A shutter release or remote trigger is another option and a good investment for any photographer who takes long exposures on a regular basis. Be sure to purchase one that is dedicated to your model of camera</p></div>
                
        <div class="panel-heading"><h3>7.Use a long exposure </h3></div>
            <div class="panel-body"><p>To create great nighttime shots, you need to allow the dim ambient light to sufficiently reach the image sensor and this will require a long exposure.A minimum of 30 seconds is a good place to begin and the exposure can be extended from there if necessary. At 30 seconds, any moving lit objects in your shot, such as cars, will be transformed into stylish trails of light.If the exposure is very long, then it may be out of your camera's range of shutter speeds. Many DSLRs can go as long as 30 seconds, but that may be it. If you need a longer exposure, use the 'bulb' (B) setting. This will allow you to keep the shutter open as long as the shutter button is pressed. A shutter release is essential for this and they typically include a lock so you do not have to actually hold the button the entire time (just don't loose it in the dark!).</p></div>
         
        </div>
        </div>
    </div>
    
    <div class="img3">
    <div class="lp">
        <a href="#img1">
        <span class="txt">HOPE IT WAS HELPFUL!</span></a>
        </div>
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