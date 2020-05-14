<?php
session_start();
?>
<!DOCTYPE HTML>

<html>
   <head>
      <title>Welcome </title>
      <style>
       h1 {

        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;

        font-size: 40pt;
      }
      body{
        background-color: pink;
      }
      a:link{color:white;
      }
      a {

        
        display: block;
        font-size: 40px;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
      }

      </style>
   </head>
   <body>
      <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
      <br>
      <h3><a href = "web.php">Home</a></h3>
	  <h3><a href = "logout.php">Sign Out</a></h3>
   </body>
</html>
