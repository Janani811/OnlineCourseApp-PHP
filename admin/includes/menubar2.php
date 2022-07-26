<!DOCTYPE html>
<html lang="en">

<head>

<!--   <meta charset="utf-8"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
</head>
<html>
<body>

<div id="menu" style="float:left;width:18%">
 <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion " id="side_bar">
     <a class="sidebar-brand  justify-content-center" href="#">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
         <div class="sidebar-brand-text">Admin Panel</div>
      </a>
      <hr class="sidebar-divider my-0">
      
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-tachometer-alt"></i>
          <span class="material-icons">Dashboard</span>
      </li>
      <!-- Heading -->
      <div class="sidebar-heading">
        INTERFACE
      </div>
      <li class="nav-item ">
        <a class="nav-link" href="registered_user.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>REGISTERED USER</span></a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
                <a href="#coursesubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-book-open" data-parent="#side_bar"></i><span>&nbsp&nbspCOURSE</span></a>
                <ul class="collapse list-unstyled" id="coursesubmenu">
                    <li>
                        <a  href="add_course.php" style="color:white;text-decoration:none">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAdd Course</a>
                    </li>
                    <br>
                    <li>
                        <a  href="manage_course.php" style="color:white;text-decoration:none">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspManage Course</a>
                    </li>
                </ul>
       </li>
       <hr class="sidebar-divider">
       <li class="nav-item">
                <a href="#facultysubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-chalkboard-teacher"></i><span>&nbsp&nbspFACULTY</span></a>
                <ul class="collapse list-unstyled" id="facultysubmenu">
                    <li>
                        <a  href="add_faculty.php" style="color:white;text-decoration:none">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAdd Faculty</a>
                    </li>
                    <br>
                    <li>
                        <a  href="manage_faculty.php" style="color:white;text-decoration:none">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspManage Faculty</a>
                    </li>
                </ul>
       </li>
       <hr class="sidebar-divider">
       <li class="nav-item">
                <a href="#viewsubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-eye" aria-hidden="true"></i><span>&nbsp&nbspVIEW</span></a>
                <ul class="collapse list-unstyled" id="viewsubmenu">
                   <!--  <li>
                        <a  href="view_user.php" style="color:white;text-decoration:none">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspView User</a>
                    </li>
                    <br> -->
                    <li>
                        <a  href="view_course.php" style="color:white;text-decoration:none">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspView Course</a>
                    </li>
                    <br>
                    <li>
                        <a  href="view_faculty.php" style="color:white;text-decoration:none">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspView Faculty</a>
                    </li>
                </ul>
       </li>
       <!-- <hr class="sidebar-divider">
       <li class="nav-item">
                <a href="#pages" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-eye" aria-hidden="true"></i><span>&nbsp&nbspPAGES</span></a>
                <ul class="collapse list-unstyled" id="pages">
                    <br>
                    <li>
                      <a  href="error.php" style="color:white;text-decoration:none">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp404 Page</a>
                    </li>
                    <br>
                    <li>
                      <a href="blank.php" style="color:white;text-decoration:none">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBlank Page</a>
                    </li>
                    
            
                </ul>
       </li> -->
      
       

 </ul>
</div>
 <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="index.">Logout</a>
        </div>
      </div>
    </div>
  </div>
