<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>Add faculty
</title>
	<style type="text/css">
	.add_faculty td
	{
		padding:20px;
	}
	</style>
</head>
<body>

<?php
include('includes/header.php');
include('includes/scripts.php');
include('includes/menubar2.php');
?>
<div id="add_faculty" style="float:left;margin-left:300px;">
<!-- <h1>
Add faculty
</h1> -->
<h1 style="margin-left:100px">ADD FACULTY</h1>

<form action="addfaculty.php" method="POST" >
<center>
<table style="width:500px;margin-right:100px;">
    <tr><div class="form-group">
    <td><label for="fname">FIRST NAME</label></td>
    <td><input type="text" name="firstname" id="fname" class="form-control"></td>
    </div></tr>
    <tr><div class="form-group">
    <td><br><label for="lname">LAST NAME</label></td>
    <td><br><input type="text" name="lastname" id="lname" class="form-control"></td>
    </div></tr>
    <tr><div class="form-group">
    <td><br><label for="uname">USER NAME</label></td>
    <td><br><input type="text" name="username" id="uname" class="form-control"></td>
    </div></tr>
    <tr><div class="form-group">
    <td><br><label for="num">MOBILE NUMBER</label></td>
    <td><br><input type="tel" name="mobilenumber" id="num" class="form-control"></td>
    </div></tr>
    <tr><div class="form-group">
    <td><br><label for="mailid">EMAIL ID</label></td>
    <td><br><input type="email" name="mailid" id="mailid" class="form-control" ></td>
    </div></tr>
    <tr><div class="form-group">
    <td><br><label for="pass">PASSWORD</label></td>
    <td><br><input type="password" name="password" id="pass" class="form-control"></td>
    </div></tr>
    <tr><div class="form-group">
    <td><br><label for="role">ROLE</label></td>
    <td><br><select id="role" name="role" class="form-control">
          <option>SOFTWARE DEVELOPER</option>
          <option>TRAINER</option>
          <option>ENGINEER</option>
          <option>WEB DEVELOPER</option>
          <option>FRONT END DEVELOPER</option>
          <option>BACK END DEVELOPER</option>
        </select></td>
    </div></tr>
    <tr><div class="form-group">
    <td><br><label for="spece">SPECIFICATIONS</label></td>
    <td><br><select id="spec" name="specification" class="form-control">
          <option>ANDROID APP DEVELOPMENT</option>
          <option>C</option>
          <option>C++</option>
          <option>CSS</option>
          <option>HTML</option>
          <option>JAVA</option>
          <option>JAVASCRIPT</option>
          <option>PHP</option>
          <option>PYTHON</option>
          <option>FULL STACK DEVELOPMENT</option>
        </select></td>
    </div></tr>
    <tr>
    <td colspan="2"><center><br><button class="btn btn-primary btn-rounded" name="insert" style="">Add Faculty</button></center></td></tr>

    </table>
    </form>




</div>


<div class="fixed-bottom">
<?php
include('includes/footer.php');
?>
</div>
</body>
</html>


