<?php
	include "includes/database.php";

	if(isset($_POST['insert']))
	{
		$username=$_POST['username'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$mailid=$_POST['mailid'];
		$mobilenumber=$_POST['mobilenumber'];
		$password=$_POST['password'];
		$role=$_POST["role"];
		$specification=$_POST["specification"];
		

	
		$insert="insert into faculty (username,firstname,lastname
		,mailid,mobilenumber,password,role,specifications) VALUES ('$username','$firstname','$lastname','$mailid','$mobilenumber','$password','$role','$specification')";
		
			if(mysqli_query($conn,$insert))
			{
				echo '<script type="text/javascript"> alert("Your Registration Process is Complete");</script>';
				header("LOCATION:add_faculty.php");
			}
			else
			{
				echo mysqli_error($conn);
			}
	}
?>