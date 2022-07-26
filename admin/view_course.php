<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>View Course</title>
	<style type="text/css">

	</style>
</head>
<body>

<?php
include('includes/header.php');
include('includes/scripts.php');
include('includes/menubar2.php');
?>
<div id="view_course" style="float:left;">
<h1>
VIEW ALL COURSES
</h1>
<?php

 require('includes/database.php');
 
$result = mysqli_query($conn,"SELECT * FROM course");
echo "<table>";
echo "<tr><th>&nbsp&nbspCOURSE NAME&nbsp&nbsp</th><th>&nbsp&nbspDURATION&nbsp&nbsp</th><th>&nbsp&nbspCODE&nbsp&nbsp</th><th>&nbsp&nbspPRICE &nbsp&nbsp</th><th>&nbsp&nbspTYPE&nbsp&nbsp</th></tr>";
while($row = mysqli_fetch_array($result))
{
        echo "<tr>";
        echo "<td>&nbsp&nbsp".$row['name']."&nbsp&nbsp</td>";
      

    
        echo "<td>&nbsp&nbsp".$row['duration']."&nbsp&nbsp</td>";
       
   
        echo "<td>&nbsp&nbsp".$row['code']."&nbsp&nbsp</td>";
     

  
        echo "<td>&nbsp&nbsp".$row['price']."&nbsp&nbsp</td>";
  

   
        echo "<td>&nbsp&nbsp".$row['type']."&nbsp&nbsp</td>";
        echo "</tr>";

        
}
echo "</table>";
mysqli_close($conn);
?>
</div>

<div class="fixed-bottom">
<?php
include('includes/footer.php');
?>
</div>
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>