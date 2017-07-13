<?php
session_start();
error_reporting( ~E_NOTICE );

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
    header("location:../home/AfterLogin.php");
}

if($_SESSION['logged_in']!=1){
	$_SESSION['Login']='LOGIN';
}

else{
	$_SESSION['Login']=$_SESSION['username'];
}

?>

<!DOCTYPE html>
<html>
    <head>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nepalese in Photography</title>
        <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time();?>">
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/background.js?<?php echo time();?>"></script>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
        
        <!-- link to icon packs -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
    </head>
        <body oncontextmenu="return false">
            <div id="loader-wrapper">
    	<div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>  
            <div class="preimages">
    <img src="img/bg1.jpg">
    <img src="img/bg2.jpg">
    <img src="img/bg3.jpg">
    <img src="img/bg4.jpg">
    <img src="img/bg5.jpg">
    <img src="img/bg6.jpg">
    <img src="img/bg8.jpg">
    <img src="img/bg9.jpg">
    <img src="img/bg10.jpg">
    <img src="img/bg11.jpg">
    <img src="img/bg12.jpg">
        </div> 
            <nav>
                <ul>
                    <li><a id="home" href="#homeSection">HOME</a></li>
                    <li><a id="cat" href="#catSection">CATEGORIES</a>
                      <ul class="drop-menu menu-1">
                          <li><a href="../Category/festivals.php">Festivals</a></li>                        
                          <li><a href="../Category/potraits.php">Potraits</a></li>                        
                          <li><a href="../Category/landscape.php">Landscape</a></li>                        
                          <li><a href="../Category/panoroma.php">Panoroma</a></li>                        
                          <li><a href="../Category/macro.php">Macro</a></li>                        
                      </ul>
                    </li><li><a id="tuto" href="#tutoSection">TUTORIALS</a>
                      <ul class="drop-menu menu-2">
                          <li><a href="../news/sem.php">Videos</a></li>                        
                          <li><a href="../news/tip.php">Tips</a></li>                                 
                      </ul>
                    </li>
                    <li><a id="event" href="#eventSection">NEWS &amp; EVENTS</a>
                      <ul class="drop-menu menu-3">
                          <li><a href="../news/news.php">Competetion</a></li>
                          <li><a href="../news/news.php">Programs</a></li>                        
                          <li><a href="../news/news.php">Festivals</a></li>                        
                          <li><a href="../news/news.php">Exhibition</a></li>                        
                          <li><a href="../news/news.php">Trending</a></li>                        
                          <li><a href="../news/news.php">Training Events</a></li>
                        </ul>
                        <li><a id="contact" href="#contactSection">CONTACT US</a></li>
                    <li><a href="../Login/index.php" class="log">LOGIN</a></li>
  </ul>
            </nav>
            
            
            <div id="homeSection" class="sect sectOne">
                <p><img src="http://cdn.mysitemyway.com/etc-mysitemyway/icons/legacy-previews/icons/magic-marker-icons-alphanumeric/114658-magic-marker-icon-alphanumeric-quote-open2.png"<br>Skill in Photography is Acquired by <br>
                    Practice, Not by Purchase.</p>
            </div>
            
            <div id="catSection" class="subSection">
                <p>categories</p>
                <div class="cate">
                      <a href="../Category/festivals.php">
                        <img src="img/bg2.jpg">
                      <div class="desc"><p>festivals</p></div>
                    </div></a> 
                <div class="cate">
                      <a href="../Category/potraits.php">
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/1c/51/39/1c5139c64d9c100487ffae78af8ef8ab.jpg">
                      <div class="desc"><p>potraits</p></div>
                    </div></a> 
                <div class="cate">
                      <a href="../Category/landscape.php">
                        <img src="https://italianrentalblog.files.wordpress.com/2013/05/119910377.jpg">
                      <div class="desc"><p>landscape</p></div>
                    </div></a>
                <div class="cate">
                      <a href="../Category/panoroma.php">
                        <img src="https://www.hfholidays.co.uk/media/cache/d8/11/d811c9222dbf8b53d3d6f519c695f1d6.jpg">
                      <div class="desc"><p>panoroma</p></div>
                    </div></a>
                <div class="cate">
                      <a href="../Category/macro.php">
                        <img src="http://t05.deviantart.net/0Ycbe3tUstNj_VS-socBl0ft48I=/300x200/filters:fixed_height(100,100):origin()/pre03/ea0b/th/pre/f/2014/321/f/5/o_o_by_marrgit-d86reyd.jpg">
                      <div class="desc"><p>macro</p></div>
                    </div></a>
            </div>
            
          <div class="sect sectTwo"></div>
            <div id="tutoSection" class="subSection">
               <a href="#"><p>tutorials</p></a>
                <div class="tuto">
                      <a href="../news/sem.php">
                        <img src="../home/img/video.png">
                      <div class="desc"><p>videos</p></div>
                    </div></a> 
                <div class="tuto">
                      <a href="../news/tip.php">
                        <img src="../home/img/tips.png" style="background-color:white;">
                      <div class="desc"><p>tips &amp; suggestions</p></div>
                    </div></a>
                
            </div>
            <div class="sect sectThree"></div>
            <div id="eventSection" class="subSection">
                 <a href="#"><p>news &amp; events</p></a>
                    <div class="news">
                          <a href="../news/news.php">
                            <img src="../home/img/competition.png">
                          <div class="desc"><p>competition</p></div>
                    </div></a>
                    <div class="news">
                          <a href="../news/news.php">
                            <img src="../home/img/pprogram.png">
                          <div class="desc"><p>programs</p></div>
                    </div></a>
                    <div class="news">
                          <a href="../news/news.php">
                            <img src="../home/img/festival.png">
                          <div class="desc"><p>festivals</p></div>
                    </div></a>
                    <div class="news">
                          <a href="../news/news.php">
                            <img src="../home/img/exhibition.png">
                          <div class="desc"><p>exhibition</p></div>
                    </div></a>
                    <div class="news">
                          <a href="../news/news.php">
                            <img src="../home/img/trending.png">
                          <div class="desc"><p>Trending</p></div>
                    </div></a>
                    <div class="news">
                          <a href="../news/news.php">
                            <img src="../home/img/seo-training.png">
                          <div class="desc"><p>Training</p></div>
                    </div></a>
            </div>
            <div class="sect sectFour"></div>
            <div id="contactSection" class="subSection">
                <p>Contact us</p><br>
                <form action="sendmail.php" method="post">

					<input type="email" name="email" placeholder="Your Email" required autocomplete="off" /><br>
					<textarea type="message" name="message" placeholder="Message" required autocomplete="off"></textarea><br>
					<button>Send</button>

				</form>
            </div>
            <div class="sect sectSix"></div>
            
            
            
           
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