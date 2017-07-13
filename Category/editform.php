<?php
    session_start();
	error_reporting( ~E_NOTICE );
	
	require_once 'dbconfig.php';

if($_SESSION['logged_in']==1){

        $username=$_SESSION['Login'];
    }

else{
	header('location: ../home/index.php');
}
	
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM tbl_users WHERE imageID =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: Portfolio.php");
	}
	
	
	
	if(isset($_POST['btn_save_updates']))
	{
		$imagename = $_POST['image_name'];// user name
			
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
					
		if($imgFile)
		{
			$upload_dir = 'user_images/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$userpic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 10000000)
				{
					unlink($upload_dir.$edit_row['userPic']);
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}	
		}
		else
		{
			// if no image selected the old image remain as it is.
			$userpic = $edit_row['userPic']; // old image from database
		}	
						
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('UPDATE tbl_users 
									     SET imagename=:uname, 
										     uploadedBy=:ujob, 
										     userPic=:upic 
								       WHERE imageID=:uid');
			$stmt->bindParam(':uname',$imagename);
			$stmt->bindParam(':ujob',$username);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':uid',$id);
				
			if($stmt->execute()){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='Portfolio.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Be Updated !";
			}
		
		}
		
						
	}
	
?>


<html>
    
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload, Insert, Update, Delete an Image </title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

<!-- custom stylesheet -->
<link rel="stylesheet" href="style.css">

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
</head>
<body>



<div class="container">


	<div class="page-header">
    	<h1 class="h2">Update Image Information <a class="btn btn-default" href="Portfolio.php"> My Uploaded Photos</a></h1>
    </div>

<div class="clearfix"></div>

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
    
    <?php
	if(isset($errMSG)){
		?>
        <div class="alert alert-danger">
          <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?>
        </div>
        <?php
	}
	?>
   
    
	<table class="table table-bordered table-responsive">
	
    <tr>
    	<td><label class="control-label">Photo Caption:</label></td>
        <td><input class="form-control" type="text" name="image_name" value="<?php echo $imagename; ?>" required /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Select New Image</label></td>
        <td>
        	<p><img src="user_images/<?php echo $userPic; ?>" class="col-xs-3 img-thumbnail" /></p>
        	<input class="input-group" type="file" name="user_image" accept="image/*" />
        </td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-default">
        <span class="glyphicon glyphicon-upload"></span> Update
        </button>
        
        <a class="btn btn-default" href="Portfolio.php"> <span class="glyphicon glyphicon-backward"></span> cancel </a>
        
        </td>
    </tr>
    
    </table>
    
</form>


</div>
</body>
</html>