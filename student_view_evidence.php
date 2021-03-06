<?php
ob_start();
session_start();
   if(isset($_SESSION["lecturer_logged_in"])){
          }else{
            header("location:login_page.php");
          }
?>

<?php
include 'db_page.php';
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

  <title>Submitted Assigments</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link href="main.css" rel="stylesheet">
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
          <a href="student_profile.php">
          <?php
            if(isset($_SESSION["lecturer_logged_in"])){
              echo $_SESSION["lecturer_logged_in"]["username"];
            }
          ?>
        </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
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
              <i class="right fas fa-angle-double-right fa-lg"></i>
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
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12">
                <!-- write or design something in 12 columns -->
                <?php
                if(isset($_GET['student_id'])){
                  $pk=$_GET['student_id'];
                  $sql="SELECT * FROM `submit_assigments` WHERE `primary_key`='$pk'";
                    $get=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($get)>0){
                      while ($get_submit_data=mysqli_fetch_array($get)) {
                        $id_a=$get_submit_data['std_id'];
                        $submitted_date_on=$get_submit_data['submitted_on'];
                        $pk=$get_submit_data['primary_key'];
                        $std_assigment_title=$get_submit_data['title'];
                        $std_assigment_description=$get_submit_data['description'];
                        $fk_assigment=$get_submit_data['assigment'];
                      }

                      $sql="SELECT * FROM `student_whose_submitted` WHERE `id`='$id_a'";
                      $run=mysqli_query($cn,$sql);
                      while($get_data=mysqli_fetch_array($run)){
                        $submitted_id=$get_data['id'];
                        $std_image=$get_data['std_img'];
                        $student_name=$get_data['std_name'];
                        $student_email=$get_data['email'];
                        $student_department=$get_data['department'];
                        $student_semester=$get_data['semester'];
                        $student_submitted_Date=$get_data['submitted_date'];
                        $student_faculty=$get_data['faculty'];
                        $assigment_submitted_date=$get_data['submitted_date'];
                        //$assigment_count+=1;
                      }
                    }

                  
                ?>

                <div class="row">
                  <div class="col-lg-6 col-md-6">
                              <!-- About Me Box -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title text-white">Student Information</h3>
                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                        </button>                  
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="text-center">
                          <img class="profile-user-img img-fluid img-circle"
                               src="<?php echo $std_image; ?>"
                               alt="User profile picture">
                               <h3 class="text-muted profile-username text-center">
                                  <?php echo $student_name; ?>
                               </h3>
                        </div>
                        <hr>
                        <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                        <p class="text-muted">
                          <?php echo $student_email; ?>
                        </p>

                        <hr>

                        <strong><i class="fas fa-star mr-1"></i> Department</strong>

                        <p class="text-muted"><?php echo $student_department; ?></p>

                        <hr>

                        <strong><i class="fas fa-tachometer-alt mr-1"></i> Semester</strong>

                        <p class="text-muted">
                          <?php echo $student_semester; ?>
                        </p>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <?php

                    $sql="SELECT * FROM `submit_assigments` WHERE `std_id`='$id_a' and `assigment`='$fk_assigment'";
                    $getting=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($getting)>0){
                      while ($get_submit_data=mysqli_fetch_array($getting)) {
                        $id_b=$get_submit_data['std_id'];
                        $submitted_date_on=$get_submit_data['submitted_on'];
                        $pk=$get_submit_data['primary_key'];
                        $fk_assigment=$get_submit_data['assigment'];
                      }
                    }

                    $sql="SELECT * FROM `attach_evidences` WHERE `id`='$id_a' and `assigment`='$fk_assigment'";
                    $getting=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($getting)>0){
                      while ($get_submit_data=mysqli_fetch_array($getting)) {
                        $id_b=$get_submit_data['id'];
                        $fk_assigment=$get_submit_data['assigment'];
                        $fk_assigment_files=$get_submit_data['files'];
                      }
                    }
                  
                  ?>

                    <div class="col-lg-6 col-md-6">
                      <!-- Profile Image -->
                      <div class="card card-danger">
                        <div class="card-header">
                          <h3 class="card-title text-white">Evidence</h3>
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body box-profile">
                          <div class="text-center">
                            <a href="preview_pdf.php?view_evidence_id=<?php echo $pk; ?>" class="btn btn-secondary">Open Evidence <span class="fas fa-file"></span></a>
                          </div>
                          <h3 class="profile-username text-center"><?php echo $fk_assigment;?></h3>
                            
                          <hr>
                          <h3 class="profile-username">Title</h3>
                          <p class="text-muted"><?php echo $std_assigment_title;?></p>
                          <hr>
                          <h3 class="profile-username">Description</h3>
                          <p class="text-muted"><?php echo $std_assigment_description;?></p>
                          <hr>
                          <h3 class="profile-username">Submitted Date</h3>
                          <p class="text-muted"><?php echo $submitted_date_on;?></p>
                          <center>
                            <div class="row">
                              <div class="col-md-6">
                                <a href="#" class="btn btn-danger btn-block">Reject</a>
                              </div>
                              <div class="col-md-6">
                                <a href="#" class="btn btn-success btn-block">Accept</a>
                              </div>
                            </div>
                            
                            
                          </center>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>

                    
                </div>
                <?php
              }elseif(isset($_GET['student_id_2'])){
                  $pk=$_GET['student_id_2'];
                  $sql="SELECT * FROM `re_submit_assignments` WHERE `p_k`='$pk'";
                    $get=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($get)>0){
                      while ($get_submit_data=mysqli_fetch_array($get)) {
                        $id_a=$get_submit_data['f_k'];
                        $submitted_date_on=$get_submit_data['re_submiited_on'];
                        $pk=$get_submit_data['p_k'];
                        $std_assigment_title=$get_submit_data['title'];
                        $std_assigment_description=$get_submit_data['descr'];
                        $fk_assigment=$get_submit_data['assignment'];
                      }

                      $sql="SELECT * FROM `student_whose_submitted` WHERE `id`='$id_a'";
                      $run=mysqli_query($cn,$sql);
                      while($get_data=mysqli_fetch_array($run)){
                        $submitted_id=$get_data['id'];
                        $std_image=$get_data['std_img'];
                        $student_name=$get_data['std_name'];
                        $student_email=$get_data['email'];
                        $student_department=$get_data['department'];
                        $student_semester=$get_data['semester'];
                        $student_submitted_Date=$get_data['submitted_date'];
                        $student_faculty=$get_data['faculty'];
                        $assigment_submitted_date=$get_data['submitted_date'];
                        //$assigment_count+=1;
                      }
                    }

                  
                ?>

                <div class="row">
                  <div class="col-lg-6 col-md-6">
                              <!-- About Me Box -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title text-white">Student Information</h3>
                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                        </button>                  
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="text-center">
                          <img class="profile-user-img img-fluid img-circle"
                               src="<?php echo $std_image; ?>"
                               alt="User profile picture">
                               <h3 class="text-muted profile-username text-center">
                                  <?php echo $student_name; ?>
                               </h3>
                        </div>
                        <hr>
                        <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                        <p class="text-muted">
                          <?php echo $student_email; ?>
                        </p>

                        <hr>

                        <strong><i class="fas fa-star mr-1"></i> Department</strong>

                        <p class="text-muted"><?php echo $student_department; ?></p>

                        <hr>

                        <strong><i class="fas fa-tachometer-alt mr-1"></i> Semester</strong>

                        <p class="text-muted">
                          <?php echo $student_semester; ?>
                        </p>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <?php

                    $sql="SELECT * FROM `re_submit_assignments` WHERE `f_k`='$id_a' and `assignment`='$fk_assigment'";
                    $getting=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($getting)>0){
                      while ($get_submit_data=mysqli_fetch_array($getting)) {
                        $id_b=$get_submit_data['f_k'];
                        $submitted_date_on=$get_submit_data['re_submiited_on'];
                        $pk=$get_submit_data['p_k'];
                        $fk_assigment=$get_submit_data['assignment'];
                      }
                    }

                    $sql="SELECT * FROM `re_submitted_attachments` WHERE `f_k`='$id_a' and `assignment`='$fk_assigment'";
                    $getting=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($getting)>0){
                      while ($get_submit_data=mysqli_fetch_array($getting)) {
                        $id_b=$get_submit_data['f_k'];
                        $fk_assigment=$get_submit_data['assignment'];
                        $fk_assigment_files=$get_submit_data['files'];
                      }
                    }
                  
                  ?>

                    <div class="col-lg-6 col-md-6">
                      <!-- Profile Image -->
                      <div class="card card-danger">
                        <div class="card-header">
                          <h3 class="card-title text-white">Evidence</h3>
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body box-profile">
                          <div class="text-center">
                            <a href="preview_pdf.php?view_evidence_id_2=<?php echo $pk; ?>" class="btn btn-secondary">Open Evidence <span class="fas fa-file"></span></a>
                          </div>
                          <h3 class="profile-username text-center"><?php echo $fk_assigment;?></h3>
                            
                          <hr>
                          <h3 class="profile-username">title</h3>
                          <p class="text-muted"><?php echo $std_assigment_title;?></p>
                          <hr>
                          <h3 class="profile-username">Description</h3>
                          <p class="text-muted"><?php echo $std_assigment_description;?></p>
                          <hr>
                          <h3 class="profile-username">Submitted Date</h3>
                          <p class="text-muted"><?php echo $submitted_date_on;?></p>
                          <center>
                            <div class="row">
                              <div class="col-md-6">
                                <a href="#" class="btn btn-danger btn-block">Reject</a>
                              </div>
                              <div class="col-md-6">
                                <a href="#" class="btn btn-success btn-block">Accept</a>
                              </div>
                            </div>
                            
                            
                          </center>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>

                    
                </div>
                <?php
              }
              else{
                echo "<h1 style='text-align:center;color:grey;'>Oops! Evidence Not Found Something Went Wrong</h1>";
                  }
                ?>
              
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
<?php
ob_end_flush();
?>
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
