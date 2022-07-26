<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style type="text/css">
		body
		{
		
			background: url('thank.jpg');
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
	   		height:20px;
	   }
	   label
	   {
	   		font-size:20px;
	   		color: #FAFAD2;
	   }
	</style>
</head>
<body>
<br>
<br>
<h1 align="center" style="color:white">LOGIN PAGE</h1>

<form action="" method="POST">
		<fieldset style="border:none;margin-left:20px;">
		<br>
		<br>
		<label for="mail">Email Id:</label><br><br>
		<input type="email" id="mail" name="mailid" placeholder="  Type Here"><br><br>
		<label for="password">Password :</label><br><br>
		<input type="password" id="password" name="psd" placeholder="  Type Here"><br><br><br>
		<label for="pass">Change Password :</label><br><br>
		<input type="password" id="pass" name="password" placeholder="  Type Here"><br><br><br>
		<center><button class="btn btn-primary btn-rounded" name="submit">LOGIN</button></center>
		<br>
		</fieldset>
		
</form>
<div class="fixed-bottom">
<?php
include('includes/footer.php');
?>
</div>
</body>
</html>
<?php
include("database.php");

if(isset($_POST['submit']))
{
	$mailid=$_POST['mailid'];
	$password=$_POST['password'];
	
	$query="select mailid from faculty where mailid='$mailid'";
	$execute=mysqli_query($con,$query);
	if(mysqli_num_rows($execute)>0)
	{
		
   
	$update="update faculty set password='$password' where mailid='$mailid'";
	
	if(mysqli_query($conn,$update))
	{
		echo "<script>alert('Updated Successfully!');window.location = 'faculty.php'</script>";
	}
	else{
		echo "<script>alert('Something wrong');window.location = 'forgotpassword.php'</script>";
	}
}
else{
	echo "<script>alert('Check Your Email id !');window.location = 'forgotpassword.php'</script>";
}
}
?>