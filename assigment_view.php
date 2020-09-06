<?php
session_start();
   if(isset($_SESSION["lecturer_logged_in"])){
          }else{
            header("location:login_page.php");
          }
?>

<?php
  include 'db_page.php';
if(isset($_GET['get_id'])){
  $cn=db_connection();
  $id=$_GET['get_id'];
  $_lec_name=$_SESSION["lecturer_logged_in"]["username"];
  $sql="SELECT * FROM `creat_assigment` WHERE `id`='$id'";
  $run=mysqli_query($cn,$sql);
  $count = 0;
  while($get=mysqli_fetch_array($run)){
    $count+=1;
        $ID = $get['id'];
        $Assigment_name = $get['ass_name'];
        $department = $get['department'];
        $semseter = $get['semester'];
        $faculty = $get['faculty'];
        $batch = $get['batch'];
        $session = $get['session'];
        $duration = $get['time_duration'];
        $message = $get['message'];
        $document = $get['document'];
        $created_on = $get['created_on'];
        $created_by = $get['created_by'];

        $start_date=substr($get['time_duration'],0,19);
        $last_date=substr($get['time_duration'], 22);
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
      table td{
        font-size: 12px;
        height: auto;
        width: auto;
      }
      .btn{
        font-size: 12px;
        width: auto;
        height: auto;
        padding: auto;
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
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
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
          <a href="lecturer_profile.php" class="dropdown-item">
            <i class="fas fa-lock mr-2"></i>Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="lecturer_change_password.php" class="dropdown-item">
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
          <?php
            if(isset($_SESSION["lecturer_logged_in"])){
              echo $_SESSION["lecturer_logged_in"]["username"];
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
            <a href="assigment_list.php" class="nav-link active">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Assigment List
              </p>
            </a>
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
        <center>
        </center>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                  <div class="card-header bg-dark">
                    <div class="row">
                   <div class="col-sm-6">
                     <h2 align="content"><span class="badge badge-default"><?php echo $Assigment_name; ?></span></h2>
                   </div>
                   <div class="col-sm-6">
                    <a href="assigment_list.php" class="btn btn-secondary float-right"><i class="fas fa-angle-left"></i> Go Back</a>
                   </div>
                 </div>
                  </div>
                  <div class="card-body">
                   <table id="example2" class="table table-bordere table-hover">
                    <?php
                      $start = strtotime($start_date);
                      $current=date("m/d/Y h:i:s A");
                      $current=strtotime($current);
                      //$time=time('H:ia');
                      $end = strtotime($last_date);
                      //if($end >= $current){
                        $diff= abs($current-$end);
                      //}
                      $years = floor($diff / (365*60*60*24));
                      $months = floor(($diff - $years * 365*60*60*24) 
                                     / (30*60*60*24));
                      $days = floor(($diff - $years * 365*60*60*24 -  
                      $months*30*60*60*24)/ (60*60*24));
                      $hours = floor(($diff - $years * 365*60*60*24  
                               - $months*30*60*60*24 - $days*60*60*24) 
                                         / (60*60));
                      $minutes = floor(($diff - $years * 365*60*60*24  
                                - $months*30*60*60*24 - $days*60*60*24  
                                - $hours*60*60)/ 60);
                      $seconds = floor(($diff - $years * 365*60*60*24  
                                - $months*30*60*60*24 - $days*60*60*24 
                                - $hours*60*60 - $minutes*60));
                    ?>
                     <tr>
                       <th>Faculty</th><td><?php echo $faculty; ?></td>
                      </tr>
                      <tr>
                       <th>Department</th><td><?php echo $department; ?></td>
                      </tr>
                      <tr>
                       <th>Semester</th><td><?php echo $semseter; ?></td>
                      </tr>
                      <tr>
                       <th>Message</th><td><?php echo $message; ?></td>
                      </tr>
                      <tr>
                       <th>Created On</th><td><?php echo "<i class='fas fa-clock'></i> ".$created_on; ?></td>
                      </tr>
                      <tr>
                       <th>Total Duration</th><td><?php echo "<i class='fas fa-clock'></i> ".$duration; ?></td>
                      </tr>
                      <tr>
                       <th>Last Date</th><td><?php echo "<i class='fas fa-clock'></i> ".$last_date; ?></td>
                      </tr>
                      <tr>
                        <th>Remaining Days & time</th><td><?php if($end>$current){echo "<i class='fas fa-clock'></i> ".$days." days ".$hours." hourse ".$minutes." minutes Remaining";}else{echo "<span class='badge badge-maroon bg-maroon'>Date was expired</span>";} ?></td>
                      </tr>
                      <tr>
                       <th>Created By</th><td><?php echo $created_by; ?></td>
                      </tr>
                      <tr>
                       <th>Attachment</th><td><a href="preview_pdf.php?get_pdf=<?php echo $document; ?>" class="btn btn-info">Preview</a></td>
                      </tr>
                   </table>
                  </div>
                  <div class="card-footer">
                    
                  </div>
                </div>
          </div>
          
          </div>
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
if(isset($_GET['remove_id'])){
  $id=$_GET['remove_id'];
  $staus = delete_assigment();
  if($staus == true){
    ?><script type="text/javascript">window.location="assigment_list.php";</script><?php
  }else{
                  ?>
                    <script type="text/javascript">
                      $(document).ready(function(){
                            $('.toastsDefaultDanger').ready(function() {
                              $(document).Toasts('create', {
                                position: 'topRight',
                                class: 'bg-danger', 
                                autohide : true,
                                delay    : 4000,
                                title: 'Error',
                                subtitle: 'Not Deleted',
                                body: 'Assigment can not be delete something went wrong.'
                              })
                            });
                      });
                    </script>
                  <?php
  }
}

?>
