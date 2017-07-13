<?php
session_start();
$_SESSION['incorrect']='';
$_SESSION['Error']='';
$_SESSION['message']='';

$db=mysqli_connect("localhost","root","","registration");
$username=$_SESSION['Login'];

    
if( isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){  
    
}
else{
    header("location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $pass=mysql_real_escape_string($_POST['password']);
    $enc_password=md5($pass);
    $result=$db->query("SELECT * FROM users WHERE username='$username'");
    $user=$result->fetch_assoc();
    $password=$user['password'];
    $email=$user['email'];
    
    if($enc_password == $password){
        $new_username=mysql_real_escape_string($_POST['newusername']);
        $profile=$new_username;
        $sql = "UPDATE users SET username='$new_username' WHERE email='$email'";
            
        if ($db->query($sql)){
            $_SESSION['logged_in']=true;
        header("location: AfterLogin.php?profile=$profile");    
    }
    }
    else{
        $_SESSION['incorrect']="Invalid Password!";
    }
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Change Your Username</title>
  <?php include 'css/css.html'; ?>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
</head>

<body>
    <div class="form">

          <h1>Choose Your New Username</h1>
          
          <form action="changeusername.php" method="post">
              
          <div class="field-wrap">
            <input type="text" placeholder="Your New Username" required name="newusername" autocomplete="off"/>
            <input type="password" placeholder="Enter your Password" required name="password" autocomplete="off"/>
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
