<?php
	include "database.php";

	if(isset($_POST['submit']))
	{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$emailid=$_POST['emailid'];
	
		$insert="insert into contact_form (firstname,lastname
		,emailid) VALUES ('$firstname','$lastname','$emailid')";
		
			if(mysqli_query($conn,$insert))
			{
				echo "<br>Records submitted successfully<br>";
				header("LOCATION:index.php");
			}
			else
			{
				echo mysqli_error();
			}
	}
?>