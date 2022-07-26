<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>Manage Course</title>
	<style type="text/css">
	
	</style>
</head>
<body>

<?php
include('includes/header.php');
include('includes/scripts.php');
include('includes/menubar2.php');
?>

<div id="manage_course" style="float:left">
<center>
<h1>
Manage Course
</h1>
</center>

      <?php 
      include("includes/database.php");
       $sql="select * from course ";
      $result= mysqli_query($conn,$sql);
    
       if(mysqli_num_rows($result)>0)
       { 
        
        echo "<table>";
        echo "<thead>";
        echo "<tr><th>&nbsp&nbspCOURSE NAME&nbsp&nbsp</th><th>&nbsp&nbspDURATION&nbsp&nbsp</th><th>&nbsp&nbspCODE&nbsp&nbsp</th><th>&nbsp&nbspPRICE &nbsp&nbsp</th><th>&nbsp&nbspTYPE&nbsp&nbsp</th></tr>";
        echo "</thead>";
        echo "<tbody>";
         while($rows=mysqli_fetch_array($result))
         {
            
                  
    ?>

      <tr>
        <td><?php echo $rows['name'];?></td>
        
        <td><?php echo $rows['duration'];?></td>
        <td><?php echo $rows['code'];?></td>
        
        <td><?php echo $rows['price'];?></td>
        <td><?php echo $rows['type'];?></td>
        
        <td>
        <a href="edit.php?id=<?php echo $rows['id'];?>" class="btn btn-info">Update</a></td>
        <td>
        <a href="delete.php?id=<?php echo $rows['id'];?>" class="btn btn-danger">Delete</a>
    </td>
        
      </tr>
      <?php 
    
}
echo "</tbody>";
echo "</table>";
}
?>
</div>


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