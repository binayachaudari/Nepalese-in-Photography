<?php
 session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
    header("location:../home/AfterLogin.php");
}

$_SESSION['message']='';
//Escape username to prevent from SQL injection
$db=mysqli_connect("databases.000webhost.com", "id217080_root","9808778653","id217080_registration");

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $password=mysql_real_escape_string($_POST['pswrd']);
        $enc_password=md5($password);
        $username = mysql_real_escape_string($_POST['userid']);
        $result = $db->query("SELECT * FROM users WHERE email='$username'");
        $active = $db->query("SELECT * FROM users WHERE email='$username' AND active='1'");

if($result->num_rows == 0){
    $_SESSION['message']="User with that Email doesn't exist!";
}
        else if($active->num_rows==0){
			$_SESSION['message']="Your account hasn't been activated!!";
		}
        
		else{
		$user=$result->fetch_assoc();
		$db_username=$user['email'];
		$db_password=$user['password'];
        $profile=$user['username'];
    
    if(strcasecmp($username, $db_username)===0 && $enc_password==$db_password){
        $_SESSION['username']= $user['username'];
        $_SESSION['active']=$user['active'];
        
        $_SESSION['logged_in']= true;
        header('location: ../home/AfterLogin.php?profile='.$profile.'');

    }
    else{
        $_SESSION['message'] = "You have entered wrong password, try again!";
    }
}
    }
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Nepalese In Photograpy-Login</title>

<link rel="stylesheet" type="text/css" href="css/Login.css?<?php echo time(); ?>"/>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/fader.js?<?php echo time();?>"></script>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>

<body oncontextmenu="return false">
    
    <div class="cointainer-fluid">
    
<div id="loader-wrapper">
    	<div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>  
<div class="fader"></div>
        
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
		<div class="header">
			<div>Nepalese In<span>Photography</span></div>
		</div>
		<br>
		<form action="index.php" method="POST" name="login" autocomplete="off">
		<div class="login">
				<input type="email" placeholder="Email" name="userid" required><br>
				<input type="password" placeholder="Password" name="pswrd" required><br>
				<input type="submit" id="Login" class="LoginButton" value="Login"/>
		</div>
            </form>
    <div class="alert alert-error" onclick="this.style.display='none';"><?=$_SESSION['message']?></div>
        
<div class="registration">
            <div>Not Registered??</div>
            </div>
            
<a class="register" href="Registration.php">Click Here!!</a>

<a class="forgot" href="http://localhost/Project/Login/forgot.php">FORGOT PASSWORD???</a>
            
    </div>
</body>
</html>