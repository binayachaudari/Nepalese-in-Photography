<?php
	session_start();
	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'dbconfig.php';
	
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']!=true){
		header('location: ../home/index.php');
	}
else{
	$username=$_SESSION['Login'];
}

	if(isset($_GET['category']) && !empty($_GET['category'])){
		$category=$_SESSION['category'];
	}
	else{
		header('location: '. $_SERVER['HTTP_REFERER']);
	}
	
	if(isset($_POST['btnsave']))
	{
		$imagename = $_POST['image_name'];// Caption
		
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];

		
		if(empty($imagename)){
			$errMSG = "Please Enter Image Caption";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{
			$upload_dir = 'user_images/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 10000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO tbl_users(imagename,uploadedBy,userPic,category) VALUES(:uname, :ujob, :upic, :ucat)');
			$stmt->bindParam(':uname',$imagename);
			$stmt->bindParam(':ujob',$username);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':ucat',$category);
			
			if($stmt->execute())
			{
				$successMSG = "New image succesfully inserted ...";
			 // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}
?>


<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Potraits Upload Page-NIP</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
    
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
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


<div class="container">
<br><br>
	<div class="page-header">
    	<h1 class="h2">Add new Image:  <a class="btn btn-default" href="<?php echo $_SESSION['category']?>.php"> <span class="glyphicon glyphicon-sunglasses"></span> &nbsp; View All </a></h1>
    </div>
    

	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>   

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	    
	<table class="table table-bordered table-responsive">
	
    <tr>
    	<td><label class="control-label">Image Caption:</label></td>
        <td><input class="form-control" type="text" name="image_name" placeholder="Enter Your Image Caption" autocomplete="off" value="<?php echo $imagename; ?>" /></td>
    </tr>
   
    
    <tr>
    	<td><label class="control-label">Select an Image:</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-floppy-open"></span> &nbsp; Upload
        </button>
        </td>
    </tr>
    
    </table>
    
</form>
 
</div>

</body>
</html>