<?php
ob_start();
session_start();
   if(isset($_SESSION["student_logged_in"])){
          }else{
            header("location:login_page.php");
          }
?>

<?php
include 'db_page.php';
$cn=db_connection();
$std_class=$_SESSION["student_logged_in"]["student_class"];
$std_email=$_SESSION["student_logged_in"]["std_email"];
$std_semester=$_SESSION["student_logged_in"]["student_semester"];
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>My Questions</title>
  <link href="main.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
      table td{
        font-size: 12px;
        height: auto;
        width: auto;
      }
    </style>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse layout-footer-fixed layout-navbar-fixed layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <span class="logo-dec">Welcome to<b>&nbsp;</b></span><b class="login-logo">BKUC Assigment Management System</b>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- account dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">Account Settings</span>
          <div class="dropdown-divider"></div>
          <a href="student_profile.php" class="dropdown-item">
            <i class="fas fa-lock mr-2"></i>Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-lock-open mr-2"></i>Change Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="LogOff_page.php" class="dropdown-item bg-danger" style="text-align: center;">
            Log Out &nbsp;&nbsp;<i class="fas fa-arrow-right mr-2"></i>
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-ligh">Managment <span class="right badge badge-warning">System</span></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <?php if(file_exists($_SESSION["student_logged_in"]["student_image"])){
              ?>
              <img src="<?php echo $_SESSION["student_logged_in"]["student_image"]; ?>" class="img-circle elevation-2" alt="User Image">
              <?php
            }else{
              ?>
              <img src="student images/student3.jpg">
              <?php
            } ?>
        </div>
        <div class="info">
          <a href="student_profile.php">
          <?php
            if(isset($_SESSION["student_logged_in"])){
              echo $_SESSION["student_logged_in"]["first_name"];
            }
          ?>
          </a>
        </div>
      </div>

       <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="Student_Dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a></li>
              <li class="nav-item">
                <a href="students_new_assigments.php" class="nav-link active">
                  <i class="fas fa-ad nav-icon"></i>
                  <p>New Assigments</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="submit_assigment.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Submit Assigment
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="submitted_assigments.php" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Total Submitted
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Account Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="student_profile.php" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="change_password.php" class="nav-link">
                  <i class="fas fa-lock-open nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="LogOff_page.php" class="nav-link">
                  <i class="fas fa-lock nav-icon"></i>
                  <p>Log Out</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12">
                <!-- write or design something in 12 columns -->
                <div class="card card-info">
                  <div class="card-header">
                     My Questions
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table width="100%" id="example2" class="table table-bordere table-hover">
                        <thead>
                          <tr>
                          <th>#</th>
                          <th>Assigment</th>
                          <th>My Question</th>
                          <th>Response</th>
                          <th>Assignment Owner</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql = "select * from `std_questions` where `std_email`='$std_email'";
                          $run = mysqli_query($cn,$sql);
                          $count = 0;
                          if($run){
                            while ($fetch = mysqli_fetch_assoc($run)) {
                              $count +=1;
                              ?>
                              <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $fetch['assignment']; ?></td>
                                <td><?php echo $fetch['question']; ?></td>
                                <td><span class="badge badge-warning">panding</span></td>
                                <td><?php echo $fetch['to']; ?></td>
                                <td><?php echo $fetch['date']; ?></td>
                                <td>
                                  <a href="confusion.php?q_id=<?php echo $fetch['id']; ?>" class="btn btn-danger" name="delete"><i class="fas fa-trash-alt fa-sm"></i></a>
                                </td>
                              </tr>
                              <?php
                              include('response_view_modal.php');
                            }
                          }
                          ?>
                        </tbody>
                    </table>
                  </div>
                  </div>
                </div>
            
          </div>
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
                <!-- write or design something in 12 columns -->
                <div class="card card-info">
                  <div class="card-header">
                     Owner Responses
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table width="100%" id="example2" class="table table-bordere table-hover">
                        <thead>
                          <tr>
                          <th>#</th>
                          <th>Assigment</th>
                          <th>My Question</th>
                          <th>Response</th>
                          <th>Assignment Owner</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql = "select * from `question_response` where `std_email`='$std_email'";
                          $run = mysqli_query($cn,$sql);
                          $count = 0;
                          if($run){
                            while ($fetch = mysqli_fetch_assoc($run)) {
                              $count +=1;
                              ?>
                              <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $fetch['assignment']; ?></td>
                                <td><?php echo $fetch['std_question']; ?></td>
                                <td><?php echo $fetch['response']; ?></td>
                                <td><?php echo $fetch['response_from']; ?></td>
                                <td><?php echo $fetch['date']; ?></td>
                                <td>
                                  <a href="#view_modal" class="btn btn-warning view" 
                                      data-toggle="modal" data-toggle="tooltip"
                                      question="<?php echo $fetch['std_question']; ?>"
                                      assignment="<?php echo $fetch['assignment']; ?>"
                                      response="<?php echo $fetch['response']; ?>"
                                      from="<?php echo $fetch['response_from']; ?>"
                                      date="<?php echo $fetch['date']; ?>"><i class="fas fa-eye fa-sm"></i></a>
                                  <a href="confusion.php?id=<?php echo $fetch['id']; ?>" class="btn btn-danger" name="delete"><i class="fas fa-trash-alt fa-sm"></i></a>
                                </td>
                              </tr>
                              <?php
                              include('response_view_modal.php');
                            }
                          }
                          ?>
                        </tbody>
                    </table>
                  </div>
                  </div>
                </div>
            
          </div>
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <a href="http://www.bkucams.000webhostapp.com">www.bkucams.000webhostapp.com</a>
    </div>
    <!-- Default to the left -->
    <strong>Developed by &copy; <a href="https://adminlte.io">Aqib Lodhi</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- REQUIRED SCRIPTS -->
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
    $(document).on('click','.view',function(e) {
    var question=$(this).attr("question");
    var assignment=$(this).attr("assignment");
    var response=$(this).attr("response");
    var from=$(this).attr("from");
    var date=$(this).attr("date");
    $('#question').val(question);
    $('#assignment').val(assignment);
    $('#response').val(response);
    $('#from').val(from);
    $('#date').val(date);
  });
    </script>

<!-- page script -->
<script>
    $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,"ordering":true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });

  $(function () {
    $("#example2").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
  });
</script>

<?php
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "delete from question_response where id='$id'";
  $run = mysqli_query($cn,$sql);
  if($run){
    header("location:confusion.php?deleted");
  }else{
    header("location:confusion.php?error");
  }
}

if(isset($_GET['q_id'])){
  $id = $_GET['q_id'];
  $sql = "delete from std_questions where id='$id'";
  $run = mysqli_query($cn,$sql);
  if($run){
    header("location:confusion.php?deleted");
  }else{
    header("location:confusion.php?error");
  }
}
?>
</body>
</html>
