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
a ,p  {


 display: block;
 font-size: 40px;
 text-align: center;
 padding: 14px 20px;
 text-decoration: none;
}

</style>
<?php
session_start();

session_destroy();

echo "<p>You have been logged out, <a href='web.html'> Click here <a> to go to main page</p>";

?>
