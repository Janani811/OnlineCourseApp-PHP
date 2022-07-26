<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>Registerd Student</title>
	<style type="text/css">
	/*#id_registered_student table td
	{
		 padding:50px;
		 color:red;
	}
	*/
	
	</style>
</head>
<body>

<?php
include('includes/header.php');
include('includes/scripts.php');
include('includes/menubar2.php');
?>
<div id="registered_student" style="float:left;margin-left:100px;">
<h1>
Registerd Student
</h1>

 <?php

 require('includes/database.php');
 
$result = mysqli_query($conn,"SELECT * FROM student");
echo "<table>";
echo "<tr><th><b>&nbspUSER NAME&nbsp</b> </th>"."<th><b>&nbspFIRST NAME&nbsp</b> </th>"."<th><b>&nbspLAST NAME&nbsp</b> </th>". "<th><b>&nbspEMAIL ID&nbsp</b> </th>"."<th><b>&nbspMOBILE NUMBER&nbsp</b> </th>"."<th><b>&nbspGENDER&nbsp</b> </th>"."<th><b>&nbspSPECIFICATIONS&nbsp</b> </th>"."<th><b>&nbspDEPARMENT&nbsp</b> </th>";
echo "<br>";
while($row = mysqli_fetch_array($result))
{
        
        echo "<tr><td>&nbsp". $row['username']."&nbsp</td>";
        echo "<td>&nbsp". $row['firstname']."&nbsp</td>";
        echo "<td>&nbsp".$row['lastname']."&nbsp</td>";
        echo"<td>&nbsp".$row['emailid']."&nbsp</td>";
        echo "<td>&nbsp".$row['mobilenumber']."&nbsp</td>";
        echo "<td>&nbsp".$row['gender']."&nbsp</td>";
        echo "<td>&nbsp".$row['education']."&nbsp</td>";
        echo "<td>&nbsp".$row['department']."&nbsp</td></tr>";
}
echo "</table>";
mysqli_close($conn);
?></div>

<div class="fixed-bottom">
<?php
include('includes/footer.php');
?>
</div>
</body>
</html>