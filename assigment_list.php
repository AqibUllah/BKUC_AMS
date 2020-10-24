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
$_lec_name=$_SESSION["lecturer_logged_in"]["username"];
$sql="SELECT * FROM `creat_assigment` WHERE `created_by`='$_lec_name'";
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

  <title>Created Assigments</title>
  <link href="main.css" rel="stylesheet">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link href="main.css" rel="stylesheet">
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
          <i class="far fa-user-circle"></i>
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
          <a href="LogOff_page.php" class="dropdown-item bg-danger" style="text-align: center;">
            Log Out &nbsp;<i class="fas fa-arrow-right mr-2"></i>
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
          <a href="">
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
                <span class="right badge badge-info">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="assigment_list.php" class="nav-link active">
              <i class="nav-icon fas fa-check"></i>
              <p>
               Created Assigment
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="show_assigment_submitted_list_to_lecturer.php" class="nav-link">
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
        <center>
        <p align="content"><span class="badge badge-danger">
          <?php  
          if($count > 0){
            echo $count; ?> New </span> Assigments Created</p>
            <?php
          }else{
            echo  "No Assigments Avaliable";
          }
          ?>
          
        </center>
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
            <table id="example2" class="table table-bordere table-hover">
              <thead>
                <tr>
                <th style="text-align: center;">S.No</th>
                <th style="text-align: center;">Assigment</th>
                <th style="text-align: center;">Total Duration</th>
                <th style="text-align: center;">Marks</th>
                <th style="text-align: center;">Remaining Time</th>
                <th style="text-align: center;">Status</th>
                <th style="text-align: center;">Action</th>
              </tr>
              </thead><tbody>
              <?php
              $_lec_name=$_SESSION["lecturer_logged_in"]["username"];
              $sql="SELECT * FROM `creat_assigment` WHERE `created_by`='$_lec_name'";
              $run=mysqli_query($cn,$sql);
              $ass_count=0;
              while($get_data=mysqli_fetch_array($run)){
                $ass_count+=1;
                $marks = $get_data['ass_marks'];
                $start_date=substr($get_data['time_duration'],0,19);
                $last_date=substr($get_data['time_duration'], 22);
                $start = strtotime($start_date);
                $current=date("m/d/Y h:i:s A");
                $current=strtotime($current);
                //$time=time('H:ia');
                $end = strtotime($last_date);
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

                //$calc = $months+$days+$hours+$minutes;
                //$calc=($months+$days)/$hours*100;
                //$calc=($months+$days)/($minutes)*100;
                $calc = (($days*24)+$hours)*(100)/(($compare_days*24)+$compare_hours);
                ?>
                <tr>
                <td style="text-align: center;"><?php echo $ass_count; ?></td>
                <td style="text-align: center;"><?php echo $get_data['ass_name']; ?></td>
                <td style="text-align: center;"><?php echo "<i class='fas fa-clock'></i> ".$get_data['time_duration']; ?></td>
                <td style="text-align: center;"><?php echo $marks; ?></td>
               <td style="text-align: center;"><?php if($end>$current){echo "<i class='fas fa-clock'></i> ".$days." days ".$hours." hourse ".$minutes." minutes Remaining";}else{echo "<span class='badge badge-danger'>Time Out</span>";} ?></td>
               <?php if($end>$current){if($calc > 8.99){
                  echo "<td style='text-align:center;'><span class='badge badge-primary'>in progress</span><br><br>
                  <div class='progress progress-sm bg-secondary' style='height:3px;'>
                        <div class='progress-bar bg-primary' style='width: $calc%;'></div>
                      </div>
                  </td>";
                }else{echo "<td style='text-align:center;'><span class='badge badge-danger bg-maroon'>some time left</span><br><br>
                  <div class='progress progress-sm bg-default' style='height:3px;'>
                        <div class='progress-bar bg-maroon' style='width: $calc%;'></div>
                      </div>
                  </td>";}}else{echo "<td style='text-align:center;'><span class='badge badge-danger'>Expired</span></td>";} ?>
                <form method="get" action="assigment_edit.php">
                <td style="text-align: center;" class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                  <a href="assigment_view.php?get_id=<?php echo $get_data['id']; ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <a href="assigment_edit.php?edit_id=<?php echo $get_data['id']; ?>" class="btn btn-warning">
                  <i class="fas fa-edit"></i></a>
                <a href="?remove_id=<?php echo $get_data['id']; ?>" class="btn btn-danger">
                  <i class="fas fa-trash"></i></a>
                </div>
              </td>
                </form>
              </tr>             
                <?php
              }
              ?></tbody>
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


ob_end_flush();
?>
