<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Logout</title>
  <?php include 'css/css.html'; ?>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
</head>

<body>
    <div class="form">
          <h1>Thanks for stopping by</h1>
              
          <p><?= 'You have been logged out!'; ?></p>
          
          <a href="../home/index.php"><button class="button button-block"/>Home</button></a>

    </div>
</body>
</html>
