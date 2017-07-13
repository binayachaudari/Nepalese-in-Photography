<?php
	session_start();
	require_once 'dbconfig.php';
	
	if($_SESSION['logged_in']==1){

        $username=$_SESSION['Login'];
    }

else{
	header('location: ../home/index.php');
}


            if(isset($_GET['delete_id']))
	{
		// select image from db to delete
		$stmt_select = $DB_con->prepare('SELECT userPic FROM tbl_users WHERE imageID =:uid');
		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("user_images/".$imgRow['userPic']);
		
		// it will delete an actual record from db
		$stmt_delete = $DB_con->prepare('DELETE FROM tbl_users WHERE imageID =:uid');
		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: Portfolio.php");
	}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<title>My Portfolio</title>
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

	<div class="page-header">
    	<h1 class="h2">My Uploaded Photos</h1> 
    </div>

<br />

<div class="row">
<?php
	
	$stmt = $DB_con->prepare("SELECT * FROM tbl_users WHERE uploadedBy='$username' ORDER BY imageID DESC");
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
                    <span>
				<a class="btn btn-info" href="editform.php?edit_id=<?php echo $row['imageID']; ?>" title="click for edit" onclick="return confirm('Are you sure want to edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
				<a class="btn btn-danger" href="Portfolio.php?delete_id=<?php echo $row['imageID']; ?>" title="click for delete" onclick="return confirm('Are you sure want to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
				</span>
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

  
</body>
</html>