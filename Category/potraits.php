<?php
	session_start();
    error_reporting( ~E_NOTICE ); // avoid notice
	require_once 'dbconfig.php';
	$_SESSION['category']='potraits';
		
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<title>NIP-Potraits</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css?<?php echo time;?>">
<!-- Icon Packs -->
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
 
<link rel="stylesheet" href="css/lightbox.css"> 
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">    
<script src="js/lightbox.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
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
                          <li><a href="festivals.php">Festivals</a></li>                        
                          <li><a href="potraits.php">Potraits</a></li>                        
                          <li><a href="landscape.php">Landscape</a></li>                        
                          <li><a href="panoroma.php">Panoroma</a></li>                        
                          <li><a href="macro.php">Macro</a></li>                        
                      </ul>
                    </li>
                    <li><a id="tuto" href="#tutoSection">TUTORIALS</a>
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

			<p><br><br></p>
<div class="container">

	<?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){?>
	<div class="page-header">
    	<h1 class="h2">Potraits <a class="btn btn-default" href="addnew.php?category=<?php echo $_SESSION['category']?>"> <span class="glyphicon glyphicon-plus"></span> &nbsp; Add new </a></h1> 
    </div>
    <?php } else{ ?>
		<h1 class="h2"> Potraits </h1>
	<?php } ?>
<br />

<div class="row">
<?php
	
	$stmt = $DB_con->prepare('SELECT imageID, imagename, uploadedBy, userPic FROM tbl_users WHERE category="potraits" ORDER BY imageID DESC');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<div class="col-xs-3">
				<p class="page-header"><?php echo $imagename."&nbsp;/&nbsp;".$uploadedBy; ?></p>
				<a href="user_images/<?php echo $row['userPic']; ?>" data-lightbox="image-1" data-title="Caption: <?php echo $imagename; ?><br>Uploaded By: <?php echo $uploadedBy; ?><br>"><img src="user_images/<?php echo $row['userPic']; ?>" class="img-thumbnail"/></a>
				<p class="page-header">
				</p>
			</div>       
			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	}
	
?>
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