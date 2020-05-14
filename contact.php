<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text],input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: pink;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: pink;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: white;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="logo2.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="forcontact.php" method="post">
        <label for="fname">First Name</label>
        <input type="text"  name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text"  name="lastname" placeholder="Your last name..">
        <label for="city">city</label>
        <select  name="city">
          <option value="jeddah">jeddah</option>
          <option value="riyadh" selected>riyadh</option>
          <option value="khobar">khopar</option>
        </select>
        <label for="email">Email</label>
        <input type="email"  name="Email" placeholder="Your Email.."><br>

        <label for="subject">Subject</label>
        <textarea name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>
