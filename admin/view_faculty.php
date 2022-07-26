<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>View Faculty</title>
	<style type="text/css">

	</style>
</head>
<body>

<?php
include('includes/header.php');
include('includes/scripts.php');
include('includes/menubar2.php');
?>
<div id="view_faculty" style="float:left">
<h1>
View Faculty
</h1>
 <?php

require('includes/database.php');
 
$result = mysqli_query($conn,"SELECT * FROM faculty");
echo "<table>";
echo "<tr><th>USER NAME</th><th>FIRST NAME</th><th>LAST NAME</th><th>EMAIL ID</th><th>MOBILE NUMBER</th><th>ROLE</th><th>SPECIFICATIONS</th></tr>";

while($row = mysqli_fetch_array($result))
{
        
        echo "<tr><td>". $row['username']."</td>";
        echo "<td>". $row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['mailid']."</td>";
        echo "<td>".$row['mobilenumber']."</td>";
        echo "<td>".$row['role']."</td>";
        echo "<td>".$row['specifications']."</td></tr>";
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
</body>
</html>