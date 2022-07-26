<!DOCTYPE html>
<html>
<head>
	<title>Edit My Profile</title>
</head>
<body>
<form action="submission.html">
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
    <input type="email" name="fname" id="mailid" class="form-control" placeholder="Enter your Email Id" disabled>
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

</body>
</html>