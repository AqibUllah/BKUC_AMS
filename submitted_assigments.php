<?php
ob_start();
session_start();
   if(isset($_SESSION["student_logged_in"])){
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
          <a href="change_password.php" class="dropdown-item">
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
                <a href="students_new_assigments.php" class="nav-link">
                  <i class="fas fa-ad nav-icon"></i>
                  <p>New Assigments</p>
                  <span class="right badge badge-danger"><?php echo $count; ?></span>
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
            <a href="submitted_assigments.php" class="nav-link active">
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
                <?php
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
                  
                  
                ?>
            <div class="table-responsive">
            <table id="example2" class="table table-bordere table-hover">
              <thead>
                <tr>
                <th>S.No</th>
                <th style="text-align: center;">Assigment</th>
                <!-- <th style="text-align: center;">Due date</th> -->
                <th style="text-align: center;">Submnitted on</th>
                <th style="text-align: center;">Status</th>
                <th style="text-align: center;">Confirmation</th>
                <th style="text-align: center;">Action</th>
              </tr>
              </thead>
                <tbody>
                  <?php
                  //get accepted data
                  $sql1="SELECT * FROM `students_assigment_accepted` WHERE `std_email`='$std_email'";
                  $run1=mysqli_query($cn,$sql1);

                  //get rejected data
                  $sql2="SELECT * FROM `students_assigment_rejected` WHERE `std_email`='$std_email'";
                  $run2=mysqli_query($cn,$sql2);

                  //get pending data
                  $sql3="SELECT * FROM `submit_assigments` WHERE `std_id`='$_id'";
                  $run3=mysqli_query($cn,$sql3);


                  $total_counts=0;
                  if(mysqli_num_rows($run1)>0){
                    while ($get_data_b=mysqli_fetch_array($run1)) {
                        $id_a=$get_data_b['id'];
                        $std_name=$get_data_b['std_name'];
                        $std_email=$get_data_b['std_email'];
                        $std_mob=$get_data_b['std_mob'];
                        $std_img=$get_data_b['std_img'];
                        $std_assigmen=$get_data_b['asssigment'];
                        $std_marks=$get_data_b['marks'];
                        $std_title=$get_data_b['title'];
                        $std_description=$get_data_b['description'];
                        $ass_due_date=$get_data_b['due_date'];
                        $ass_submit_date=$get_data_b['submition_date'];
                        $std_confirmation=$get_data_b['confirmation'];
                        $confirm_by=$get_data_b['confirm_by'];
                        $lec_email=$get_data_b['lec_email'];
                        $confirm_on=$get_data_b['confirm_on'];
                        $total_counts+=1;
                        ?>
                        <tr>
                          <td><?php echo $total_counts; ?></td>
                          <td><?php echo $std_assigmen; ?></td>
                          <td><?php echo $ass_submit_date; ?></td>
                          <td><?php echo "<span class='badge badge-success'>Completed</span>";?></td>
                          <td><?php echo "<span class='badge badge-purple bg-purple'>$std_confirmation</span>";?></td>
                          <td class="text-center py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                              <a href="student_view_submitted.php?get_std_acpt_id=<?php echo $id_a; ?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                              <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                              <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              
                            </div>
                          </td>
                        </tr>
                        <?php

                      }
                  }if (mysqli_num_rows($run2)>0) {
                    while ($get_data_c=mysqli_fetch_array($run2)) {
                        $id_r=$get_data_c['id'];
                        $std_name=$get_data_c['std_name'];
                        $std_email=$get_data_c['std_email'];
                        $std_mob=$get_data_c['std_mob'];
                        $std_img=$get_data_c['std_img'];
                        $std_assigmen=$get_data_c['asssigment'];
                        $std_marks=$get_data_c['marks'];
                        $std_title=$get_data_c['title'];
                        $std_description=$get_data_c['description'];
                        $ass_due_date=$get_data_c['due_date'];
                        $ass_submit_date=$get_data_c['submition_date'];
                        $std_confirmation=$get_data_c['confirmation'];
                        $confirm_by=$get_data_c['confirm_by'];
                        $lec_email=$get_data_c['lec_email'];
                        $confirm_on=$get_data_c['confirm_on'];
                        $total_counts+=1;
                        ?>
                        <tr>
                          <td><?php echo $total_counts; ?></td>
                          <td><?php echo $std_assigmen; ?></td>
                          <td><?php echo $ass_submit_date; ?></td>
                          <td><?php echo "<span class='badge badge-success'>Completed</span>";?></td>
                          <td><?php echo "<span class='badge badge-maroon bg-maroon'>$std_confirmation</span>";?></td>
                          <td class="text-center py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                              <a href="student_view_submitted.php?get_std_rjt_id=<?php echo $id_r; ?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                              <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                              <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              
                            </div>
                          </td>
                        </tr>
                        <?php

                      }
                  }
                    if(mysqli_num_rows($run3)>0){
                      while($get_data_d=mysqli_fetch_array($run3)){
                      $submitted_id=$get_data_d['std_id'];
                      $submitted_assigment=$get_data_d['assigment'];
                      $submitted_on=$get_data_d['submitted_on'];
                      $pk=$get_data_d['primary_key'];
                      $total_counts+=1;
                      

                        ?>
                        <tr>
                          <td><?php echo $total_counts; ?></td>
                          <td><?php echo $submitted_assigment; ?></td>
                          <td><?php echo $submitted_on; ?></td>
                          <td><?php echo "<span class='badge badge-success'>Completed</span>";?></td>
                          <td><?php echo "<span class='badge badge-primary'>pending</span>";?></td>
                          <td class="text-center py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                              <a href="student_view_submitted.php?get_std_view_id=<?php echo $pk; ?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                              <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                              <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                              
                            </div>
                          </td>
                        </tr>
                        <?php
                      }
                    }
                  
                  }else{
                    ?>
                    <div class="callout callout-info">
                        <h4 style="margin-top: 12px;">
                            <i class="fas fa-info-circle"></i> You don't have any submitted assigments
                            
                          </h4>

                        <!-- /.col -->
                    </div>
                    <?php
                  }
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
