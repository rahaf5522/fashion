<!DOCTYPE HTML>

<html>
	<head>
		<title>thankyou</title>
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
		 <h3> <a href="web.php">Home</a></h3>

		<hr>

		<?php
			// Connect to MySQL
			$connection = mysqli_connect( "localhost", "root", "" )
			or die( "Could not connect to database </body></html>" );

			// open Products database
			mysqli_select_db($connection,"account")
            or die( "Could not open account database </body></html>" );

			// query Products database
			$query = "INSERT INTO account (username,password,email) VALUES
			('$_POST[username]', '$_POST[password]', '$_POST[email]')";
			if ( !( $result = mysqli_query($connection,$query) ) )
			{
				print( "<p>Could not execute query!</p>" );
				die( mysqli_error($query) ."</body></html>" );
			} // end if
			else
			{
				print( "<p>thank you for register!</p>" );


			}
			mysqli_close( $connection );
			exit();

		?>



	</body>
</html>
