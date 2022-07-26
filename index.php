<!DOCTYPE html>
<html>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <title>experton</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <style type="text/css">
    body
    {
   /*   background-color: snow;*/
        background-image: url('images/background.jpg');
         background-size: cover;
         background-attachment: fixed;
    }
    label
    {
      font-family: arial, sans-serif;
      font-stretch: semi-expanded;
    }
    .dropdown-menu a:hover
      {
         color:white;
         background-color: blue;
      }
    .header
    {
      background-color:purple;
      color:white;
      height:80px;
      font-family:Impact, fantasy;
      font-stretch: expanded;
    }
    .modal-footer button 
    {
      background-color: green;
      border-color: green;
    }
    .footer  button 
    {
       background-color: blue;
       border-color: blue;
    }
      .third_head
      {
         height:350px;
         opacity:0.7;
                 background-color: white;

      }
   
      #ob1
      {
        border:1px solid gold ;
        width:12%;
        height:160px;
        float:left;
        padding: 20px;
        margin-left: 130px;
        padding:30px;
        color:blue;
        border-radius: 180px;
        margin-top:43px;
        background-color: gold;
      }
      #ob1:hover
      {
        animation:heartBeat;
        animation-duration: 2s;
      }
      #ob2
      {
        border:1px solid blue;
        width:12%;
        height:160px;
        margin-left:60px;
        float:left;
        color:red;
        padding: 30px;
        border-radius: 180px;
         margin-top:43px;
         background-color: blue;
      }
      #ob2:hover
      {
        animation:heartBeat;
        animation-duration: 2s;
      }
      #ob3
      {
        border:1px solid gold ;
        width:12%;
        height:160px;
        float:left;
        padding: 20px;
        margin-left: 80px;
        padding:30px;
        color:blue;
        border-radius: 180px;
         margin-top:43px;
         background-color: gold;
      }
      #ob3:hover
      {
        animation:heartBeat;
        animation-duration: 2s;
      }
      #ob4
      {
        border:1px solid blue;
        width:12%;
        height:160px;
        margin-left:60px;
        float:left;
        color:red;
        padding: 20px;
        border-radius: 180px;
         margin-top:43px;
         background-color: blue;
      }
      #ob4:hover
      {
        animation:heartBeat;
        animation-duration: 2s;
      }
      #ob5
      {
        border:1px solid gold;
        width:12%;
        height:160px;
        margin-left:60px;
        float:left;
        color:blue;
        padding: 20px;
        border-radius: 180px;
         margin-top:43px;
         background-color: gold;
      }
      #ob5:hover
      {
        animation:heartBeat;
        animation-duration: 2s;
      }
      .container img
      {
        animation:backInLeft;
        animation-duration: 1s;
      }
      #foot
      {
        background-color: #f8f8f8;
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

<div class="head">

    <nav class="navbar justify-content-center" style="background-color:blue;"> 
    <h2  style="color:white;font-family:georgia, fantasy">EXPERTISE THROUGH ONLINE </h2>
    </nav>

    <div class="second_head">
      <nav class="navbar ">
      <a class="navbar-brand" href="#"  style="color:red">
      <img src="images/learning.png" height="28" width="30">&nbsp <b> experton</b></a>
      <form class="form-inline">
          <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search Courses</button>&nbsp&nbsp -->
          
          <!-- <button class="btn btn-primary btn-rounded" type="button" data-toggle="modal"  data-target="#modalLoginForm">Login</button> -->
          <div class="btn-group" role="group">
            <button class="btn btn-rounded dropdown-toggle" data-toggle="dropdown" style="background-color:green;color:white"> Login</button>
            <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#" data-toggle="modal"  data-target="#modalStudentLoginForm">Student</a>
            <a class="dropdown-item" href="#" data-toggle="modal"  data-target="#modalFacultyLoginForm">Faculty</a>
          </div>
  </div>

          &nbsp&nbsp
          <!-- <div class="btn-group" role="group"> -->
            <button class="btn btn-rounded" type="button" data-toggle="modal" data-target="#modalStudentRegisterForm" style="background-color:red;color:white">Register</button>
            <!-- <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#" data-toggle="modal"  data-target="#modalStudentRegisterForm">Student</a>
            <a class="dropdown-item" href="#" data-toggle="modal"  data-target="#modalFacultyRegisterForm">Faculty</a>
          </div> -->
        </form>
      </nav>
    </div>

    <div class="third_head">
    <br>
    <br>
    <br>
      <h3 class="text-left" style="color:blue;margin-left:50px">A better learning future starts here</h3><br>
      <p style="font-size:25px;color:blue;margin-left:50px">Planning to start a professional career <br>Learn and bulid courses with certifications <br>Getting expertising knowledge.</p>
    </div>

</div>

<br>
<div class="obj" >

<center><p id="ob1"><br>
<b>Join Our Community</b></p></center>
<center><p id="ob2"><br>
<b>Find New Courses</b></p></center>

<center><p id="ob3"><br>
<b>Build Your Skills</b></p></center>

<center><p id="ob4"><br>
<b>Master Your Techinical Knowledge</b></p></center>

<center><p id="ob5"><br>
<b>Get Certication in Your Expertised Area</b></p></center>


</div>




<div class="container" style="width:600px;height:600px;">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/python.jpg" class="d-block w-100" alt="..." style="width:450px;height:350px;">
          </div>
          <div class="carousel-item">
            <img src="images/php.png" class="d-block w-100" alt="..." style="width:450px;height:350px;">
          </div>
          <div class="carousel-item">
            <img src="images/dev.jpg" class="d-block w-100" alt="..." style="width:450px;height:350px;">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
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
<div class="modal" id="modalStudentRegisterForm" >
<div class="modal-dialog">
<div class="modal-content">

    <div class="header">
    <br>
    <h3 class="modal-title"><h3 class="text-center">Student Register Form
    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-right:20px;">
              <span aria-hidden="true">&times;</span>
            </button>
            </h3>
    </div>

    <form  action="register.php" method="POST">
    <div class="modal-body">
    
    <div class="form-group">
    <label for="uname">User Name :</label>
    <input type="text" name="username" id="uname" class="form-control" required>
    </div>
    <div class="form-group">
    <label for="fname">First Name :</label>
    <input type="text" name="firstname" id="fname" class="form-control" required>
    </div>
    <div class="form-group">
    <label for="lname">Last Name :</label>
    <input type="text" name="lastname" id="lname" class="form-control" required="">
    </div>
    <div class="form-group">
    <label for="num">Mobile Number:</label>
    <input type="tel" name="mobile" id="num" class="form-control" placeholder="XX XXXX XXXX" required>
    </div>
    <div class="form-group">
    <label for="mailid">Email Id:</label>
    <input type="email" name="emailid" id="mailid" class="form-control" placeholder="Enter your Email Id" required>
    </div>
    <div class="form-group">
    <label for="pass">Password :</label>
    <input type="password" name="password" id="pass" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Gender :</label>
    <br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="other">Female</label>
    <input type="radio" id="other" name="gender" value="other">
    <label for="male">Other</label>
    </div>
    <div class="form-group">
    <label>Education:</label>
    <select name="education" class="form-control">
          <option value="sslc">SSLC</option>
          <option value="hsc">HSC</option>
          <option value="dip">DIPLOMA</option>
          <option value="bach">BACHELOR'S</option>
          <option value="mas">MASTER'S</option>
        </select>
    </div>
     <div class="form-group">
    <label>DEPARTMENT :</label>
    <select name="department" class="form-control">
          <option value="arts">ARTS</option>
          <option value="cse">COMPUTER SCIENCE ENGINEERING</option>
          <option value="eee">ELECTRICAL AND ELECTRONIC ENGINEERING</option>
          <option value="ece">ELECTRICAL AND COMMUNICATION ENGINEERING</option>
          <option value="me">MECHANICAL ENGINEERING</option>
        </select>
    </div>
   
    </div>

    <div class="modal-footer">
    <button class="btn btn-primary btn-rounded" name="insert" style="margin-right:200px;">Submit</button>
    </div>
     </form>
    <br>
</div>
</div>
</div>



<!-- <div class="modal" id="modalFacultyRegisterForm" >
<div class="modal-dialog">
<div class="modal-content">

    <div class="header">
    <br>
    <h3 class="modal-title"><h3 class="text-center">Register As Faculty
    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-right:20px;">
              <span aria-hidden="true">&times;</span>
            </button>
            </h3>
    </div>

    <div class="modal-body">
    <form>
    <div class="form-group">
    <label for="fname">First Name :</label>
    <input type="text" name="firstname" id="fname" class="form-control" required>
    </div>
    <div class="form-group">
    <label for="lname">Last Name :</label>
    <input type="text" name="lastname" id="lname" class="form-control" required="">
    </div>
    <div class="form-group">
    <label for="num">Mobile Number:</label>
    <input type="tel" name="phno" id="num" class="form-control" placeholder="XX XXXX XXXX" required>
    </div>
    <div class="form-group">
    <label for="mailid">Email Id:</label>
    <input type="email" name="fname" id="mailid" class="form-control" placeholder="Enter your Email Id" required>
    </div>
    <div class="form-group">
    <label for="pass">Password :</label>
    <input type="password" name="password" id="pass" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Gender :</label>
    <br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="other">Female</label>
    <input type="radio" id="other" name="gender" value="other">
    <label for="male">Other</label>
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
    <button class="btn btn-primary btn-rounded" style="margin-right:200px;">Submit</button>
    </div>
    <br>
</div>
</div>
</div> -->


<div class="modal" id="modalStudentLoginForm">
<div class="modal-dialog">
<div class="modal-content">

<div class="header">
<br>
<h3 class="modal-title"><h3 class="text-center">Login As Student
<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-right:20px;">
          <span aria-hidden="true">&times;</span>
        </button>
        </h3>
</div>
<form action="studentlogin.php" method="POST">
<div class="modal-body">

<div class="form-group">
<label for="mailid">Email Id or Phone Number</label>
<input type="email" name="emailid" id="mailid" class="form-control" placeholder="Enter your Email Id" required>
</div>
<div class="form-group">
<label for="pass">password</label>
<input type="password" name="password" id="pass" class="form-control" placeholder="Enter your password" required>
</div>

</div>

<div class="modal-footer">
<a href="studentforgotpassword.php" style="margin-right:80px;">Forgot Password</a><input type="checkbox" name="remember" ><label style="margin-right:30px">Remember Password</label>

</div>

<div class="footer">
<center><button name="login" class="btn btn-primary btn-rounded">LOGIN</button></center>
<br>
</div>
</form>
</div>
</div>
</div>


<div class="modal" id="modalFacultyLoginForm">
<div class="modal-dialog">
<div class="modal-content">

<div class="header">
<br>
<h3 class="modal-title"><h3 class="text-center">Login As Faculty
<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-right:20px;">
          <span aria-hidden="true">&times;</span>
        </button>
        </h3>
</div>
<form action="facultylogin.php" method="POST">
<div class="modal-body">

<div class="form-group">
<label for="mailid">Email Id or Phone Number</label>
<input type="email" name="emailid" id="mailid" class="form-control" placeholder="Enter your Email Id" required>
</div>
<div class="form-group">
<label for="pass">password</label>
<input type="password" name="password" id="pass" class="form-control" placeholder="Enter your password" required>
</div>

</div>

<div class="modal-footer">
<a href="forgotpassword.php" style="margin-right:80px;">Forgot Password</a><input type="checkbox" name="remember" ><label style="margin-right:30px">Remember Password</label>

</div>

<div class="footer">
<center><button class="btn btn-primary btn-rounded " name="login">LOGIN</button></center>
<br>
</div>
</form>
</div>
</div>
</div>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>


<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

</body>
</html>

