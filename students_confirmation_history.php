<?php
ob_start();
session_start();
   if(isset($_SESSION["lecturer_logged_in"])){
          }else{
            header("location:login_page.php");
          }
?>

<?php
include 'db_page_2.php';
$cn=db_connection();
$sql="SELECT * FROM `creat_assigment`";
$run=mysqli_query($cn,$sql);
$count = 0;
while($get_data=mysqli_fetch_array($run)){
  $count+=1;
}


          
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

  <title>Students Confirmation</title>
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
        text-align: center;
      }
      table th{
        text-align: center;
      }
      .btn{
        font-size: 10px;
        width: auto;
        height: auto;
      }
      #success{
        text-align: center;
        font-family: candara;
        font-size: 25px;
        font-weight: bold;
        color: green;
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
            <?php if(file_exists($_SESSION["lecturer_logged_in"]["lecturer_image"])){
              ?>
              <img src="<?php echo $_SESSION["lecturer_logged_in"]["lecturer_image"]; ?>" class="img-circle elevation-2" alt="User Image">
              <?php
            }else{
              ?>
              <img src="lecturers images/no_image.jpg">
              <?php
            } ?>
        </div>
        <div class="info">
          <a href="lecturer_profile.php">
          <?php
            if(isset($_SESSION["lecturer_logged_in"])){
              echo $_SESSION["lecturer_logged_in"]["username"];
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
          <li class="nav-item">
            <a href="Lecturer_Dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="creat_assigment.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Creat Assigment
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="assigment_list.php" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Created Assigments
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="show_assigment_submitted_list_to_lecturer.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Students Submitted
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="assigment_category.php" class="nav-link active">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Assigments History
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                Account Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lecturer_profile.php" class="nav-link">
                  <i class="nav-icon far fa-user nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="lecturer_change_password.php" class="nav-link">
                  <i class="nav-icon fas fa-lock-open nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="LogOff_page.php" class="nav-link">
                  <i class="nav-icon fas fa-lock nav-icon"></i>
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

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <?php
        if(isset($_GET['assigment_name'])){         
        ?>
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-success">
              <div class="card-header">
                <?php
                    if(isset($_GET['assigment_name'])){
                      $assigment = $_GET['assigment_name'];
                    }
                    $lec_name=$_SESSION["lecturer_logged_in"]["username"];
                    $lec_email=$_SESSION["lecturer_logged_in"]["lec_email"];
                    $sql="SELECT * FROM `students_assigment_accepted` WHERE `confirm_by`='$lec_name' and `lec_email`='$lec_email' and `asssigment`='$assigment'";
                    $run_count=mysqli_query($cn,$sql);
                    $count1=0;
                    if(mysqli_num_rows($run_count)>0){
                      while ($get_count=mysqli_fetch_array($run_count)) {
                        $count1+=1;
                      }
                    }
                ?>
                <p>Accepted Students <?php echo $count1; ?></p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table id="example1" class="table table-bordere table-hover">
                  <thead class="bg-success">
                    <tr>
                      <th style="text-align: center;">S.No</th>
                      <th style="text-align: center;">Student</th>
                      <th style="text-align: center;">Confirmation</th>
                      <th style="text-align: center;">Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_GET['assigment_name'])){
                      $assigment = $_GET['assigment_name'];
                    }
                    $cn=db_connection();
                    $sql="SELECT * FROM `students_assigment_accepted` WHERE `confirm_by`='$lec_name' and `lec_email`='$lec_email' and `asssigment`='$assigment'";
                    $run=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run)>0){
                      $count_accepted=0;
                      while ($get_data=mysqli_fetch_assoc($run)) {
                        $id=$get_data['id'];
                        $std_name=$get_data['std_name'];
                        $status=$get_data['confirmation'];
                        $count_accepted+=1;
                        ?>
                        <tr>
                          <td><?php echo  $count_accepted; ?></td>
                          <td><?php echo  $std_name; ?></td>
                          <td><i class="fas fa-check" style="color: green;"></i></td>
                          <td><a href="student_assigment_details.php?accepted_std_details_id=<?php echo $id ?>" class="btn btn-success">Details</a></td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card card-danger">
              <div class="card-header">
                <?php
                  $sql="SELECT * FROM `students_assigment_rejected` WHERE `confirm_by`='$lec_name' and `lec_email`='$lec_email' and `asssigment`='$assigment'";
                  $run_count=mysqli_query($cn,$sql);
                  $count2=0;
                  if(mysqli_num_rows($run_count)>0){
                    while ($get_count=mysqli_fetch_array($run_count)) {
                      $count2+=1;
                    }
                  }
                ?>
                <p>Rejected Studens <?php echo $count2; ?></p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table id="example2" class="table table-bordere table-hover">
                  <thead class="bg-danger">
                    <tr>
                      <th style="text-align: center;">S.No</th>
                      <th style="text-align: center;">Student</th>
                      <th style="text-align: center;">Confirmation</th>
                      <th style="text-align: center;">Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_GET['assigment_name'])){
                      $assigment = $_GET['assigment_name'];
                    }
                    $sql="SELECT * FROM `students_assigment_rejected` WHERE `confirm_by`='$lec_name' and `lec_email`='$lec_email' and `asssigment`='$assigment'";
                    $run=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run)>0){
                      $count_accepted=0;
                      while ($get_data=mysqli_fetch_assoc($run)) {
                        $id=$get_data['id'];
                        $std_name=$get_data['std_name'];
                        $status=$get_data['confirmation'];
                        $count_accepted+=1;
                        ?>
                        <tr>
                          <td><?php echo  $count_accepted; ?></td>
                          <td><?php echo  $std_name; ?></td>
                          <td><i class="fas fa-times" style="color: red;"></i></td>
                          <td><a href="student_assigment_details.php?rejected_std_details_id=<?php echo $id ?>" class="btn btn-danger">Details</a></td>
                        </tr>
                        <?php
                      }
                    }

                    ob_end_flush();
                    ?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
            
          </div>
        </div>

        <?php
      }else{
        echo "<h1 style='text-align:center;color:grey;'>Oops! Assignment Not Found Something Went Wrong</h1>";
      }
        ?>
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
    <strong>BKUC AMS &copy; Developed by <a href="https://adminlte.io">Aqib Lodhi</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- REQUIRED SCRIPTS -->
<!-- DataTables -->
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

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,"ordering":true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });
</script>
<script>
  $(function () {
    $("#example2").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
  });
</script>
</body>
</html>