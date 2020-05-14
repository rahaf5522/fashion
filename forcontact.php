<!DOCTYPE HTML>

<html>
	<head>
		<title>contact us</title>
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
			mysqli_select_db($connection,"contact")
            or die( "Could not open contact database </body></html>" );

			// query Products database
			$query = "INSERT INTO contact (firstname , lastname , city ,Email, subject) VALUES
			('$_POST[firstname]', '$_POST[lastname]', '$_POST[city]' ,'$_POST[Email]', '$_POST[subject]')";
			if ( !( $result = mysqli_query($connection,$query) ) )
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error($query) . "</body></html>" );
			} // end if
			else
			{
				print( "<p>thank you!</p>" );

			}
			mysqli_close( $connection );
			exit();
		?>
	</body>
</html>
