<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>Add Course</title>
	<style type="text/css">
	.add_course td
	{
		padding:40px;
	}
	</style>
</head>
<body>

<?php
include('includes/header.php');
include('includes/scripts.php');
include('includes/menubar2.php');
?>
<div id="add_course" style="float:left;margin-left:300px;margin-top:10px;">
<!-- <h1>
Add Course
</h1> -->
<h1 style="margin-left:50px">ADD COURSE</h1>

<form action="addcourse.php" method="POST" style="">
<center>
<table style="width:500px;margin-right:100px;">

    <tr><div class="form-group">
    <td><br><label for="coursename">COURSE NAME</label><br></td>
    <td><br><input type="text" name="name" id="coursename" class="form-control" required><br></td>
    </div></tr>
    <tr><div class="form-group">
    <td><br><label for="duration">COURSE DURATION</label><br></td>
    <td><br><input type="text" name="duration" id="duration" class="form-control" required=""><br></td>
    </div></tr>
    <tr><div class="form-group">
    <td><br><label for="code"> COURSE CODE</label><br></td>
    <td><br><input type="text" name="code" id="code" class="form-control" required><br></td>
    </div></tr>
    <tr><div class="form-group">
    <td><br><label for="price">PRICE</label></td>
    <td><br><input type="number" id="price" name="price" class="form-control"><br></td>    
    </div></tr>
    
    <tr><div class="form-group">
    <td><br><label for="type">TYPE</label><br></td>
    <td><br><select id="course" name="type" class="form-control">
          <option>CERTIFICATIONS</option>
          <option>LEARNING PATHS</option>
          <option>DIPLOMA</option>
          </select><br></td>
    </div></tr>
    <tr><td colspan="2"><center><button class="btn btn-primary btn-rounded" name="insert" style="">Add Course</button></center></td></tr>
    </table>
    </center>
    </form>
    <br>
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
