<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>My Profile</title>
	<style type="text/css">

	</style>
</head>
<body>
<?php 
include('includes/header.php');
include('includes/scripts.php');
include('includes/menubar2.php');
?>
<div class="container-fluid">
<div class="profile" style="width:60%;height:700px;">
<br>
<h2 style="color:purple;font-family:verdana;">MY PROFILE</h2>
<br>
<!--  -->
 <?php

 require('database.php');
 
$result = mysqli_query($conn,"SELECT * FROM faculty where mailid='$emailid'");
echo "<table border='1'>";
while($row = mysqli_fetch_array($result))
{
        
        echo "<tr><td><b>USER NAME</b> </td>"."<td>". $row['username']."</td></tr>";
        echo "<tr><td><b>FIRST NAME</b> </td>"."<td>". $row['firstname']."</td></tr>";
        echo "<tr><td><b>LAST NAME</b> </td>"."<td>".$row['lastname']."</td></tr>";
        echo "<tr><td><b>EMAIL ID</b> </td>"."<td>".$row['mailid']."</td></tr>";
        echo "<tr><td><b>MOBILE NUMBER</b> </td>"."<td>".$row['mobilenumber']."</td></tr>";
        echo "<tr><td><b>ROLE</b> </td>"."<td>".$row['role']."</td></tr>";
        echo "<tr><td><b>SPECIFICATIONS</b> </td>"."<td>".$row['specifications']."</td></tr>";
}
echo "</table>";
mysqli_close($conn);
?>
    
</div>

        </div>
<div class="fixed-bottom">
<?php
include('includes/footer.php');
?>
</div>
</body>
</html>