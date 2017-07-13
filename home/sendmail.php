<?php
session_start();

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     $inputmail=mysql_real_escape_string($_POST['email']);
     $message=mysql_real_escape_string($_POST['message']);
     
     $to='binayachaudari@icloud.com';
      $subject = 'SUBSCRIPTION';
        $message_body = 'SEND FROM:-'.$inputmail.',

Message:-'.$message.'';  

        mail( $to, $subject, $message_body,"From:'$inputmail'" );
     
     header("location: ". $_SERVER['HTTP_REFERER']);
 }


?>