<!DOCTYPE HTML>

<html>
	<head>
		<title>payment</title>
		<style>
		h1 , p {

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
	<body >

		<h3><a href = "web.php">Home</a></h3>

		<hr>

		<?php
			// Connect to MySQL
			$connection = mysqli_connect( "localhost", "root", "" )
			or die( "Could not connect to database </body></html>" );

			// open Products database
			mysqli_select_db($connection,"payment")
            or die( "Could not open payment database </body></html>" );

			// query Products database
			$query1= "INSERT INTO payment( fname , city , cnum , cname , email , cvv , expyear) VALUES
			('$_POST[fname]', '$_POST[city]', '$_POST[cnum] ',
			' $_POST[cname]', '$_POST[email]', '$_POST[cvv]', '$_POST[expyear]')";
			if ( !( $result = mysqli_query($connection,$query1) ) )
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error($query1)."</body></html>" );
			} // end if
			else
			{
				print( "<p>thank you for payment!</p>" );


			}
			mysqli_close( $connection );
			exit();
		?>

	</body>
</html>
