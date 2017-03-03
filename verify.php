<?php 
/* Verifies registered user email, the link to this page
   is included in the register.php email message 
*/

session_start();
$db=mysqli_connect("localhost", "id217080_root","9808778653","id217080_registration");


// Make sure email and hash variables aren't empty
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
{
    $email = $db->escape_string($_GET['email']); 
    $hash = $db->escape_string($_GET['hash']); 
    $new_hash= mysql_real_escape_string(md5(rand(0,1000)));
    
    // Select user with matching email and hash, who hasn't verified their account yet (active = 0)
    $result = $db->query("SELECT * FROM users WHERE email='$email' AND hash='$hash' AND active='0'");

    if ( $result->num_rows == 0 )
    { 
        $_SESSION['message'] = "The URL is INVALID! or Account has already been activated!";

        header("location: error.php");
    }
    else {
        $_SESSION['message'] = "Your account has been activated!";
        
        // Set the user status to active (active = 1)
        $db->query("UPDATE users SET active='1' , hash='$new_hash' WHERE email='$email'") or die($db->error);
        $_SESSION['active'] = 1;
        
        header("location: success.php");
    }
}
else {
    $_SESSION['message'] = "Invalid parameters provided for account verification!";
    header("location: error.php");
}     
?>
