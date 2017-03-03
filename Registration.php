<?php
    session_start();
    $_SESSION['message']='';
    $_SESSION['success']='';
    $_SESSION['verification']='';


    //connect to database

$db=mysqli_connect("localhost", "id217080_root","9808778653","id217080_registration");

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username=mysql_real_escape_string($_POST['username']);
        $password=mysql_real_escape_string($_POST['password']);
        $password2=mysql_real_escape_string($_POST['password2']);
        $email=mysql_real_escape_string($_POST['Email']);
        $hash = mysql_real_escape_string( md5( rand(0,1000) ) );
        
        $result = $db->query("SELECT * FROM users WHERE email='$email'");
        
        if ( $result->num_rows > 0 ) {
            $_SESSION['message'] = 'User with this email already exists!';
        }
        else{            
            if($password == $password2){
                //create database
                $password=md5($password2); //hash password security
                $sql= "INSERT INTO users(username, password, email, hash) VALUES('$username', '$password', '$email','$hash')";
                
                if($db->query($sql) === true){
                    $_SESSION['active'] = 0; //0 until user activates their account with verify.php
                    //$_SESSION['logged_in'] = true; // So we know the user has logged in
                    $_SESSION['success']= "Registration Successful!!! CLICK HERE";
                    $_SESSION['verification']="Confirmation link has been sent to <span>$email</span>, please verify your account by clicking on the link in the mail!";
                    
                    // Send registration confirmation link (verify.php)
        $subject = 'Nepalese In Photography(Account Verification)';
        $message_body = 'Hello '.$username.',
Thank you for signing up!
Please click this link to activate your account:

http://localhost/Project/Login/verify.php?email='.$email.'&hash='.$hash;  

        mail( $email, $subject, $message_body,"From:(binaya@admin.nip.com)" );

                }
                
                else{
                    $_SESSION['message']="Registration Failed!";
                }
                
            }
        
        else{
            //failed
            $_SESSION['message']= "Passwords do not match!!!";
        }
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Nepalese In Photograhy-Registration</title>
    
    <link rel="stylesheet" type="text/css" href="css/Registration.css?<?php echo time(); ?>"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/fader.js"></script>
    
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
        <div class="verify verify-success" onclick="this.style.display='none';
                                                      document.location.href='index.php'"><?=$_SESSION['verification']?></div>
        <div class="fader"></div>        
        <div class="header">
			<div>Nepalese In<span>Photography</span></div>
		</div>
		<br>
		<form action="Registration.php" method="POST" name="Registration" autocomplete="off">
		<div class="Registration">
				<input type="text" placeholder="Username" name="username" required><br>
				<input type="password" placeholder="Password" name="password" required><br>
            <input type="password" placeholder="Confirm Password" name="password2" required><br>

            <input type="email" placeholder="Email" name="Email" required><br>
				<input type="submit" id="register" class="register-btn" value="Register"/>
            </div> </form>
            
            <div class="alert alert-error" onclick="this.style.display='none';"><?=$_SESSION['message']?></div>
            <div class="alert alert-success" onclick="this.style.display='none';
                                                      document.location.href='index.php'"><?=$_SESSION['success']?></div>
    
    </div>
    </body>

</html>