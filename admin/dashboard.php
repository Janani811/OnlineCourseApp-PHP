<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>Dashboard</title>
	<style type="text/css">
	.card
	{
		height: 200px;
		width:200px;
		margin:80px;
	}
	.card-header
	{
		font-size: 20px;
		text-align: center;
		color:white;
		font-family: cursive;
	}
	</style>
</head>
<body>
<?php
include('includes/header.php');
include('includes/scripts.php');
include('includes/menubar2.php');
?>
<div id="dashbord">
<div id="card1" style="float:left;">
 <div class="card">
   <div class="card-header" style="background-color: red;">
     Number of Students
   </div>
   <div class="card-body">
   <center>
      <?php
      include('includes/database.php');
      $sql = "SELECT * FROM student"; 
 
      $connStatus = $conn->query($sql); 
 
      $numberOfRows = mysqli_num_rows($connStatus); 
 
      echo $numberOfRows; 
      ?>
     </center>
   </div>
 </div>
 </div>
<div id="card2" style="float:left;">
 <div class="card">
   <div class="card-header" style="background-color: violet;">
     Number of Courses
   </div>
   <div class="card-body">
   <center>
      <?php
      include('includes/database.php');
      $sql = "SELECT * FROM course"; 
 
      $connStatus = $conn->query($sql); 
 
      $numberOfRows = mysqli_num_rows($connStatus); 
 
      echo $numberOfRows; 
      ?>
      </center>
   </div>
 </div>
 </div>

<div id="card3" style="float:left;">
 <div class="card">
   <div class="card-header" style="background-color: darkblue;">
     Number of Faculty
   </div>
   <div class="card-body">
   <center>
   <?php
   include('includes/database.php');
      $sql = "SELECT * FROM faculty"; 
 
      $connStatus = $conn->query($sql); 
 
      $numberOfRows = mysqli_num_rows($connStatus); 
 
      echo $numberOfRows; 
      ?>
      </center>
   </div>
 </div>
 </div>

<div class="fixed-bottom">
<?php
include('includes/footer.php');
?>
</div>

</body>
</html>