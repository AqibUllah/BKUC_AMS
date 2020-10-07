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

  <title>Students Submitted</title>
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
            <a href="assigment_list.php" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Students Submitted
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="assigment_category.php" class="nav-link">
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
        <div class="row">
          <div class="col-lg-12">
                <!-- write or design something in 12 columns -->
                <?php
                    $lec_name=$_SESSION["lecturer_logged_in"]["username"];
                    if(isset($_GET['success_id'])){
                      ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('.toastsDefaultSuccess').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-success', 
                        title: 'Accepted',
                        autohide:true,
                        delay:5000,
                        subtitle: 'Done',
                        body: "Assigment has been accepted"
                      })
                    });
                  });
                  
                </script>
              <?php
                    }elseif(isset($_GET['reject_id'])){
                      ?>
                      <script type="text/javascript">
                        $(document).ready(function(){
                          $('.toastsDefaultMaroon').ready(function() {
                            $(document).Toasts('create', {
                              class: 'bg-maroon', 
                              title: 'Rejected',
                              autohide:true,
                              delay:5000,
                              subtitle: 'Done',
                              body: "Assigment has been Rejected"
                            })
                          });
                        });
                        
                      </script>
                    <?php
                    }
                  ?>
                  <div class="table-responsive">
                  <table id="example2" class="table table-bordere table-hover">
                    <thead>
                      <tr>
                      <th>S.No</th>
                      <th style="text-align: center;">Student</th>
                      <th style="text-align: center;">Assigment</th>
                      <th style="text-align: center;">Submnitted on</th>
                      <th style="text-align: center;">Marks</th>
                      <th style="text-align: center;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                  <?php
                  $assigment_count = 0;
                  
                  $sql_a="SELECT * FROM `submit_assigments` WHERE `assigment_was_created_by`='$lec_name'";
                  $run_a=mysqli_query($cn,$sql_a);
                  if(mysqli_num_rows($run_a)>0){
                    while($get_data=mysqli_fetch_array($run_a)){
                    $submitted_id=$get_data['std_id'];
                    $submitted_assigment=$get_data['assigment'];
                    $submitted_on=$get_data['submitted_on'];
                    $primary_key=$get_data['primary_key'];
                    $assigment_count+=1;

                    $sql="SELECT * FROM `creat_assigment` WHERE `created_by`='$lec_name' and `ass_name`='$submitted_assigment'";
                    $run_e=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run_e)>0){
                      while ($get_data_e=mysqli_fetch_array($run_e)) {
                        $total_marks = $get_data_e['ass_marks'];
                      }
                    }

                  $sql="SELECT * FROM `student_whose_submitted` WHERE `id`='$submitted_id'";
                  $run=mysqli_query($cn,$sql);
                  while($get_data_a=mysqli_fetch_assoc($run)){
                    $_id=$get_data_a['id'];
                    //$assigment_name=$get_data['sibmitted_assigment'];
                    
                    $student_name=$get_data_a['std_name'];
                    $student_email=$get_data_a['email'];
                    $student_department=$get_data_a['department'];
                    $student_semester=$get_data_a['semester'];
                    $student_submitted_Date=$get_data_a['submitted_date'];
                    $student_faculty=$get_data_a['faculty'];
                    $assigment_submitted_date=$get_data_a['submitted_date'];
                    /*
                    $submitted_id=$get_data_a['std_id'];
                    $submitted_assigment=$get_data_a['assigment'];
                    $Assigment_Evidence=$get_data_a['evidence'];
                    $submitted_on=$get_data_a['submitted_on'];
                    $primary_key=$get_data_a['primary_key'];
                    */
                    
                    //$assigment_count+=1;

                    ?>
                       <tr>
                      <td><?php echo $assigment_count; ?></td>
                      <td><?php echo $student_name; ?></td>
                      <td><?php echo $submitted_assigment; ?></td>
                      <td><?php echo $submitted_on; ?></td>
                      <form method="post" action="show_assigment_submitted_list_to_lecturer.php">
                      <td>
                        <input type="text" placeholder="student marks / <?php echo $total_marks ?>" name="std_marks" class="form-control">
                        </td>
                      <td class="text-center py-0 align-middle">

                          <a href="student_view_evidence.php?student_id=<?php echo $primary_key; ?>" class="btn btn-primary">View Evidence</a>
                          <input type="hidden" name="h_value" id="h_value" value="<?php echo $primary_key; ?>">
                          <a href="?student_reject_id=<?php echo $primary_key; ?>" class="btn btn-danger">Reject</a>
                          
                          <input type="submit" name="btn_accept" id="btn_accept" value="Accept" class="btn btn-success">
                        
                      </td>
                    </form>
                      </tr>
                    
                    <?php

                  }

                    }
                  }
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
    <strong>BKUC AMS &copy; Developed by <a href="https://adminlte.io">Aqib Lodhi </a></strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

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
if(isset($_POST["btn_accept"])){
  include('functions_page.php');
  $std_marks=$_POST['std_marks'];
  //$status = input_recieved($_POST['std_marks']);
  if($std_marks != "" or $std_marks != null){
    $status = student_accept_assigment();
    if($status == "done"){
      ?>
                <script type="text/javascript">
                  window.location="show_assigment_submitted_list_to_lecturer.php?success_id";
                </script>
              <?php

    }elseif ($status == "evidence not delete") {
      ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('.toastsDefaultDanger').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-danger', 
                        title: 'Accepted',
                        autohide:true,
                        delay:5000,
                        subtitle: 'Error',
                        body: "Oops! Evidence files not deleted something went wrong"
                      })
                    });
                  });
                </script>
              <?php
    }elseif ($status=="already_accepted") {
      ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('.toastsDefaultInfo').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-info', 
                        title: 'accepted',
                        autohide:true,
                        delay:5000,
                        subtitle: 'Already done',
                        body: "Assigment was already accepted"
                      })
                    });
                  });
                </script>
              <?php
    }elseif ($status == "not delete") {
    ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('.toastsDefaultMaroon').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-maroon', 
                        title: 'Error',
                        autohide:true,
                        delay:5000,
                        subtitle: 'Not delete',
                        body: "data can not delete"
                      })
                    });
                  });
                </script>
              <?php
  }elseif ($status == "not accept") {
    ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('.toastsDefaultDanger').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-danger', 
                        title: 'Error',
                        autohide:true,
                        delay:5000,
                        subtitle: 'Not Accept',
                        body: "Oops! Student can not accept something went wrong."
                      })
                    });
                  });
                </script>
              <?php
  }

}else{
    ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('.toastsDefaultMaroon').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-maroon', 
                        title: 'Error',
                        autohide:true,
                        delay:5000,
                        subtitle: 'Not Accept',
                        body: "can not accept beacuse of students marks was empty"
                      })
                    });
                  });
                </script>
              <?php
  }
  
                    
}


if(isset($_GET['student_reject_id'])){
  $status = student_reject_assigment();
  if($status == "done"){
              ?>
                <script type="text/javascript">
                  window.location="show_assigment_submitted_list_to_lecturer.php?reject_id";
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
                        subtitle: 'Not Done',
                        body: "Oops Something went wrong"
                      })
                    });
                  });
                </script>
              <?php
  }
}

ob_end_flush();
?>