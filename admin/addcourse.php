<?php
session_start();
	include "includes/database.php";

	if(isset($_POST['insert']))
	{
		$name=$_POST['name'];
		$duration=$_POST['duration'];
		$code=$_POST['code'];
		$price=$_POST['price'];
		$type=$_POST['type'];

	
		$insert="insert into course (name,duration,code
		,price,type) VALUES ('$name','$duration','$code','$price','$type')";
		
			if(mysqli_query($conn,$insert))
			{
				echo "<script> alert('Your Registration Process is Complete');</script>";
				header("LOCATION:add_course.php");
			}
			
	}
?>