<?php
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

  <title>Submitted Assigments</title>

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
      }img{
        width: 50px;height: 50px;
      }b{
        font-weight: bold;
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
          <a href="student_profile.php" class="dropdown-item">
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
            <a href="assigment_category.php" class="nav-link active">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Assigments History
              </p>
            </a>
          </li>
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
            <?php
            if(isset($_GET['accepted_std_details_id'])){
              $a_id=$_GET['accepted_std_details_id'];
              $cn=db_connection();
                    $sql="SELECT * FROM `students_assigment_accepted` WHERE `id`='$a_id'";
                    $run=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run)>0){
                      $count_accepted=0;
                      while ($get_data=mysqli_fetch_assoc($run)) {
                        $id=$get_data['id'];
                        $std_name=$get_data['std_name'];
                        $std_email=$get_data['std_email'];
                        $std_mob=$get_data['std_mob'];
                        $std_img=$get_data['std_img'];
                        $std_assigment=$get_data['asssigment'];
                        $std_marks=$get_data['marks'];
                        $assigment_title=$get_data['title'];
                        $assigment_description=$get_data['description'];
                        $ass_due_date=$get_data['due_date'];
                        $ass_submit_date=$get_data['submition_date'];
                        $std_confirmation=$get_data['confirmation'];
                        $confirm_by=$get_data['confirm_by'];
                        $lec_email=$get_data['lec_email'];
                        $confirm_on=$get_data['confirm_on'];
                        $count_accepted+=1;
                      }
                      //getting std more info
                      $sql="SELECT * FROM `registred_students` WHERE `email`='$std_email'";
                      $getting=mysqli_query($cn,$sql);
                      if(mysqli_num_rows($getting)>0){
                        while ($get_std_info=mysqli_fetch_assoc($getting)) {
                          $std_department=$get_std_info['department'];
                          $std_faculty=$get_std_info['faculty'];
                          $std_semester=$get_std_info['semester'];
                        }
                      }
                    }
            }elseif (isset($_GET['rejected_std_details_id'])) {
              $b_id=$_GET['rejected_std_details_id'];
              $cn=db_connection();
                    $sql="SELECT * FROM `students_assigment_rejected` WHERE `id`='$b_id'";
                    $run_a=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run_a)>0){
                      $count_rejected=0;
                      while ($get_data_b=mysqli_fetch_array($run_a)) {
                        $id_r=$get_data_b['id'];
                        $std_name_r=$get_data_b['std_name'];
                        $std_email_r=$get_data_b['std_email'];
                        $std_mob_r=$get_data_b['std_mob'];
                        $std_img_r=$get_data_b['std_img'];
                        $std_assigmen_r=$get_data_b['asssigment'];
                        $std_marks_r=$get_data_b['marks'];
                        $std_title_r=$get_data_b['title'];
                        $std_description_r=$get_data_b['description'];
                        $ass_due_date_r=$get_data_b['due_date'];
                        $ass_submit_date_r=$get_data_b['submition_date'];
                        $std_confirmation_r=$get_data_b['confirmation'];
                        $confirm_by_r=$get_data_b['confirm_by'];
                        $lec_email_r=$get_data_b['lec_email'];
                        $confirm_on_r=$get_data_b['confirm_on'];
                        $count_rejected+=1;
                      }
                      //get assigment total marks
                      $sql_lec="SELECT * FROM `creat_assigment` WHERE `created_by`='$confirm_by_r' and `ass_name`='$std_assigmen_r'";
                      $run_lec=mysqli_query($cn,$sql_lec);
                      if($run_lec){
                        while ($get_lec=mysqli_fetch_array($run_lec)) {
                          $total_marks_r=$get_lec['ass_marks'];
                        }
                      }
                      //getting std more info
                      $sql="SELECT * FROM `registred_students` WHERE `email`='$std_email_r'";
                      $getting_a=mysqli_query($cn,$sql);
                      if(mysqli_num_rows($getting_a)>0){
                        while ($get_std_info=mysqli_fetch_assoc($getting_a)) {
                          $std_department_r=$get_std_info['department'];
                          $std_faculty_r=$get_std_info['faculty'];
                          $std_semester_r=$get_std_info['semester'];
                        }
                      }
                    }
            }
            ?>
          </div>
        </div>
        <!-- Content Header (Page header) -->
<?php
if(isset($_GET['accepted_std_details_id'])){
  ?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-success">
                <h4>
                    <img src="<?php echo $std_img; ?>" class="img-circle img-fluid" width="100%" height="100%"> <?php echo $std_name; ?>
                    <p style="margin-top: 20px; color: green;" class="float-right"><strong><i class="fas fa-check"></i> <?php echo $std_confirmation; ?></strong></p>
                  </h4>

                <!-- /.col -->
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <small class="float-right"><?php echo "Date : ". date('m/d/Y'); ?></small>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-info"></i> <b>Student Info</b><br><br>
                  <address>
                    Faculty : <?php echo "$std_faculty"; ?><br>
                    Department : <?php echo "$std_department"; ?><br>
                    Semester : <?php echo "$std_semester"; ?><br>
                    Phone : <?php echo "$std_mob"; ?><br>
                    Emil : <?php echo "$std_email"; ?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-info"></i> <b>Assigment Info</b><br><br>
                  <address>
                    <div style="background: lightgreen;">
                       Assigment : <?php echo "$std_assigment"; ?><br>
                    </div>
                   
                    Title : <?php echo "$assigment_title"; ?><br>
                    Descriptionn : <?php echo "$assigment_description"; ?><br>
                    <div style="background: lightgreen;">
                      Marks : <?php echo $std_marks; ?><br>
                    </div>
                    
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-info"></i> <b>Submission Info</b><br><br>
                    Due Date : <?php echo "$ass_due_date"; ?><br>
                    Submitted On : <?php echo "$ass_submit_date"; ?><br><br>
                    <div class="badge badge-info">
                    Submitted To : <?php echo "$confirm_by"; ?><br>
                    Email : <?php echo "$lec_email"; ?><br>
                    </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="student_assigment_details_print_lecturer.php?accepted_std_details_id=<?php echo $id ?>" target="_blank" class="btn btn-success float-right"><i class="fas fa-print"></i> Print</a>
                  <!-- <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> -->
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  <?php
}
if(isset($_GET['rejected_std_details_id'])){
?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-danger">
                <h4>
                    <img src="<?php echo $std_img_r; ?>" class="img-circle img-fluid" width="100%" height="100%"> <?php echo $std_name_r; ?>
                    <p style="color: red; margin-top: 20px;" class="float-right"><strong><i class="fas fa-times"></i> <?php echo $std_confirmation_r; ?></strong></p>
                  </h4>

                <!-- /.col -->
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <small class="float-right"><?php echo "Date : ". date('m/d/Y'); ?></small>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-info"></i> <b>Student Info</b><br><br>
                  <address>
                    Faculty : <?php echo "$std_faculty_r"; ?><br>
                    Department : <?php echo "$std_department_r"; ?><br>
                    Semester : <?php echo "$std_semester_r"; ?><br>
                    Phone : <?php echo "$std_mob_r"; ?><br>
                    Emil : <?php echo "$std_email_r"; ?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-info"></i> <b>Assigment Info</b><br><br>
                  <address>
                    Assigment : <?php echo "$std_assigmen_r"; ?><br>
                    Title : <?php echo "$std_title_r"; ?><br>
                    Descriptionn : <?php echo "$std_description_r"; ?><br>
                    Marks : <?php 

                   echo  $std_marks_r;
                    // if($std_marks_r > 0){
                    //   echo $std_marks_r." / ".$total_marks_r;
                    // }else{
                    //   echo "0 / ".$total_marks_r;
                    // } 

                    ?><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-info"></i> <b>Submission Info</b><br><br>
                    Due Date : <?php echo "$ass_due_date_r"; ?><br>
                    Submitted On : <?php echo "$ass_submit_date_r"; ?><br><br>
                    <div class="badge badge-info">
                    Submitted To : <?php echo "$confirm_by_r"; ?><br>
                    Email : <?php echo "$lec_email_r"; ?><br>
                    </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="student_assigment_details_print_lecturer.php?rejected_std_details_id=<?php echo $id_r ?>" target="_blank" class="btn btn-danger float-right"><i class="fas fa-print"></i> Print</a>
                  <!-- <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> -->
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?php
}
?>

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
      <a href="http://www.bkuc.edu.pk">www.bkuc.edu.pk</a>
    </div>
    <!-- Default to the left -->
    <strong>Developed by &copy; <a href="https://adminlte.io">AqibLodhi</a>.</strong> All rights reserved.
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
    $('#example2').DataTable();
  });
</script>
</body>
</html>