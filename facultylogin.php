<?php
session_start();
	include "database.php";

	if(isset($_POST['login']))
	{
		
		$emailid=$_POST['emailid'];
		$password=$_POST['password'];
		
		$checkstudent=mysqli_query($conn,"select * from faculty where  mailid='$emailid'");
		$row=mysqli_num_rows($checkstudent);

		if($row>0)
		{
			$check="select * from faculty where mailid='$emailid' and password='$password'";
			$row1=mysqli_query($conn,$check);
			if(mysqli_num_rows($row1)==1)
			{
				$_SESSION["emailid"]=$emailid;
				if(isset($_SESSION["emailid"]))
				{
					if(!empty($_POST["remember"]))
					{
						setcookie("emailid",$emailid,time()+(10*24*60*60));
						setcookie("password",$password,time()+(10*24*60*60));

					}
					echo '<script> alert("Your Registration Process is Complete");</script>';
					header("LOCATION:faculty.php");
				}
			}
			else
			{
				echo "<script> alert();
					window.location='index.php'</script>";
			}
		}

	}
?>

