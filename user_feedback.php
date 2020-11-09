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

  <title>Users feedback</title>
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
          <a href="#" class="dropdown-item">
            <i class="fas fa-user-circle mr-2"></i>Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
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
            <a href="admin_main_dashboard.php" class="nav-link bg-primary">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link bg-success">
              <i class="nav-icon fas fa-users"></i>
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
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link bg-danger">
              <i class="nav-icon fas fa-key"></i>
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
            <li class="nav-item">
            <a href="user_feedback.php" class="nav-link active bg-info">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Users Feedback
              </p>
              <i class="right nav-icon fas fa-angle-double-right"></i>
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
            </ul>
          </li>
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

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
    if(isset($_GET['deleted'])){
      ?>
      <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Deleted!</strong> One feedback has been deleted.
      </div>
      <?php
      echo "<h1 style='text-align:center;'>One feedback deleted</h1>";
    }
    ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
                <!-- write or design something in 6 columns -->
                <div class="table-responsive">
                <table id="example1" class="table table-bordere table-hover">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>User Name</th>
                      <th>Email</th>
                      <th style="text-align: center;">Action</th>
                    </tr>
                  </thead>
                      <?php
                      $cn=db_connection();
                      $sql="SELECT * FROM `user_feedback`";
                      $run=mysqli_query($cn,$sql);
                      $count = 0;
                      while($data=mysqli_fetch_array($run)){
                        $count=$count+1;
                        ?>
                       <tr id="<?php echo $data["id"]; ?>">
                        <td><?php echo $count; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['user_email']; ?></td>
                        <td style="text-align: center;">
                       
                              <a href="?user_remove=<?php echo $data['id'];?>" class="btn btn-danger"><i class="fas fa-times"></i>&nbsp; Remove</a>
                              <a href="#send_response" class="btn btn-success" data-toggle="modal"><i class="fas fa-envelope view fa-lg" 
                                data-toggle="tooltip" 
                            feedback-id="<?php echo $data['id']; ?>"
                            feedback-email="<?php echo $data['user_email']; ?>"
                            feedback-message="<?php echo $data['message']; ?>"
                            feedback-subject="<?php echo $data['subject']; ?>"
                            user-name="<?php echo $data['username']; ?>"> Response</i></a>
          
                        
                        
                        </td>
                        
                      </tr>
                        <?php
                      }
                      ?>
                </table>

                <!-- model assigment information -->
                      <div class="modal fade" id="send_response" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <form method="post">
                              <div class="modal-header bg-info">
                                <h4 class="text-white">User Feedback</h4>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                  <label>User Subject</label>
                                  <input type="text" name="subject" id="subject_v" class="form-control" readonly>
                                  <input type="hidden" name="user_id" id="id_v">
                                  <label for="user_message">User Feedback</label>
                                  <textarea class="form-control" readonly id="message_v" name="user_message"></textarea>
                                </div>
                                <div class="form-group">
                                  <input type="hidden" name="to_name" id="username_v">
                                  <label for="response">Send Response To <input type="text"  name="to_email" id="email_v" class="bg-maroon" style="border: none;border-radius: 20px;padding-left:10px;" readonly></label>
                                  <textarea class="form-control" name="response"></textarea>
                                </div>
                              </div>
                              <div class="modal-footer bg-light">
                                <button type="button" class="btn btn-danger btn-float" data-dismiss="modal">Close</button>
                                <button type="submit" name="btn_send" class="btn btn-primary btn-block btn-float">Send &nbsp;<i class="fas fa-envelope fa-lg"></i></button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>

              </div>
          </div>
          <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php

              if(isset($_POST['btn_send'])){
                  $_id=$_POST['user_id'];
                  $_subject=$_POST['subject_v'];
                  $_usermessage['message_v'];
                  $responser    =$_SESSION["admin_logged_in"]["username"];
                  $responser_email    =$_SESSION["admin_logged_in"]["admin_email"];
                  $reponser_img =$_SESSION['admin_logged_in']['admin_image'];
                  $_message=$_POST['response'];
                  $to_email=$_POST['to_email'];
                  $to_name=$_POST['to_name'];
                  date_default_timezone_set("Asia/Karachi");
                  $on=date('m/d/Y H:i A');
                  if($_message != "" or $_message !=null){
                    $sql="INSERT INTO `response_feedback`(`response`, `response_by`, `responser_img`, `date`, `responser_email`, `to_name`, `to_email`) VALUES ('$_message','$responser','$reponser_img','$on','$responser_email','$to_name','$to_email')";
                    $run=mysqli_query($cn,$sql);
                    if($run){
                      $to = $to_email;
                      $subject = "REGARDING : Your Feedback" . "\r\n";
                      $headers="From: BKUC AMS"."\r\n";
                      $message="<html><body>";
                      $message.="<div style='max-width: 600px;min-width: 200px;background-color: #fff;padding: 20px;margin: auto';>
                      <center><img style='max-height: 75px;' src='https://www.bkuc.edu.pk/public/images/top_banner1.png'></a></center>
                      <h3>BKUC ASSIGMENT MANAGEMENT SYSTEM</h3>
                    <table border='1px solid-black'>
                      <div class='form-group'>
                        <tr>
                        <th>Your Subject</th>
                        <td>$_subject</td>
                        </tr>
                        <tr>
                        <th>Your Feedback</th>
                        <td>$_usermessage</td>
                        </tr>
                      </div>

                      <div class='form-group'>
                        <tr>
                        <th>Response</th>
                        <td>$_message</td>
                        </tr>
                      </div>
                    </table>
                      <div class='form-group'>
                      </div>
                      </div>";
                      $message .="</body></html>";
                      $headers .= "Reply-To: aqibullah3312@gmail.com" . "\r\n";
                      $headers .= "MIME-Version: 1.0"."\r\n";
                      $headers .= "MIME-Version: 1.0"."\r\n";
                      $headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
                      mail($to, $subject, $message,$headers);
                      $sql="DELETE FROM `user_feedback` WHERE `id`='$_id'";
                      $run=mysqli_query($cn,$sql);
                      if($run){
                        header("location:user_feedback.php?success");
                      }else{
                        ?>
                      <script>
                        
                        alert('Info has been send but did not delete!');
                      </script>
                      <?php
                      }
                    }else{
                      ?>
                      <script>
                        
                        alert('Error in sending something went wrong!');
                      </script>
                      <?php
                    }
                  }
                  
              }
                  
  ?>


<?php
if(isset($_GET['user_remove'])){
  $id=$_GET['user_remove'];
  $sql="DELETE FROM `user_feedback` WHERE `id`='$id'";
  $del=mysqli_query($cn,$sql);
  if($del){
    ?>
    <script type="text/javascript">
      window.location="user_feedback.php?deleted";
    </script>
    <?php
  }
  // echo "<h1>hello</h1>";

  ob_end_flush();
}
?>
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
    var fedd_id=$(this).attr("feedback-id");
    var feed_email=$(this).attr("feedback-email");
    var feed_message=$(this).attr("feedback-message");
    var feed_subject=$(this).attr("feedback-subject");
    var feed_username=$(this).attr("user-name");
    $('#id_v').val(fedd_id);
    $('#email_v').val(feed_email);
    $('#message_v').val(feed_message);
    $('#subject_v').val(feed_subject);
    $('#username_v').val(feed_username);
  });
</script>

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
</body>
</html>


