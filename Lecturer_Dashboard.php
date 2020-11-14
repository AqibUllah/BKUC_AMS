<?php
ob_start();
session_start();
   if(isset($_SESSION["lecturer_logged_in"])){
          }else{
            header("location:login_page.php");
          }
?>

<?php
            include('db_page_2.php');
            $cn=db_connection();
            $id_count=0;
            $lec_name=$_SESSION["lecturer_logged_in"]["username"];
                    $sql="SELECT * FROM `creat_assigment` WHERE 
                        `created_by`='$lec_name'";
                    $run_b=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run_b)>0){
                      while ($get=mysqli_fetch_assoc($run_b)) {
                        $id_count+=1;
                      }
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

  <title>Lecturer Dashboard</title>
  <link href="main.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
      h3{
        color: white;
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
          <a href="lecturer_profile.php" class="dropdown-item">
            <i class="fas fa-lock mr-2"></i>Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="lecturer_change_password.php" class="dropdown-item">
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
            <a href="Lecturer_Dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
              <i class="right fas fa-angle-double-right fa-lg"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="creat_assigment.php" class="nav-link bg-info">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Creat Assigment
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="assigment_list.php" class="nav-link bg-success">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Created Assigments
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="show_assigment_submitted_list_to_lecturer.php" class="nav-link bg-warning">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Students Submitted
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="assigment_category.php" class="nav-link bg-maroon">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Assigments History
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link bg-purple">
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
            </ul>
            <li class="nav-item">
                <a href="LogOff_page.php" class="nav-link bg-danger">
                  <i class="nav-icon fas fa-lock nav-icon"></i>
                  <p>Log Out</p>
                </a>
              </li>
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
        <div class="row mb-2">

          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Creat</h3>

                <p>New Assigment</p>
              </div>
              <div class="icon">
                <i class="ion ion-paintbucket"></i>
              </div>
              <a href="creat_assigment.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php
                if(mysqli_num_rows($run_b)>0){
                  
                  echo $id_count;
                }else{
                  echo "0";
                }
                ?></h3>

                <p>Created Assigments</p>
              </div>
              <div class="icon">
                <i class="ion ion-document-text"></i>
              </div>
              <a href="assigment_list.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- /.col -->
           <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-3">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                $sql="SELECT * FROM `submit_assigments` WHERE 
                        `assigment_was_created_by`='$lec_name'";
                $run_b=mysqli_query($cn,$sql);

                $sql2="SELECT * FROM `re_submit_assignments` WHERE 
                      `submitted_to`='$lec_name'";
                $run_c=mysqli_query($cn,$sql2);

                    $assigment_count=0;
                  if(mysqli_num_rows($run_b)>0){
                    while($get_data_b=mysqli_fetch_assoc($run_b)){
                    $assigment_count+=1;
                  }
                  //echo "<h3>$assigment_count</h3>";
                }
                
                  if(mysqli_num_rows($run_c)>0){
                    while (mysqli_fetch_assoc($run_c)) {
                      $assigment_count+=1;
                    }
                    //echo "<h3>$assigment_count</h3>";
                  }

                  
                //else{
                  echo "<h3>$assigment_count</h3>";
                //}
                ?>
                

                <p >Students Submitted</p>
              </div>
              <div class="icon">
                <?php
                //if(mysqli_num_rows($run_b)==1 or mysqli_num_rows($run_c)==1){
                if($assigment_count == 1){
                  ?>
                  <i class="ion ion-person"></i>
                  <?php
                }//elseif(mysqli_num_rows($run_b)>1 or mysqli_num_rows($run_c)>1){
                 elseif($assigment_count>1 or $assigment_count>1){
                  ?>
                  <i class="ion ion-person-add"></i>
                  <?php
                }else{
                  ?>
                  <i class="nav-icon fas fa-users"></i>
                  <?php
                }


                ob_end_flush();
                ?>
                
              </div>
              <a href="show_assigment_submitted_list_to_lecturer.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- /.col -->
           <div class="col-12 col-sm-6 col-md-3">
            <!-- small box -->
            <div class="small-box bg-maroon">
              <div class="inner">
                <h3>History</h3>

                <p>Students  Confirmation</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="assigment_category.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          
          </div>
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
                <!-- write or design something in 6 columns -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <!-- write or design something in 6 columns -->
          </div>
          <!-- /.col-md-6 -->
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
    <strong>BKUC AMS &copy; Developed by <a href="https://adminlte.io">Aqib Lodhi</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- REQUIRED SCRIPTS -->
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>