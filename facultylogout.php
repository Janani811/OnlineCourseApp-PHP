<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
<?php
session_start();


if(isset($_SESSION["mailid"] )){
	echo "<script>alert('Logged out Successfully'); window.location = 'index.php'</script>";
	
unset($_SESSION["mailid"]);
}

else{
	echo "<script>alert('login Again'); window.location = 'index.php'</script>";
	
}

?>


</body>
</html>