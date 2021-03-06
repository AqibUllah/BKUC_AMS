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
$std_semester=$_SESSION["student_logged_in"]["student_semester"];
$sql="SELECT * FROM `creat_assigment` WHERE `class`='$std_class' and `semester`='$std_semester'";
$run=mysqli_query($cn,$sql);
$count = 0;
if(mysqli_num_rows($run)>0){
while($get_data=mysqli_fetch_array($run)){
  $count+=1;
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

  <title>New Assigments</title>
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
      .btn{
        font-size: 10px;
        width: auto;
        height: auto;
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
            <div class="table-responsive">
            <table width="100%" id="example2" class="table table-bordere table-hover">
              <thead>
                <tr>
                <th>S.No</th>
                <th style="text-align: center;">Assigment</th>
                <th style="text-align: center;">Department</th>
                <th style="text-align: center;">Last Date</th>
                <th style="text-align: center;">Total Remaining Time</th>
                <th style="text-align: center;">Status</th>
                <th style="text-align: center;">Action</th>
              </tr>
              </thead>
                <tbody>
                  <?php
                    $sql="SELECT * FROM `creat_assigment` WHERE `semester`='$std_semester' and `class`='$std_class'";
                    $run_a=mysqli_query($cn,$sql);
                    $id_count=0;
                  if(mysqli_num_rows($run_a)>0){
                    while($get_data_a=mysqli_fetch_array($run_a)){
                    date_default_timezone_set("Asia/Karachi");
                    $id_count+=1;
                    $id=$get_data_a['id'];
                    $assigment=$get_data_a['ass_name'];
                    $department=$get_data_a['department'];
                    $time_duration=$get_data_a['time_duration'];
                    $created_by=$get_data_a['created_by'];
                    $start_date=substr($get_data_a['time_duration'],0,19);
                    $last_date=substr($get_data_a['time_duration'], 22);
                    $start = strtotime($start_date);
                    $current=date("m/d/Y h:i:s A");
                    $current=strtotime($current);
                    $end = strtotime($last_date);

                    $std_email=$_SESSION["student_logged_in"]["std_email"];
                    $sql="SELECT * FROM `student_whose_submitted` WHERE `email`='$std_email'";
                    $run=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run)>0){
                      while($get_data=mysqli_fetch_array($run)){
                      $_id=$get_data['id'];
                      //$assigment_name=$get_data['sibmitted_assigment'];
                      $student_name=$get_data['std_name'];
                      $student_email=$get_data['email'];
                      $student_department=$get_data['department'];
                      $student_semester=$get_data['semester'];
                      $student_submitted_Date=$get_data['submitted_date'];
                      $student_faculty=$get_data['faculty'];
                      $assigment_submitted_date=$get_data['submitted_date'];
                      }
                      //check in just submit table
                      $sql="SELECT * FROM `submit_assigments` WHERE `std_id`='$_id' and `assigment`='$assigment'";
                      $run_b=mysqli_query($cn,$sql);
                      if(mysqli_num_rows($run_b)>0){
                        while ($submitter=mysqli_fetch_assoc($run_b)) {
                          $student_submitted_on=$submitter['submitted_on'];
                        }

                      }

                      //check in accepted assimgents
                      $sql_acp="SELECT * FROM `students_assigment_accepted` WHERE `std_email`='$student_email' and 
                      `asssigment`='$assigment'";
                      $run_acp=mysqli_query($cn,$sql_acp);
                      if(mysqli_num_rows($run_acp)>0){
                        while ($submitter_acp=mysqli_fetch_assoc($run_acp)) {
                          $student_submitted_on_acp=$submitter_acp['submition_date'];
                        }
                      }
                      

                      //check in rejected assimgents
                      $sql_rjt="SELECT * FROM `students_assigment_rejected` WHERE `std_email`='$student_email' and 
                      `asssigment`='$assigment'";
                      $run_rjt=mysqli_query($cn,$sql_rjt);
                      if(mysqli_num_rows($run_rjt)>0){
                        while ($submitter_rjt=mysqli_fetch_assoc($run_rjt)) {
                          $student_submitted_on_rjt=$submitter_rjt['submition_date'];
                        }
                      }

                      if(mysqli_num_rows($run_b)>0){
                        
                        ?>
                        <tr>
                        <td><?php echo $id_count; ?></td>
                        <td style="text-align: center;"><?php echo $get_data_a['ass_name']; ?></td>
                        <td style="text-align: center;"><?php echo $get_data_a['department']."<br>".$get_data['semester']; ?></td>
                        <td style="text-align: center;"><?php echo "<i class='fas fa-clock'></i> ".$last_date; ?></td>
                        <td style="text-align: center;font-family: verdana;">
                          <?php 
                            echo "<p><span class='badge badge-success'>Submitted on : $student_submitted_on</span></p>"; 
                          
                          ?>
                            
                        </td>
                        <td align="center">
                          <span class="badge badge-success">Completed</span>
                        </td>
                        <td class="float-right" style="width: 142px;">
                          <a href="#" class="btn btn-secondary btn-block">Submitted</a>
                        </td>
                      </tr>                          
                        <?php

                      }elseif (mysqli_num_rows($run_acp)>0) {
                        ?>
                        <tr>
                        <td><?php echo $id_count; ?></td>
                        <td style="text-align: center;"><?php echo $get_data_a['ass_name']; ?></td>
                        <td style="text-align: center;"><?php echo $get_data_a['department']."<br>".$get_data['semester']; ?></td>
                        <td style="text-align: center;"><?php echo "<i class='fas fa-clock'></i> ".$last_date; ?></td>
                        <td style="text-align: center;font-family: verdana;">
                          <?php 
                            echo "<p><span class='badge badge-success'>Submitted on : $student_submitted_on_acp</span></p>"; 
                          
                          ?>
                            
                        </td>
                        <td align="center">
                          <span class="badge badge-success">Completed</span>
                        </td>
                        <td class="float-right" style="width: 142px;">
                          <a href="#" class="btn btn-secondary btn-block">Submitted</a>
                        </td>
                      </tr>                          
                        <?php
                      }elseif (mysqli_num_rows($run_rjt)>0) {
                        ?>
                        <tr>
                        <td><?php echo $id_count; ?></td>
                        <td style="text-align: center;"><?php echo $get_data_a['ass_name']; ?></td>
                        <td style="text-align: center;"><?php echo $get_data_a['department']."<br>".$get_data['semester']; ?></td>
                        <td style="text-align: center;"><?php echo "<i class='fas fa-clock'></i> ".$last_date; ?></td>
                        <td style="text-align: center;font-family: verdana;">
                          <?php 
                            echo "<p><span class='badge badge-success'>Submitted on : $student_submitted_on_rjt</span></p>"; 
                          
                          ?>
                            
                        </td>
                        <td align="center">
                          <span class="badge badge-success">Completed</span>
                        </td>
                        <td class="float-right" style="width: 142px;">
                          <a href="#" class="btn btn-secondary btn-block">Submitted</a>
                        </td>
                      </tr>                          
                        <?php
                      }

                      else{

                        //if($end >= $current){
                      $diff= abs($current-$end);


                      $a=abs($diff-$end);

                      $compare_years = floor($a / (365*60*60*24));

                    $compare_months = floor(($a - $compare_years * 365*60*60*24) 
                                   / (30*60*60*24));

                    $compare_days = floor(($a - $compare_years * 365*60*60*24 -  
                            $compare_months*30*60*60*24)/ (60*60*24));

                    $compare_hours = floor(($a - $compare_years * 365*60*60*24  
                             - $compare_months*30*60*60*24 - $compare_days*60*60*24) 
                                       / (60*60));

                    $compare_minutes = floor(($a - $compare_years * 365*60*60*24  
                              - $compare_months*30*60*60*24 - $compare_days*60*60*24  
                              - $compare_hours*60*60)/ 60);

                    $compare_seconds = floor(($a - $compare_years * 365*60*60*24  
                              - $compare_months*30*60*60*24 - $compare_days*60*60*24 
                              - $compare_hours*60*60 - $compare_minutes*60));


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

                    $calc = (($days*24)+$hours)*(100)/(($compare_days*24)+$compare_hours); 

                    //echo "<br>".$calc."<br>";
                  ?>

                <tr>
                <td><?php echo $id_count; ?></td>
                <td style="text-align: center;"><?php echo $get_data_a['ass_name']; ?></td>
                <td style="text-align: center;"><?php echo $get_data_a['department']."<br>".$get_data_a['semester']; ?></td>
                <td style="text-align: center;"><?php echo "<i class='fas fa-clock'></i> ".$last_date; ?></td>
                <td style="text-align: center;"><?php if($end>$current){echo "<i class='fas fa-clock'></i> ".$days." days ".$hours." hourse ".$minutes." minutes Remaining";}else{echo "<span class='badge badge-maroon bg-danger'>Time Out</span>";} ?></td>
                <?php if($end>$current){if($calc > 8.99){
                  echo "<td style='text-align:center;'><span class='badge badge-primary'>in progress</span><br><br>
                  <div class='progress progress-sm bg-secondary' style='height:3px;'>
                        <div class='progress-bar bg-primary' style='width: $calc%;'></div>
                      </div>
                  </td>";
                }else{echo "<td style='text-align:center;'><span class='badge badge-danger bg-maroon'>last some time left</span><br><br>
                  <div class='progress progress-sm bg-default' style='height:3px;'>
                        <div class='progress-bar bg-maroon' style='width: $calc%;'></div>
                      </div>
                  </td>";}}else{echo "<td style='text-align:center;'><span class='badge badge-danger'>Expired</span></td>";} ?>
                <td class="float-right" style="width: 142px;">

                  <?php if($current>=$end){
                    ?><a href="#?get_id=<?php echo $get_data['id']; ?>" class="btn btn-danger btn-block">Can't submit</a><?php
                  }else{
                    ?>
                    <a href="assigments_details.php?get_id=<?php echo $get_data_a['id']; ?>" class="btn btn-info">Details <i class="fas fa-angle-right"></i></a>
                    <a href="#?get_id=<?php echo $get_data_a['id']; ?>" class="btn btn-danger"> Confusion <i class="fas fa-angle-right"></i></a>
                    <a href="submit_assigment.php?assigment_id=<?php echo $id; ?>" class="btn btn-success">Submit <i class="fas fa-angle-right"></i></a><?php
                  } ?>
                </td>
              </tr>                          
                <?php
                    

                           }

                    }else{
                      //if($end >= $current){
                      $diff= abs($current-$end);


                      $a=abs($diff-$end);

                      $compare_years = floor($a / (365*60*60*24));

                    $compare_months = floor(($a - $compare_years * 365*60*60*24) 
                                   / (30*60*60*24));

                    $compare_days = floor(($a - $compare_years * 365*60*60*24 -  
                            $compare_months*30*60*60*24)/ (60*60*24));

                    $compare_hours = floor(($a - $compare_years * 365*60*60*24  
                             - $compare_months*30*60*60*24 - $compare_days*60*60*24) 
                                       / (60*60));

                    $compare_minutes = floor(($a - $compare_years * 365*60*60*24  
                              - $compare_months*30*60*60*24 - $compare_days*60*60*24  
                              - $compare_hours*60*60)/ 60);

                    $compare_seconds = floor(($a - $compare_years * 365*60*60*24  
                              - $compare_months*30*60*60*24 - $compare_days*60*60*24 
                              - $compare_hours*60*60 - $compare_minutes*60));


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

                    $calc = (($days*24)+$hours)*(100)/(($compare_days*24)+$compare_hours); 

                    //echo "<br>".$calc."<br>";
                  ?>

                <tr>
                <td><?php echo $id_count; ?></td>
                <td style="text-align: center;"><?php echo $get_data_a['ass_name']; ?></td>
                <td style="text-align: center;"><?php echo $get_data_a['department']."<br>".$get_data_a['semester']; ?></td>
                <td style="text-align: center;"><?php echo "<i class='fas fa-clock'></i> ".$last_date; ?></td>
                <td><?php if($end>$current){echo "<i class='fas fa-clock'></i> ".$days." days ".$hours." hourse ".$minutes." minutes Remaining";}else{echo "<span class='badge badge-maroon bg-danger'>Time Out</span>";} ?></td>
                <?php if($end>$current){if($calc > 8.99){
                  echo "<td style='text-align:center;'><span class='badge badge-primary'>in progress</span><br><br>
                  <div class='progress progress-sm' style='height:3px;'>
                        <div class='progress-bar bg-primary' style='width: $calc%;'></div>
                      </div>
                  </td>";
                }else{echo "<td style='text-align:center;'><span class='badge badge-danger bg-maroon'>last some time left</span><br><br>
                  <div class='progress progress-sm bg-default' style='height:3px;'>
                        <div class='progress-bar bg-maroon' style='width: $calc%;'></div>
                      </div>
                  </td>";}}else{echo "<td style='text-align:center;'><span class='badge badge-danger'>Expired</span></td>";} ?>
                <td>

                  <?php if($current>=$end){
                    ?><a href="#?get_id=<?php echo $get_data['id']; ?>" class="btn btn-danger btn-block">Can't submit</a><?php
                  }else{
                    ?>
                    <a href="assigments_details.php?get_id=<?php echo $get_data_a['id']; ?>" class="btn btn-info btn-sm">Details <i class="fas fa-angle-right"></i></a>
                    <a href="#question_model" data-toggle="modal" data-toggle="tooltip" 
                            ass-id="<?php echo $get_data_a['id']; ?>"
                            ass-name="<?php echo $get_data_a['ass_name']; ?>"
                            std-name="<?php echo $get_data['std_name']; ?>"
                            std-email="<?php echo $get_data['email']; ?>" class="btn btn-danger btn-sm view"> Any Question <i class="fas fa-question" 
                            title="reject assignment"></i></a>
                    <a href="submit_assigment.php?assigment_id=<?php echo $id; ?>" class="btn btn-success btn-sm">Submit <i class="fas fa-angle-right"></i></a><?php
                  } ?>
                </td>
              </tr>                          
                <?php
                    }
                        
                      }
                    }
                    include('question_modal.php');
                    ob_end_flush();
                  ?>

                </tbody>
          </table>
        </div>
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
    var ass_id=$(this).attr("ass-id");
    var ass_name=$(this).attr("ass-name");
    var std_name=$(this).attr("std-name");
    var std_email=$(this).attr("std-email");
    $('#ass_id').val(ass_id);
    $('#ass_name').val(ass_name);
    $('#student_name').val(std_name);
    $('#std_email').val(std_email);
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
if(isset($_POST['send'])){
  $mssg = $_POST['message'];
  $ass_name = $_POST['assi_name'];
  $stdnt_name = $_SESSION["student_logged_in"]['first_name'];
  date_default_timezone_set("Asia/Karachi");
  $date=date('m/d/Y h:i A');
  $sql = "insert into `std_questions`(`std_name`,`std_email`,`assignment`,`question`,`to`,`date`) values('$stdnt_name','$std_email','$ass_name','$mssg','$created_by','$date')";
  $run = mysqli_query($cn,$sql);
  if($run){

    ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('.toastsDefaultSuccess').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-success', 
                        title: 'Done',
                        autohide:true,
                        delay:5000,
                        subtitle: 'Question',
                        icon    : 'fas fa-check fa-lg',
                        body: "Your question has been send to assingment owner"
                      })
                    });
                  });
                </script>
              <?php
  }else{
    ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('.toastsDefaultDanger').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-danger', 
                        title: 'Error',
                        autohide:true,
                        delay:5000,
                        subtitle: 'Not Send',
                        icon    : 'fas fa-remove fa-lg',
                        body: "Oops! something went wrong"
                      })
                    });
                  });
                </script>
              <?php
  }
}
?>
</body>
</html>
