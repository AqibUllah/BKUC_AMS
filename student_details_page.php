<?php
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

  <title>Dashboard</title>
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
      table{
        
      }
       td{
        height: 5px;
        font-size: 12px;
        text-align: center;
      }
      th {
        text-align: center;
        padding: 20px;
          height: 50px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
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
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
                     <?php
                      include('db_page.php');
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
          <span class="dropdown-header  badge-dark"><i class="fas fa-key mr-2"></i>
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
          <a href="" class="dropdown-item badge-dark" style="text-align: center;">
            <i class="fas fa-lock-open mr-2"></i>
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
                        echo "No Password Requests";
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
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
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
          <?php
            if(isset($_SESSION["admin_logged_in"])){
              echo $_SESSION["admin_logged_in"]["username"];
            }
          ?>
          <span class="right badge badge-danger"><a href="LogOff_page.php">Log Out</a></span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="admin_main_dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                REQUESTS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="student_requests_page.php" class="nav-link active">
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
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Password Requests
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="student_password_requests_page.php" class="nav-link"><i class="far fa-circle nav-icon"></i>
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
              <li class="nav-item"><a href="teacher_password_requests_page.php" class="nav-link"><i class="far fa-circle nav-icon"></i>
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
            <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Account Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin_profile.php" class="nav-link">
                  <i class="nav-icon far fa-user nav-icon"></i>
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
            <div class="card bg-secondary">
              <div class="card-header text-white bg-dark mb-3">
                <div class="row">
                        <?php
                      $cn=db_connection();
                       if(isset($_GET['details_id'])){
                        $id=$_GET['details_id'];
                        $sql="SELECT * FROM `tbl_students_requests` WHERE `id`='$id'";
                        $run=mysqli_query($cn,$sql);
                        while ($get_data=mysqli_fetch_assoc($run)) {
                        $first_name=$get_data["first_name"];
                        $last_name=$get_data["last_name"];
                        $d_o_b=$get_data["d_o_b"];
                        $email=$get_data["email"];
                        $phone=$get_data["phone"];
                        $address=$get_data["address"];
                        $batch_no=$get_data["batch_no"];
                        $session=$get_data["session"];
                        $faculty=$get_data["faculty"];
                        $department=$get_data["department"];
                        $message=$get_data["message"];
                        }?>
                  <div class="col-md-10">
                    <h3 style=""><?php echo "Name  : ". $first_name.$last_name; ?></h3>
                    <h3 style=""><?php echo "Email : ".$email; ?></h3>
                  </div>
                    <div class="col-md-2">
                                       <?php
                      $cn=db_connection();
                       if(isset($_GET['details_id'])){
                        $id=$_GET['details_id'];
                        $sql="SELECT * FROM `tbl_students_requests` WHERE `id`='$id'";
                        $run=mysqli_query($cn,$sql);
                        $get_data=mysqli_fetch_assoc($run);
          
                        }?>
                        <div class="img img-circle">
                          <img src="<?php echo $get_data["img"]; ?>" class="img-circle" style="width: 70%;height: 70%; margin: auto;float: right;">
                        </div>
                        <?php
                        
                      }else{
                        echo "<h2>OOPS! User Not Found <span class='fa fa-angle-right'> <a href='student_requests_page.php'> Go Back To Request Page </a></span></h2>";
                      }
                      
                   
                        ?>
                  </div>
                </div>
              </div>
              <div class="card-body mr-1">
                <table class="table table-bordere table-hover table-dark mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <?php 
                        if(isset($_GET['details_id'])){
                          ?>
                      <tr>
                      <th>Date Of Birth</th>
                      <th>Phone</th>
                      <th>session</th>
                      <th>Address </th>
                      <th>Faculty</th>
                     <th>Department</th>
                     <th>Batch No</th></tr>
                     <tr>
                        <td><?php echo $d_o_b; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $session; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $faculty; ?></td>
                        <td><?php echo $department; ?></td>
                        <td><?php echo $batch_no; ?></td>
                     </tr>
                    </div>
                    <div class="col-md-6">
                     
                    </div> 
                  </div>              
                </table>
                <center>
                <div class="row">
                  <div class="col-md-12">
                <?php
                echo "<span class='badge badge-warning' style='font-family:Arial;'><h4 style='text-align:center;'>".$message."</h4></span>";
                ?>
                  </div>
                </div></center>
              </div>
              <div class="card-footer bg-dark">
                <div class="row" style="margin-left: 100px;">
                  <div class="col-lg-4">
                    <a href="student_print.php?print_id=<?php echo $_GET['details_id']; ?>" class="btn btn-info btn-block">Print</a>
                  </div>
                  <div class="col-lg-4"></div>
                  <div class="col-lg-4">
                    <a href="?approve_id=<?php echo $_GET['details_id'];?>"  class="btn btn-primary">Accept</a>
                    <a href="?reject_id=<?php echo $_GET['details_id'];?>" class="btn btn-danger">Reject</a>
                    <a href="student_requests_page.php"  class="btn btn-success">Go Back</a>
              </div>
                </div>
              </div>
            </div>
                        <?php

                        }

                       ?>
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
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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



<?php
 if(isset($_GET['approve_id'])){
    $status=approve_students();
    if($status){
           ?> 
          <script type="text/javascript">
            window.location='student_requests_page.php';
          </script>
          <?php
    }else{
      echo "Error in Approving";
    }
 }
   if(isset($_GET['reject_id'])){
    $status=reject_student();
      if($status){
        ?> 
          <script type="text/javascript">
            window.location='student_requests_page.php';
          </script>
          <?php
      }else{
        echo "Error in rejection";
      }
   }
?>