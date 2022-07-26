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
        color:white;
      }
      .btn-group:hover
      {
        background-color: #F4E8D7;
        border-radius:10px;
       
      }
      .leftcard
      {
        width:15%;
        margin-left:70px;
        float:left;
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
        background-color: silver;
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
      .card-header
      {
        background-color: purple;
        color:white;
        text-align: center;
      }
      .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
  </style>
</head>
<body>


<div class="head">
   <nav class="navbar" style="background-color:violet;"> 
   <a class="navbar-brand" href="#" style="color:red">
      <img src="images/learning.png" height="28" width="30">&nbsp <b> experton</b>
   </a>
    
	<ul class="nav nav-pills mr-auto">
	  <li class="nav-item">
	  <a class="nav-link active" href="">Home</a>
	  </li>&nbsp&nbsp
	  <li class="nav-item">
	  <a class="nav-link" href="mycourses.php">My Courses</a>
	  </li>
    <li class="nav-item">
    <a class="nav-link" href="newcourse.php">New Courses</a>
    </li>
    
    <!-- <li>
    <form class="form-inline" style="margin-left:550px;"><input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search Courses</button>&nbsp&nbsp</form></li> -->

	</ul>
  <div class="dropdown" style="margin-right:80px;">
  <button onclick="myFunction()" class="dropbtn" style="width:180px;height:40px;padding:5px">Search Courses</button>
 
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="#about">About</a>
    <a href="#base">Base</a>
    <a href="#blog">Blog</a>
    <a href="#contact">Contact</a>
    <a href="#custom">Custom</a>
    <a href="#support">Support</a>
    <a href="#tools">Tools</a>
  </div>
</div>
	<div class="btn-group" role="group">

	<button class="btn dropdown-toggle" data-toggle="dropdown"><?php
session_start();
$emailid=$_SESSION["emailid"];
echo $emailid;
?>&nbsp&nbsp<span class="material-icons">person</span></button>
  	<div class="dropdown-menu dropdown-menu-right"  aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="studentprofile.php">My Profile</a>
      <a class="dropdown-item" href="studentlogout.php">Logout</a>
    </div>
  </div>
   </nav>      
 </div> 
<br>


   <br>
<div class="middle" style="height:800px;margin-left:50px">
<div class="leftcard">
 <div class="card">
   <div class="card-header">
     COURSES
   </div>
   <div class="card-body">
      <input type="checkbox" name="android" id="android"><label for="android">&nbspANDROID APP</label><br>
      <input type="checkbox" name="c" id="c"><label for="c">&nbspC</label><br>
      <input type="checkbox" name="cpp" id="cpp"><label for="cpp">&nbspC++</label><br>
      <input type="checkbox" name="css" id="css"><label for="css">&nbspCSS</label><br>
      <input type="checkbox" name="html" id="html"><label for="html">&nbspHTML</label><br>
      <input type="checkbox" name="java" id="java"><label for="java">&nbspJAVA</label><br>
      <input type="checkbox" name="javascript" id="javascript"><label for="javascript">&nbspJAVASCRIPT</label><br>
      <input type="checkbox" name="php" id="php"><label for="php">&nbspPHP</label><br>
      <input type="checkbox" name="python" id="python"><label for="python">&nbspPYTHON</label><br>
   </div>
 </div>
 <br>
 <div class="card">
    <div class="card-header">
       PRICE
    </div>
    <div class="card-body">
      <input type="checkbox" name="free"><label>&nbspFree Courses</label><br>
      <input type="checkbox" name="paid"><label>&nbspPaid Courses</label>
    </div>
 </div>
 <br>
 <div class="card">
    <div class="card-header">
       COURSE TYPE
    </div>
    <div class="card-body">
      <input type="checkbox" name="ceritifation"><label>&nbspCERTIFICATION</label><br>
      <input type="checkbox" name="diploma"><label>&nbspDIPLOMO</label><br>
      <input type="checkbox" name="learningpath"><label>&nbspLEARNING PATH</label>
    </div>
 </div>
 </div>

 

<div class="cont" style="margin-left:390px">
<!-- <a href="#" class="previous">&laquo; Previous</a>&nbsp
<a href="#" class="next">Next &raquo;</a> -->
 <!-- <h3 style="color:#B4141F;font-family:georgia">GET START TO LEARN YOUR COURSE</h3>
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
<hr> -->
<h3 style="color:#B4141F;font-family:georgia">GET START TO LEARN YOUR COURSE</h3>
<br>
<?php

 require('database.php');
 
$result = mysqli_query($conn,"SELECT * FROM course;");
echo "<table border='1'>";
while($row = mysqli_fetch_array($result))
{
        
        echo "<h4 style='color:red'>".$row['name']."</h4>";
        echo "<b>Duration</b> : ".$row['duration'];
        echo "<br>";
        echo "<b>Code </b>:  ".$row['code'];
        echo "<br>";
        echo "<b>Price</b> : ".$row['price'];
        echo "<br>";
        echo "<b>Type</b> : ".$row['type'];
        echo "<br>";
        echo "<hr>";
        
}
echo "</table>";
mysqli_close($conn);
?>
</div>


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
<script>
  
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

</script>
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
