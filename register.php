<?php
	include "database.php";

	if(isset($_POST['insert']))
	{
		$username=$_POST['username'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$emailid=$_POST['emailid'];
		$mobile=$_POST['mobile'];
		$password=$_POST['password'];
		$gender=$_POST['gender'];
		$education=$_POST["education"];
		$department=$_POST["department"];
		

	
		$insert="insert into student (username,firstname,lastname
		,emailid,mobilenumber,studentpassword,gender,education,department) VALUES ('$username','$firstname','$lastname','$emailid','$mobile','$password','$gender','$education','$department')";
		
			if(mysqli_query($conn,$insert))
			{
				echo '<script type="text/javascript"> alert("Your Registration Process is Complete");</script>';
				header("LOCATION:home.php");
			}
			else
			{
				echo mysqli_error($conn);
			}
	}
?>
