<?php

session_start();

$username=$_POST['username'];
$password=$_POST['password'];


if($username&&$password)
{

$connect= mysqli_connect("localhost","root","") or die ("couldn't connect!</body></html>");

mysqli_select_db($connect,"account") or die("couldn't find db</body></html>") ;

$query=mysqli_query($connect,"SELECT username FROM account where username='$username' and password = '$password'");
$numrows=mysqli_num_rows($query);
//echo $numrows;

// check if user exsists in the database
if($numrows!=0)
{

	header("location: welcome.php");

	$_SESSION['username']=$username;

}

else
die("Incorrect username or password!");
}
else
die ("please enter a username and a password!");

?>
