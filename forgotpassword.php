<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>Change Password</title>
	<style type="text/css">
		body
		{
		
			background: url('images/thank.jpg');
			background-size: cover;
		}
	   form
	   {
		   	border:1px solid white;
		   	height:400px;
		   	width:400px;
		    margin-left: 35%;
	   }
	   input
	   {
	   		width:362px;
	   		height:26px;
	   }
	   label
	   {
	   		font-size:20px;
	   		color: red;
	   		font-family: cursive;
	   }
	</style>
</head>
<body>
<br>
<br>
<h1 align="center" style="color:white">CHANGE PASSWORD</h1>

<form action="" method="POST" style="background-color:white;opacity:0.8;">
		<fieldset style="border:none;margin-left:20px;">
		<br>
		<br>
		<label for="mail">Email Id:</label><br>
		<input type="email" id="mail" name="mailid" placeholder="  Type Here"><br><br>

		<label for="password">Change Password :</label><br>
		<input type="password" id="password" name="psd" placeholder="  Type Here"><br><br>

		<label for="pass">Retype Password :</label><br>
		<input type="password" id="pass" name="password" placeholder="  Type Here"><br><br>
		<BR>
		<center><input type="submit" value="submit" name="submit"></center>
		<br>
		</fieldset>
		
</form>
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php

include 'database.php';

if(isset($_POST['submit']))
{
	$mailid=$_POST['mailid'];
	$password=$_POST['password'];
	
	$query="select mailid from faculty where mailid='$mailid'";
	$execute=mysqli_query($conn,$query);

	if(mysqli_num_rows($execute)>0)
	{	
   
	$updatequery="update faculty set password='$password' where mailid='$mailid'";
	
	if(mysqli_query($conn,$updatequery))
	{
		echo "<script>alert('Updated Successfully!');window.location = 'faculty.php'</script>";
	}
	else{
		echo "<script>alert('Something wrong');window.location = 'index.php'</script>";
	}
}
else{
	echo "<script>alert('Check Your Email id !');window.location = 'index.php'</script>";
}
}
?>