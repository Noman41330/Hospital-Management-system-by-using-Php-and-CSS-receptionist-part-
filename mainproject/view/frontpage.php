<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>frontpage</title>
	<link rel="stylesheet" type="text/css" href="css/frontcss.css">
	<style>
.btn-group .button {
  background-color: gray;
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: center;
}

.btn-group .button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

.btn-group .button:hover {
  background-color: red;
}
</style>
</head>

<body>
	<center>
	<img src="css/LOGO.png" class="center" alt="lab one img" style="width:10%"  >
	<img src="css/3.jpeg" class="center" alt="lab one img" width="1000px" height="150px" >

<br><br>
	<div class="btn-group">
  <button class="button" width="10px"><a href="signup.php">Signup</a></button>
  <button class="button"><a href="login.php">Login</a></button>
  <button class="button"><a href="about_us.php">About us</a></button>
  <button class="button"><a href="contact.php">Contact us</a></button>
</div>
</center>
 
</body>
</html>