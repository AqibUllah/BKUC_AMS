<?php
ob_start();
session_start();
   if(isset($_SESSION["admin_logged_in"])){
          }else{
            header("location:login_page.php");
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
  <title>Admin Portal</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="main.css" rel="stylesheet">
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse layout-footer-fixed layout-navbar-fixed layout-fixed">
<div class="wrapper">

   <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <span class="logo-dec" style="color: red;">Welcome to<b>&nbsp;</b></span><b class="login-logo" style="color: green;">BKUC Assignment Management System</b>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
                     <?php
                      include('db_page_2.php');
                      $cn=db_connection();
                      $sql="SELECT * FROM `tbl_students_requests`";
                      $run=mysqli_query($cn,$sql);
                      $count=0;
                      while ($done=mysqli_fetch_array($run)) {
                        $count=$count+1;
                      }
                      $sql="SELECT * FROM `tbl_request_lectureres`";
                      $run=mysqli_query($cn,$sql);
                      while ($done=mysqli_fetch_array($run)) {
                      $count=$count+1;
                      }
                        $sql="SELECT * FROM `lecturer_password_retreive`";
                      $run=mysqli_query($cn,$sql);
                      while ($done=mysqli_fetch_array($run)) {
                        $count=$count+1;
                      }
                       $sql="SELECT * FROM `password_retrieve`";
                      $run=mysqli_query($cn,$sql);
                      while ($done=mysqli_fetch_array($run)) {
                      $count=$count+1;
                      }
                      if($count>0){
                        echo "<span class='right badge badge-warning' style='font-size: 10px;'>$count</span>";
                      }
                      
                      ?>
          
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">
            <?php
                     $cn=db_connection();
                      $sql="SELECT * FROM `tbl_students_requests`";
                      $run=mysqli_query($cn,$sql);
                      $count=0;
                      while ($done=mysqli_fetch_array($run)) {
                        $count=$count+1;
                      }
                      $sql="SELECT * FROM `tbl_request_lectureres`";
                      $run=mysqli_query($cn,$sql);
                      while ($done=mysqli_fetch_array($run)) {
                      $count=$count+1;
                      }
                      if($count>0){
                        echo "<span class='right badge badge-warning' style='font-size: 10px;text-align:center;'>$count Joining Requests</span>";
                      }else{
                        echo "No Joining Requests";
                      }
                      
                      ?></span>
          <div class="dropdown-divider"></div>
          <a href="teacher_requests_page.php" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 
                  <?php
                      $cn=db_connection();
                      $sql="SELECT * FROM `tbl_request_lectureres`";
                      $run=mysqli_query($cn,$sql);
                      $count=0;
                      while ($done=mysqli_fetch_array($run)) {
                        $count=$count+1;
                      }
                      if($count>0){
                        echo "<span class='right badge badge-warning' style='font-size: 10px;'>$count </span> From Lecturer";
                      }else{
                        echo "No Requests";
                      }
                      
                      ?>
          </a>
          <div class="dropdown-divider"></div>
          <a href="student_requests_page.php" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>
 <?php
                      $cn=db_connection();
                      $sql="SELECT * FROM `tbl_students_requests`";
                      $run=mysqli_query($cn,$sql);
                      $count=0;
                      while ($done=mysqli_fetch_array($run)) {
                        $count=$count+1;
                      }
                      if($count>0){
                        echo "<span class='right badge badge-warning' style='font-size: 10px;'>$count </span> From Student";
                      }else{
                        echo "No Requests";
                      }
                      
                      ?>

          </a>
          <div class="dropdown-divider"></div>
          <a href="" class="dropdown-item text-center">
            <?php
                     $cn=db_connection();
                      $sql="SELECT * FROM `lecturer_password_retreive`";
                      $run=mysqli_query($cn,$sql);
                      $count=0;
                      while ($done=mysqli_fetch_array($run)) {
                        $count=$count+1;
                      }
                      $sql="SELECT * FROM `password_retrieve`";
                      $run=mysqli_query($cn,$sql);
                      while ($done=mysqli_fetch_array($run)) {
                      $count=$count+1;
                      }
                      if($count>0){
                        echo "<span class='right badge badge-warning' style='font-size: 10px;text-align:center;'>$count Password Requests</span>";
                      }else{
                        echo "<strong>No Password Requests</strong>";
                      }
                      
                      ?>
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
           <div class="dropdown-divider"></div>
          <a href="student_password_requests_page.php" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 
                  <?php
                      $cn=db_connection();
                      $sql="SELECT * FROM `password_retrieve`";
                      $run=mysqli_query($cn,$sql);
                      $count=0;
                      while ($done=mysqli_fetch_array($run)) {
                        $count=$count+1;
                      }
                      if($count>0){
                        echo "<span class='right badge badge-warning' style='font-size: 10px;'>$count </span> From Students";
                      }else{
                        echo "No Requests";
                      }
                      
                      ?>
          </a>
          <div class="dropdown-divider"></div>
          <a href="teacher_password_requests_page.php" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>
 <?php
                      $cn=db_connection();
                      $sql="SELECT * FROM `lecturer_password_retreive`";
                      $run=mysqli_query($cn,$sql);
                      $count=0;
                      while ($done=mysqli_fetch_array($run)) {
                        $count=$count+1;
                      }
                      if($count>0){
                        echo "<span class='right badge badge-warning' style='font-size: 10px;'>$count </span> From Lecturers";
                      }else{
                        echo "No Requests";
                      }
                      
                      ?>

          </a>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <!-- account dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">Account Settings</span>
          <div class="dropdown-divider"></div>
          <a href="admin_profile.php" class="dropdown-item">
            <i class="fas fa-user-circle mr-2"></i>Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="amdin_change_password.php" class="dropdown-item">
            <i class="fas fa-lock-open mr-2"></i>Change Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="LogOff_page.php" class="dropdown-item bg-danger text-center" style="text-align: center;">
            Log Out &nbsp;<i class="fas fa-arrow-right mr-2 float-right"></i>
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
          <img src="<?php
            if(isset($_SESSION['admin_logged_in'])){
              echo $_SESSION['admin_logged_in']['admin_image'];
            }
          ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="admin_profile.php">
          <?php
            if(isset($_SESSION["admin_logged_in"])){
              echo $_SESSION["admin_logged_in"]["username"];
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
            <a href="admin_main_dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Account Requests
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="student_requests_page.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Requests</p>
                      <?php
                      $cn=db_connection();
                      $sql="SELECT * FROM `tbl_students_requests`";
                      $run=mysqli_query($cn,$sql);
                      $count=0;
                      while ($done=mysqli_fetch_array($run)) {
                        $count=$count+1;
                      }
                      if($count>0){
                        echo "<span class='right badge badge-danger' style='font-size: 10px;'>$count</span>";
                      }else{
                        
                      }
                      
                      ?>
                </a>
              </li>
              <li class="nav-item">
                <a href="teacher_requests_page.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teacher Requests</p>
                   <?php
                      $cn=db_connection();
                      $sql="SELECT * FROM `tbl_request_lectureres`";
                      $run=mysqli_query($cn,$sql);
                      $count=0;
                      while ($done=mysqli_fetch_array($run)) {
                        $count=$count+1;
                      }
                      if($count>0){
                        echo "<span class='right badge badge-danger' style='font-size: 10px;'>$count</span>";
                      }else{
                        
                      }
                      
                      ?>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Password Requests
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="student_password_requests_page.php" class="nav-link"><i class="fas fa-graduation-cap"></i>
              <p>
               <?php
                      $cn=db_connection();
                      $sql="SELECT * FROM `password_retrieve`";
                      $run=mysqli_query($cn,$sql);
                      $count=0;
                      while ($done=mysqli_fetch_array($run)) {
                        $count=$count+1;
                      }
                      if($count>0){
                        echo "<span class='right badge badge-danger' style='font-size: 10px;'>$count </span> From Students";
                      }else{
                        echo "No Requests";
                      }
                      
                      ?>
                        
                      </p></a>
              </li>
              <li class="nav-item"><a href="teacher_password_requests_page.php" class="nav-link"><i class="fas fa-user-md"></i>
              <p>
                 <?php
                      $cn=db_connection();
                      $sql="SELECT * FROM `lecturer_password_retreive`";
                      $run=mysqli_query($cn,$sql);
                      $count=0;
                      while ($done=mysqli_fetch_array($run)) {
                        $count=$count+1;
                      }
                      if($count>0){
                        echo "<span class='right badge badge-danger' style='font-size: 10px;'>$count </span> From Lecturers";
                      }else{
                        echo "No Requests";
                      }
                      
                      ?>

              </p></a>
              </li>
            </ul>
            <li class="nav-item">
            <a href="user_feedback.php" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Users Feedback
              </p>
            </a>
          </li>
            <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>  <!-- fas fa-cogs -->
              <p>
                Account Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin_profile.php" class="nav-link">
                  <i class="nav-icon fas fa-id-card nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="amdin_change_password.php" class="nav-link">
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
          <div class="col-sm-4">
            <!-- right side header -->
            
          </div><!-- /.col -->
          <div class="col-sm-4">
            <!-- midle side header -->

          </div><!-- /.col -->
          <div class="col-sm-4">
            <!-- left side header -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <?php
    $cn=db_connection();
    $sql="SELECT * FROM `tbl_students_requests`";
    $run=mysqli_query($cn,$sql);
    $count=0;
    while ($done=mysqli_fetch_array($run)) {
      $count=$count+1;
    }
    $sql="SELECT * FROM `tbl_request_lectureres`";
    $run=mysqli_query($cn,$sql);
    while ($done=mysqli_fetch_array($run)) {
      $count=$count+1;
    }

        //getting joining requests
    $sql="SELECT * FROM `password_retrieve`";
    $run=mysqli_query($cn,$sql);
    $password_requests=0;
    while ($done=mysqli_fetch_array($run)) {
      $password_requests=$password_requests+1;
    }

    //geting password requests
     $sql="SELECT * FROM `lecturer_password_retreive`";
    $run=mysqli_query($cn,$sql);
    while ($done=mysqli_fetch_array($run)) {
      $password_requests=$password_requests+1;
    }
                      
  ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="small-box bg-arielle-smile">
              <div class="inner text-white">
                <?php
                $sql="SELECT * FROM `user_feedback`";
                $get_feedback=mysqli_query($cn,$sql);
                $count_feedback=0;
                if(mysqli_num_rows($get_feedback)>0){
                  while ($get_count=mysqli_fetch_array($get_feedback)) {
                    $count_feedback+=1;
                  }
                }
                ?>
                <h3 class="text-white"><?php echo $count_feedback; ?></h3>

                <p>Users Feedback</p>
              </div>
              <div class="icon">
                <i class="ion ion-xbox"></i>
              </div>
              <a href="user_feedback.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <!-- small box -->
            <div class="small-box bg-grow-early">
              <div class="inner text-white">
                <h3 class="text-white"><?php echo $count; ?></h3>

                <p>Joining Requests</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-people"></i>
              </div>
              <a href="request_users.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- /.col -->
           <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-3">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 class="text-white"><?php echo $password_requests; ?></h3>

                <p>Password Requests</p>
              </div>
              <div class="icon">
                <i class="ion ion-pull-request"></i>
              </div>
              <a href="users_passwords_requests.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
                <?php
                $count_users=0;
                $std_counts=0;
                $sql="SELECT * FROM `registred_students`";
                $get_users=mysqli_query($cn,$sql);
                if(mysqli_num_rows($get_users)>0){
                  while (mysqli_fetch_array($get_users)) {
                    $std_counts+=1;
                    $count_users+=1;
                  }
                }
                $sql="SELECT * FROM `registred_lecturers`";
                $lec_counts=0;
                $run_users_2=mysqli_query($cn,$sql);
                if(mysqli_num_rows($run_users_2)>0){
                  while (mysqli_fetch_array($run_users_2)) {
                    $lec_counts+=1;
                    $count_users+=1;
                  }
                }

                //getting counts from created assignments
                $sql="SELECT * FROM `creat_assigment`";
                $total_assig=0;
                $run_assig_2=mysqli_query($cn,$sql);
                if(mysqli_num_rows($run_assig_2)>0){
                  while (mysqli_fetch_array($run_assig_2)) {
                    $total_assig+=1;
                  }
                }

                ob_end_flush();
                ?>
                <h3 class="text-white"><?php echo $count_users; ?></h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-people-outline"></i>
              </div>
              <a href="total_user.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content">
                                            <div class="widget-heading">Students</div>
                                           
                                        </div>
                                        <div class="widget-content">
                                            <div class="widget-numbers text-white"><span> <?php  echo $std_counts; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content">
                                            <div class="widget-heading">Teachers</div>
                                            
                                        </div>
                                        <div class="widget-content">
                                            <div class="widget-numbers text-white float-right"><span> <?php  echo $lec_counts; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content">
                                            <div class="widget-heading">Total Assignments</div>
                                            
                                        </div>
                                        <div class="widget-content">
                                            <div class="widget-numbers text-white float-right"><span> <?php echo $total_assig; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    
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

<!-- REQUIRED SCRIPTS -->

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
</body>
</html>
