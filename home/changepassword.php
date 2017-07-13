<?php
session_start();
$_SESSION['incorrect']='';
$_SESSION['Error']='';

$db=mysqli_connect("localhost","root","","registration");
$username=$_SESSION['Login'];

if( isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){  
    
}
else{
    header("location: index.php");
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
            $oldpass=md5(mysql_real_escape_string($_POST['oldpass']));
            $newpassword=mysql_real_escape_string($_POST['password']);
            $renewpassword=mysql_real_escape_string($_POST['repassword']);
            $result=$db->query("SELECT * FROM users WHERE username='$username'");
            $user=$result->fetch_assoc();
            $oldpassword=$user['password'];
            $useremail=$user['email'];
            
    if($oldpass == $oldpassword){
        if($newpassword == $renewpassword){
            $newpassword=md5($renewpassword);
            $sql = "UPDATE users SET password='$newpassword' WHERE email='$useremail'";
                if ($db->query($sql)){
                    $_SESSION['logged_in']=true;
                    header("location: AfterLogin.php");    
                    }
            else{
                $_SESSION['Error']="Unable to Change Your Password";
            }
        }
        else{
            $_SESSION['Error']="Two passwords didn't match!";
        }
    }
    else{
        $_SESSION['Error']="Incorrect Old Password";
    }

}

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Change Your Password</title>
  <?php include 'css/css.html'; ?>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
</head>

<body>
    <div class="form">

          <h1>Enter Your New Password</h1>
          
          <form action="changepassword.php" method="post">
              
          <div class="field-wrap">
            <input type="password" placeholder="Old Password" required name="oldpass" autocomplete="off"/><br><br>
            <input type="password" placeholder="Enter New  Password" required name="password" autocomplete="off"/>
            <input type="password" placeholder="Re-Enter New  Password" required name="repassword" autocomplete="off"/>
          </div>
              <div class="alert alert-error" onclick="this.style.display='none';"><?= $_SESSION['incorrect']?></div>
              <div class="alert alert-error" onclick="this.style.display='none';"><?= $_SESSION['Error'] ?></div>
        <br>   
          <button class="button button-block"/>Apply</button>
          </form>

    </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>
