<?php
session_start();
error_reporting( ~E_NOTICE ); // avoid notice
	require_once 'dbconfig.php';

?>

<!DOCTYPE html>
<html>
<head>    
    <link rel="stylesheet" href="css/bootstrap.min.css">
          <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="sem.css?<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <meta charset="utf-8">
  

    <link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Tangerine">
    
     <!-- Icon Packs -->
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="sem.js"></script>
  <title>NEPALESE IN PHOTOGRAPHY</title>
    
		<script>
		/* first carousel slidesshow */
		$('#mycarousel-1').carousel({
		  pause: "hover",
		  keyboard: true
		});
		
		/* second carousel slidesshow */
		$('#mycarousel').carousel({
		   keyboard: true
		});
		</script>
    
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
    
<div class="img1">
  <div class="caption">
    <span class="border">SCROLL DOWN</span>
  </div>
</div>

<div style="color: #444;background-color:#74AFAD;text-align:center;padding:50px 80px;">
  
    <h3 style="text-align:center;color:#A0522D;font-family:tangerine;font-size:50px;">Photography tutorial</h3>
    <p style="text-align: justify;font-family:courgette;font-size:19px;">The photo tutorials on this site will help you turn your 'snaps' into photographs to be proud of that will delight your viewers rather than bore them to death.If you are new to photography and are just looking for some basic photography tutorials, I recommend you read Photography Tips for Beginners. This page will give you some really basic digital photography tips to get you started and hopefully give you a thirst for more knowledge.</p>
    
</div>

<div class="img2">
  <div class="caption">
    <div id="myCarousel-1" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel-1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel-1" data-slide-to="1"></li>
      <li data-target="#myCarousel-1" data-slide-to="2"></li>
      <li data-target="#myCarousel-1" data-slide-to="3"></li>
      <li data-target="#myCarousel-1" data-slide-to="4"></li>
      <li data-target="#myCarousel-1" data-slide-to="5"></li>
      <li data-target="#myCarousel-1" data-slide-to="6"></li>
      <li data-target="#myCarousel-1" data-slide-to="7"></li>
      <li data-target="#myCarousel-1" data-slide-to="8"></li>
      <li data-target="#myCarousel-1" data-slide-to="9"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
           <iframe width="600" height="300"  src="https://www.youtube.com/embed/6_B8pVoANyY?enablejsapi=1&amp;" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="item">
          <iframe width="600" height="300" src="https://www.youtube.com/embed/NVCglwSB-rQ?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
        <iframe width="600" height="300" src="https://www.youtube.com/embed/_10qnAqkK20?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
        <iframe width="600" height="300" src="https://www.youtube.com/embed/7Oueq5wIShc?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
          <iframe width="600" height="300" src="https://www.youtube.com/embed/3f5jiFd0ZrI?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
         <iframe width="600" height="300" src="https://www.youtube.com/embed/G60VlLsmCUs?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
          <iframe width="600" height="300" src="https://www.youtube.com/embed/JUtrNJN_4zY?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
      <iframe width="600" height="300" src="https://www.youtube.com/embed/22gsEmjvqLs?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
        <iframe width="600" height="300" src="https://www.youtube.com/embed/_kC1nKlIPU0?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
        <iframe width="600" height="300" src="https://www.youtube.com/embed/YmVUSro_FNA?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel-1" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel-1" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
  </div>
   
    
  <div style="color:#F5FFFA;background-color:#66CDAA;text-align:center;padding:50px 80px;">
     
      <h3 style="text-align:center;color:#00008B;font-family:tangerine;font-size:50px;">Photoshop tutorial</h3>
      <p style="text-align: justify;font-family:courgette;font-size:19px;">Photoshop is the most versatile software for art, design and photography. You can seamlessly compositing disparate elements into a beautiful photomontage or make your photos look even more stunning (or turn those photos into vector portraits). You can directly draw and paint beautiful artworks – or digitally colour works drawn on paper and scanned in. Or you can mock-up websites and apps with ease.</p>
  </div>



<div class="img3">
  <div class="caption">
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
      <li data-target="#myCarousel" data-slide-to="9"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
     <iframe width="600" height="300" src="https://www.youtube.com/embed/pFyOznL9UvA?ecver=1" frameborder="0" allowfullscreen></iframe>
        </div>
  
      <div class="item">
          <iframe width="600" height="300" src="https://www.youtube.com/embed/QnpDy8zlmv8?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
       <iframe width="600" height="300" src="https://www.youtube.com/embed/ifG1SDxqpAQ?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
        <iframe width="600" height="300" src="https://www.youtube.com/embed/GPvWcJ_pUc8?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
          <iframe width="600" height="300" src="https://www.youtube.com/embed/RTDXVr1P-Yo?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
         <iframe width="600" height="300" src="https://www.youtube.com/embed/yqKHo1Q7OMc?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
         <iframe width="600" height="300" src="https://www.youtube.com/embed/6p7t-FGOb9Y?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
          <iframe width="600" height="300" src="https://www.youtube.com/embed/4xgOWWfurpU?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
         <iframe width="600" height="300" src="https://www.youtube.com/embed/Mbf-QXCCXgM?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
        
      <div class="item">
        <iframe width="600" height="300" src="https://www.youtube.com/embed/XnzGFtUevts?ecver=1" frameborder="0" allowfullscreen></iframe>
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    </a>
  </div>
</div>
        
</div>


<div class="img1">
  <div class="caption">
    <span class="border">THANK YOU!</span>
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
    
</body>
</html>