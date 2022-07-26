<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
</head>
<style type="text/css">
		
		body
		{
		
			background-image: url('images/background.jpg');
			background-size: cover;
			background-color: lightblue;
		}
	   form
	   {
		   	border:1px solid white;
		   	height:340px;
		   	width:400px;
		    margin-left: 35%;
	   }
	   input
	   {
	   		width:362px;
	   		height:24px;
	   }
	   label
	   {
	   	font-family:cursive;
	   		font-size:20px;
	   		color: red;
	   }
	
</style>
<body>

<br>
<br>
<h1 align="center" style="color:blue;">ADMIN LOGIN PAGE</h1>
<form action="adminloginpage.php" method="POST" style="background-color:white;opacity:0.8">
		<fieldset style="border:none;margin-left:20px;">
		<br>
		<br>
		<label for="emailid">Email Id:</label><br>
		<input type="email" id="emailid" name="emailid" placeholder="  Type Here"><br><br>
		<label for="pass">Password :</label><br>
		<input type="password" id="pass" name="password" placeholder="  Type Here"><br><br><br>
		<center><button class="btn btn-primary btn-rounded" name="login">LOGIN</button></center>
		<br>
		
		</fieldset>
		
</form>
<br>
<br>
<div class="fixed-bottom">
<?php
include('includes/footer.php');
?>
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>