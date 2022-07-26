<?php
session_start();
$emailid=$_SESSION["emailid"];
echo "<script>alert('$emailid');</script>";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<title> Student Courses</title>
	<style type="text/css">
      .dropdown-menu a:hover
      {
         color:white;
         background-color: #66B032;
      }
      .btn-group .btn
      {
        background-color: white;
      }
      ul li a
      {
        font-family:cursive;
        color:blue;
      }
      ul li a:hover
      {
        background-color:blue;
        color: white;
      }
      .btn-group:hover
      {
        background-color: #F4E8D7;
        border-radius:10px;
       
      }
       .cont a
      {
        color:black;
        text-decoration: none;
      }
      .cont a img
      {
          width:200px;
          height:110px;
          float:left;
      }
      hr
      {
         margin-right:200px;
      }
      #foot
      {
        background-color:silver;
        height: 230px;
      }
      td
      { 
         padding:30px;
      }
      table
      {
         margin-left: 170px;
         
      }
      .profile table

		{

		border-style:solid;

		border-width:5px;
		width:600px;
		background-color: snow;
		border-color:pink;
		

		}
	</style>
</head>
<body>

<div class="head" >
   <nav class="navbar" style="background-color:violet;"> 
   <a class="navbar-brand" href="#" style="color:red">
      <img src="images/learning.png" height="28" width="30">&nbsp <b> experton</b>
   </a>
    
	<ul class="nav nav-pills mr-auto">
	  <li class="nav-item">
	  <a class="nav-link" href="home.php">Home</a>
	  </li>&nbsp&nbsp
	  <li class="nav-item">
	  <a class="nav-link " href="mycourses.php" >My Courses</a>
	  </li>
	  <li class="nav-item">
    <a class="nav-link" href="newcourse.php">New Courses</a>
    </li>
	</ul>
	<div class="btn-group" role="group">
	<button class="btn btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="material-icons">person</span></button>
  	<div class="dropdown-menu dropdown-menu-right"  aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="studentprofile.php">My Profile</a>
      <a class="dropdown-item" href="studentlogout.php">Logout</a>
    </div>
  </div>
   </nav>      
 </div> <br>
 <a href="edit_student_profile.php" data-toggle="modal"  data-target="#modalEditForm" style="float:right;margin-right:30px;text-decoration:none;border:1px solid black;border-radius:3px;padding:4px;background-color:blue;color:white;">Edit Profile</a>
<br>
 <div class="profile" style="width:60%;margin-left:200px;">
<br>
<h2 style="color:purple;font-family:verdana;margin-left:370px;">MY PROFILE</h2>
<br>
<?php

 require('database.php');
 
$result = mysqli_query($conn,"SELECT * FROM student where emailid='$emailid'");
echo "<table border='1'>";
while($row = mysqli_fetch_array($result))
{
        
        echo "<tr><td><b>USER NAME</b> </td>"."<td>". $row['username']."</td></tr>";
        echo "<tr><td><b>FIRST NAME</b> </td>"."<td>". $row['firstname']."</td></tr>";
        echo "<tr><td><b>LAST NAME</b> </td>"."<td>".$row['lastname']."</td></tr>";
        echo "<tr><td><b>EMAIL ID</b> </td>"."<td>".$row['emailid']."</td></tr>";
        echo "<tr><td><b>MOBILE NUMBER</b> </td>"."<td>".$row['mobilenumber']."</td></tr>";
        echo "<tr><td><b>ROLE</b> </td>"."<td>".$row['gender']."</td></tr>";
        echo "<tr><td><b>SPECIFICATIONS</b> </td>"."<td>".$row['education']."</td></tr>";
        echo "<tr><td><b>DEPARTMENT</b> </td>"."<td>".$row['department']."</td></tr>";
}
echo "</table>";
mysqli_close($conn);
?>  
</div>















<br>
 <div id="foot">
<table>
<center>
<tr>
    <td>
    <nav class="navbar ">
          <a class="navbar-brand" href="#" style="color:red">
          <img src="images/learning.png" height="28" width="30">&nbsp <b>experton</b><br>
          <p style="font-size:10px;color:black">Journey to excellence</p> </a>
          </nav>
    </td>
    <td>
    <div id="subscriber"> 
          <div id="subscriberinside" style="padding:10px;">
          <label style="color:blue"><b>For free courses</b></label><br>
          <input type="email" name="myemail"  placeholder="emailId@gmail.com" style="width:300px;height:24px">
          <input type="submit" name="submit"  value="Subscribe" style="background-color:#007bff;border:none;border-radius:5px;">
          </div>
        </div>
    </td>
    <td>
        <div id="social_icons">
        <div id="social_iconsinner" style="padding:20px;margin-top:5px">
        <p align="center" style="color:blue;"><b>Contact Us</b></p>
        <center>
         <input type="image" src="images\fb.png" style="width:30px; height:30px;">&nbsp&nbsp
         <input type="image" src="images\whatappbw.png" style="width:30px; height:30px;">&nbsp&nbsp
         <input type="image" src="images\youtubebw.png" style="width:30px; height:30px;">&nbsp&nbsp
         <input type="image" src="images\twitterbw.png" style="width:30px; height:30px;"&>&nbsp&nbsp
         </center>
        </div>  
        </div>
    </td>
</tr>
</center>
</table>
<p style="font-size:13px;">&nbsp&nbsp@2020 experton Inc.All rights reserved.</p>
</div>


<div class="modal" id="modalEditForm" >
<div class="modal-dialog">
<div class="modal-content">

    <div class="header"  style="background-color:violet;color:white;height:80px;">
    <br>
    <h3 class="modal-title"><h3 class="text-center">UPDATE MY PROFILE
    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-right:20px;">
              <span aria-hidden="true">&times;</span>
            </button>
            </h3>
    </div>

    <div class="modal-body">
    <form>
    <div class="form-group">
    <label for="fname">First Name :</label>
    <input type="text" name="firstname" id="fname" class="form-control" disabled>
    </div>
    <div class="form-group">
    <label for="lname">Last Name :</label>
    <input type="text" name="lastname" id="lname" class="form-control" disabled>
    </div>
    <div class="form-group">
    <label for="uname">User Name :</label>
    <input type="text" name="username" id="uname" class="form-control">
    </div>
    <div class="form-group">
    <label for="num">Mobile Number:</label>
    <input type="tel" name="phno" id="num" class="form-control" placeholder="XX XXXX XXXX">
    </div>
    <div class="form-group">
    <label for="mailid">Email Id:</label>
    <input type="email" name="mailid" id="mailid" class="form-control" placeholder="Enter your Email Id" disabled>
    </div>
    <div class="form-group">
    <label for="pass"> Change Password :</label>
    <input type="password" name="password" id="pass" class="form-control">
    </div>
    <div class="form-group">
    <label for="course">Course Known:</label>
    <select id="course" class="form-control">
          <option>ANDROID APP DEVELOPMENT</option>
          <option>C</option>
          <option>C++</option>
          <option>CSS</option>
          <option>HTML</option>
          <option>JAVA</option>
          <option>JAVASCRIPT</option>
          <option>PHP</option>
          <option>PYTHON</option>
        </select>
    </div>
    </form>
    </div>

    <div class="modal-footer">
    <button class="btn btn-primary btn-rounded" style="margin-right:200px;">Update</button>
    </div>
    <br>
</div>
</div>
</div>
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
