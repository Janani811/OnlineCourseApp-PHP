<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<title>404 Error Found</title>
	<style type="text/css">

	</style>
</head>
<body>
<?php 
include('includes/header.php');
include('includes/scripts.php');
include('includes/menubar2.php');
?>


<div class="container-fluid">

          <!-- 404 Error Text -->
          <div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Page Not Found</p>
            <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
            <a href="dashboard.php">&larr; Back to Dashboard</a>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
<div class="fixed-bottom">
<?php
include('includes/footer.php');
?>
</div>
</body>
</html>