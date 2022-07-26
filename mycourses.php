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
	  <a class="nav-link active" href="" >My Courses</a>
	  </li>
    <li class="nav-item">
    <a class="nav-link" href="newcourse.php">New Courses</a>
    </li>
	</ul>
	<div class="btn-group" role="group">
	<button class="btn btn-rounded dropdown-toggle" data-toggle="dropdown"><?php
session_start();
$emailid=$_SESSION["emailid"];
echo $emailid;
?>&nbsp&nbsp<span class="material-icons">person</span></button>
  	<div class="dropdown-menu dropdown-menu-right"  aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="studentprofile.php">My Profile</a>
      <a class="dropdown-item" href="#">Logout</a>
    </div>
  </div>
   </nav>      
 </div> 
<br><br>
<div class="cont" style="margin-left:200px" style="background-color:white">
<!-- <a href="#" class="previous">&laquo; Previous</a>&nbsp
<a href="#" class="next">Next &raquo;</a> -->
 <h3 style="color:green;font-family:verdana">MY COURSES</h3>
 <br>
 <a href="https://www.tutorialspoint.com/cprogramming/index.htm"><img src="images/c.jpg" > <h5  style="color:red">  &nbsp&nbspC TUTORIAL FOR BEGINNERS</h5>&nbsp&nbsp Duration:1 HR 18 MINS<br> &nbsp&nbsp Paid Courses
 <br>&nbsp&nbsp RS.500/-</a><br>
<hr>
 <a href="https://www.tutorialspoint.com/cplusplus/index.htm"><img src="images/c++.jpg" > <h5  style="color:red">  &nbsp&nbspC++ TUTORIAL FOR BEGINNERS</h5>&nbsp&nbsp Duration:2 HR 48 MINS<br> &nbsp&nbsp Free Courses</a><br>
<br>
<hr>
<a href="https://www.programiz.com/java-programming"><img src="images/c++.jpg" > <h5  style="color:red">  &nbsp&nbspJAVA TUTORIAL</h5>&nbsp&nbsp Duration:4 HR 20 MINS<br> &nbsp&nbsp Paid Courses<BR>&nbsp&nbsp RS.690/-</a><br>
<br>
<hr>
<a href="https://www.w3schools.com/php/DEFAULT.asp"><img src="images/c++.jpg" > <h5  style="color:red">  &nbsp&nbspLERAN PHP TUTORIAL</h5>&nbsp&nbsp Duration:2 HR 10 MINS<br> &nbsp&nbsp Free Courses</a><br>
<br>
<hr>
<a href="https://www.javatpoint.com/android-tutorial"><img src="images/c++.jpg" > <h5  style="color:red">  &nbsp&nbspANDROID APP DEVELOPMENT TUTORIAL FOR BEGINNERS</h5>&nbsp&nbsp Duration:3 HR 58 MINS<br> &nbsp&nbsp Paid Courses<br>&nbsp&nbsp RS.1000/-</a><br><br>
<br>
<hr>
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
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>