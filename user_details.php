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

  <title>Password Requests</title>
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
        overflow-x:auto;
      }
       td{
        height: 5px;
        font-size: 12px;
      }
      th {
          height: 30px;
        }
        .btn{
          border-radius: 30px;
          font-size: 10px;
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
      <!-- account dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">Account Settings</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-lock mr-2"></i>Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-lock-open mr-2"></i>Change Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="LogOff_page.php" class="dropdown-item bg-dark" style="text-align: center;">
            Log Out <i class="fas fa-arrow-right mr-2"></i>
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
            <a href="admin_main_dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Accounts Requests
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
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Password Requests
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item"><a href="student_password_requests_page.php" class="nav-link active"><i class="far fa-circle nav-icon"></i>
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
              <i class="nav-icon fas fa-wrench"></i>
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

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <?php
            if(isset($_GET['user_id'])){
              $id=$_GET['user_id'];
              $sql="SELECT * FROM `user_feedback` WHERE `id`='$id'";
              $done=mysqli_query($cn,$sql);
              if(mysqli_num_rows($done)>0){
                while ($get_data=mysqli_fetch_array($done)) {
                  $username=$get_data['username'];
                  $useremail=$get_data['user_email'];
                  $subject=$get_data['subject'];
                  $message=$get_data['message'];
                  $date=$get_data['date'];
                }
              }
              ?>
          <form method="post">
                <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">User Feedback</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                          data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left"><?php echo $username; ?></span>
                      <span class="direct-chat-timestamp float-right"><?php echo $date; ?><!-- 23 Jan 2:00 pm --></span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <?php
                    $sql="SELECT * FROM `registred_students` WHERE `email`='$useremail'";
                    $get_email=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($get_email)>0){
                      while ($get_img=mysqli_fetch_array($get_email)) {
                        $std_img=$get_img['img'];
                      }
                      ?>
                      <img class="direct-chat-img" src="<?php echo $std_img; ?>" alt="message user image">
                      <?php
                    }else{
                      ?>
                      <img class="direct-chat-img" src="img/male.png" alt="message user image">
                      <?php
                    }
                    ?>  
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      <?php echo $message; ?>
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->
                  <?php
                    $sql="SELECT * FROM `response_feedback` WHERE `to_email`='$useremail'";
                    $done=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($done)>0){

                      while ($get=mysqli_fetch_assoc($done)) {
                      $id = $get['id'];
                      $message = $get['response'];
                      
                      $responser_name = $get['response_by'];
                      $responser_email = $get['responser_email'];
                      $responser_img = $get['responser_img'];
                      $response_date = $get['date'];
                      

                    ?>
                    <!-- Message to the right -->
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right"><?php echo $responser_name; ?></span>
                      <span class="direct-chat-timestamp float-left"><?php echo $response_date; ?></span>
                    </div>
                    <!-- /.direct-chat-infos -->

                    <img class="direct-chat-img" src="<?php echo $responser_img; ?>" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      <?php echo $message; ?>
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->
                    <?php
                  }
                    }
                  
                  ?>
                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user7-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Sarah Doe
                            <small class="contacts-list-date float-right">2/23/2015</small>
                          </span>
                          <span class="contacts-list-msg">I will be waiting for...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user3-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nadia Jolie
                            <small class="contacts-list-date float-right">2/20/2015</small>
                          </span>
                          <span class="contacts-list-msg">I'll call you back at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user5-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nora S. Vans
                            <small class="contacts-list-date float-right">2/10/2015</small>
                          </span>
                          <span class="contacts-list-msg">Where is your new...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user6-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            John K.
                            <small class="contacts-list-date float-right">1/27/2015</small>
                          </span>
                          <span class="contacts-list-msg">Can I take a look at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user8-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Kenneth M.
                            <small class="contacts-list-date float-right">1/4/2015</small>
                          </span>
                          <span class="contacts-list-msg">Never mind I found...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                  </ul>
                  <!-- /.contacts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="user_details.php" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="submit" name="btn_send" class="btn btn-primary">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
              <!-- response to user -->
              <?php
              if(isset($_POST['btn_send'])){
                  $responser    =$_SESSION["admin_logged_in"]["username"];
                  $responser_email    =$_SESSION["admin_logged_in"]["admin_email"];
                  $reponser_img =$_SESSION['admin_logged_in']['admin_image'];
                  $_message=$_POST['message'];
                  $on=date('m/d/Y H:i A');
                  if($_message != "" or $_message !=null){
                    $sql="INSERT INTO `response_feedback`(`response`, `response_by`, `responser_img`, `date`, `responser_email`, `to_name`, `to_email`) VALUES ('$_message','$responser','$reponser_img','$on','$responser_email','$username','$useremail')";
                    $run=mysqli_query($cn,$sql);
                    if($run){
                      ?>
                      <script type="text/javascript">
                        window.location="user_details.php?setted_user_email=<?php echo $useremail; ?>";
                      </script>
                      <?php
                    }
                  }
                  
              }
                  
              ?>
            </div>
            <!--/.direct-chat -->
              </form>
              <?php
            }elseif (isset($_GET['setted_user_email'])) {
                    
              $user_email=$_GET['setted_user_email'];
              $sql="SELECT * FROM `user_feedback` WHERE `user_email`='$user_email'";
              $done=mysqli_query($cn,$sql);
              if(mysqli_num_rows($done)>0){
                while ($get_data=mysqli_fetch_array($done)) {
                  $username=$get_data['username'];
                  $useremail=$get_data['user_email'];
                  $subject=$get_data['subject'];
                  $message=$get_data['message'];
                  $date=$get_data['date'];
                }
              }
              ?>
          <form method="post">
                <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">User Feedback</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                          data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left"><?php echo $username; ?></span>
                      <span class="direct-chat-timestamp float-right"><?php echo $date; ?><!-- 23 Jan 2:00 pm --></span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <?php
                    $sql="SELECT * FROM `registred_students` WHERE `email`='$useremail'";
                    $get_email=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($get_email)>0){
                      while ($get_img=mysqli_fetch_array($get_email)) {
                        $std_img=$get_img['img'];
                      }
                      ?>
                      <img class="direct-chat-img" src="<?php echo $std_img; ?>" alt="message user image">
                      <?php
                    }else{
                      ?>
                      <img class="direct-chat-img" src="img/male.png" alt="message user image">
                      <?php
                    }
                    ?> 
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      <?php echo $message; ?>
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->
                  
                  <?php
                    $sql="SELECT * FROM `response_feedback` WHERE `to_email`='$user_email'";
                    $done=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($done)>0){

                      while ($get=mysqli_fetch_assoc($done)) {
                      $id = $get['id'];
                      $message = $get['response'];
                      
                      $responser_name = $get['response_by'];
                      $responser_email = $get['responser_email'];
                      $responser_img = $get['responser_img'];
                      $response_date = $get['date'];
                      

                    ?>
                    <!-- Message to the right -->
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right"><?php echo $responser_name; ?></span>
                      <span class="direct-chat-timestamp float-left"><?php echo $response_date; ?></span>
                    </div>
                    <!-- /.direct-chat-infos -->

                    <img class="direct-chat-img" src="<?php echo $responser_img; ?>" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      <?php echo $message; ?>
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->
                    <?php
                  }
                    }
                  
                  ?>

                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user7-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Sarah Doe
                            <small class="contacts-list-date float-right">2/23/2015</small>
                          </span>
                          <span class="contacts-list-msg">I will be waiting for...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user3-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nadia Jolie
                            <small class="contacts-list-date float-right">2/20/2015</small>
                          </span>
                          <span class="contacts-list-msg">I'll call you back at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user5-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nora S. Vans
                            <small class="contacts-list-date float-right">2/10/2015</small>
                          </span>
                          <span class="contacts-list-msg">Where is your new...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user6-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            John K.
                            <small class="contacts-list-date float-right">1/27/2015</small>
                          </span>
                          <span class="contacts-list-msg">Can I take a look at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user8-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Kenneth M.
                            <small class="contacts-list-date float-right">1/4/2015</small>
                          </span>
                          <span class="contacts-list-msg">Never mind I found...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                  </ul>
                  <!-- /.contacts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="user_details.php" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="submit" name="btn_send" class="btn btn-primary">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
              <!-- response to user -->
              <?php

              if(isset($_POST['btn_send'])){
                  $responser    =$_SESSION["admin_logged_in"]["username"];
                  $responser_email    =$_SESSION["admin_logged_in"]["admin_email"];
                  $reponser_img =$_SESSION['admin_logged_in']['admin_image'];
                  $_message=$_POST['message'];
                  $on=date('m/d/Y H:i A');
                  if($_message != "" or $_message !=null){
                    $sql="INSERT INTO `response_feedback`(`response`, `response_by`, `responser_img`, `date`, `responser_email`, `to_name`, `to_email`) VALUES ('$_message','$responser','$reponser_img','$on','$responser_email','$username','$useremail')";
                    $run=mysqli_query($cn,$sql);
                    if($run){
                      ?>
                      <script type="text/javascript">
                        window.location="user_details.php?setted_user_email=<?php echo $useremail; ?>";
                      </script>
                      <?php
                    }
                  }
                  
              }
                  
              ?>
            </div>
            <!--/.direct-chat -->
              </form>
              <?php

            }
            ?>
          </div>
          <!-- /.col-lg-12 -->
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
    <strong>Developed by &copy; <a href="https://adminlte.io">Aqib Lodhi</a>.</strong> All rights reserved.
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


<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        type: 'success',
        title: '<strong>Success</strong>, Data inserted successfully.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        type: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        type: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        type: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        type: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultTopLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'topLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomRight').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomRight',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultAutohide').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        autohide: true,
        delay: 750,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultNotFixed').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        fixed: false,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultFull').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        icon: 'fas fa-envelope fa-lg',
      })
    });
    $('.toastsDefaultFullImage').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        image: '../../dist/img/user3-128x128.jpg',
        imageAlt: 'User Picture',
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultMaroon').click(function() {
      $(document).Toasts('create', {
        class: 'bg-maroon', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });

</script>


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


