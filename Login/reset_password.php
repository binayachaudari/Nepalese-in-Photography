<?php
/* Password reset process, updates database with new user password */

session_start();
$db=mysqli_connect("localhost","root","","registration");

// Make sure the form is being submitted with method="post"
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    // Make sure the two passwords match
    if ( $_POST['newpassword'] == $_POST['confirmpassword'] ) { 

        $new_password = md5(mysql_real_escape_string($_POST['confirmpassword']));
        
        // We get $_POST['email'] and $_POST['hash'] from the hidden input field of reset.php form
        $email = $db->escape_string($_POST['email']);
        $new_hash= mysql_real_escape_string(md5(rand(0,1000)));
        
        $sql = "UPDATE users SET password='$new_password', hash='$new_hash' WHERE email='$email'";

        if ($db->query($sql)){

        $_SESSION['message'] = "Your password has been reset successfully!";
        header("location: success.php");    

        }

    }
    else {
        $_SESSION['message'] = "Two passwords you entered don't match, try again!";
        header("location: error.php");    
    }

}
?>