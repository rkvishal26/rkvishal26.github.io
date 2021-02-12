<?php
 session_start();
header('location:cv.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
    <a href="logout.php">Logout</a>
 	<h1>welcome <?php echo $_SESSION['username']; ?></h1>



 
 </body>
 </html>
