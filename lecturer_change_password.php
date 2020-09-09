<?php
session_start();
   if(isset($_SESSION["lecturer_logged_in"])){
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

  <title>Change Passsword</title>

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
          <a href="lecturer_profile.php">
          <?php
            if(isset($_SESSION["lecturer_logged_in"])){
              echo $_SESSION["lecturer_logged_in"]["username"];
            }
          ?></a>
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
            <a href="assigment_list.php" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Created Assigments
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Account Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lecturer_profile.php" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="lecturer_change_password.php" class="nav-link active">
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

    <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-3"></div>
          <div class="col-lg-4 col-md-6">
                        <div class="card card-maroon">
                          <div class="card-header">
                            <h3 class="card-title">Password Recovery</h3>
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                  <i class="fas fa-minus"></i>
                              </button>                  
                            </div>
                          </div>
                          <div class="card-body">
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                              <div class="form-group">
                              <input type="password" name="old_pass" class="form-control" placeholder="Old Password">                                
                              </div>
                              <div class="form-group">
                                <input type="submit" name="btn_check_pass" class="btn btn-danger btn-block" value="Check" style="font-size: 18px;">
                              </div>
                              
                            </form>
                          </div>
                        </div>

                        <?php
if(isset($_POST['btn_check_pass'])){
  include('functions_page.php');
  $status = input_recieved($_POST);
  if($status === true){
    include 'db_page.php';
    $status = check_old_pass_lecturer();
    if($status === true){
      ?>
                      <form method="post" action="#">
                        <div class="card card-info">
                          <div class="card-header">
                            <h3 class="card-title">Change Password</h3>
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                  <i class="fas fa-minus"></i>
                              </button>                  
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="form-group">
                              <input type="password" name="new_pass" class="form-control" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                              <input type="password" name="confirm_pass" class="form-control" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                              <input type="submit" name="btn_change_pass" class="btn btn-info btn-block" value="Chage" style="font-size: 18px;">
                            </div>
                          </div>
                        </div>
      </form>

      <?php
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
                  subtitle: 'null field',
                  body: "Old password was <strong>DIDN'T MATCHED</strong>."
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
              $('.toastsDefaultDanger').ready(function() {
                $(document).Toasts('create', {
                  position: 'topRight',
                  class: 'bg-danger', 
                  autohide : true,
                  delay    : 4000,
                  title: 'Error',
                  subtitle: 'null field',
                  body: 'Old password should be <strong>REQUIRED</strong>.'
                })
              });
        });
      </script>
  <?php
  }
}
?>
                    
          </div>
          <div class="col-lg-4 col-md-3"></div>
        </div>
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

<script type="text/javascript">
$("input[type=password]").keyup(function(){
    var ucase = new RegExp("[A-Z]+");
  var lcase = new RegExp("[a-z]+");
  var num = new RegExp("[0-9]+");
  
  if($("#password1").val().length >= 8){
    $("#8char").removeClass("glyphicon-remove");
    $("#8char").addClass("glyphicon-ok");
    $("#8char").css("color","#00A41E");
  }else{
    $("#8char").removeClass("glyphicon-ok");
    $("#8char").addClass("glyphicon-remove");
    $("#8char").css("color","#FF0004");
  }
  
  if(ucase.test($("#password1").val())){
    $("#ucase").removeClass("glyphicon-remove");
    $("#ucase").addClass("glyphicon-ok");
    $("#ucase").css("color","#00A41E");
  }else{
    $("#ucase").removeClass("glyphicon-ok");
    $("#ucase").addClass("glyphicon-remove");
    $("#ucase").css("color","#FF0004");
  }
  
  if(lcase.test($("#password1").val())){
    $("#lcase").removeClass("glyphicon-remove");
    $("#lcase").addClass("glyphicon-ok");
    $("#lcase").css("color","#00A41E");
  }else{
    $("#lcase").removeClass("glyphicon-ok");
    $("#lcase").addClass("glyphicon-remove");
    $("#lcase").css("color","#FF0004");
  }
  
  if(num.test($("#password1").val())){
    $("#num").removeClass("glyphicon-remove");
    $("#num").addClass("glyphicon-ok");
    $("#num").css("color","#00A41E");
  }else{
    $("#num").removeClass("glyphicon-ok");
    $("#num").addClass("glyphicon-remove");
    $("#num").css("color","#FF0004");
  }
  
  if($("#password1").val() == $("#password2").val()){
    $("#pwmatch").removeClass("glyphicon-remove");
    $("#pwmatch").addClass("glyphicon-ok");
    $("#pwmatch").css("color","#00A41E");
  }else{
    $("#pwmatch").removeClass("glyphicon-ok");
    $("#pwmatch").addClass("glyphicon-remove");
    $("#pwmatch").css("color","#FF0004");
  }
});  
</script>

</body>
</html>
<?php
if(isset($_POST['btn_change_pass'])){
  include('functions_page.php');
  $status = input_recieved($_POST);
  if($status === true){
    include 'db_page.php';
    $status = lecturer_password_change();
    if($status === true){
      ?>
  <script type="text/javascript">
        $(document).ready(function(){
              $('.toastsDefaultSuccess').ready(function() {
                $(document).Toasts('create', {
                  position: 'topRight',
                  class: 'bg-success', 
                  autohide : true,
                  delay    : 4000,
                  title: 'Done',
                  subtitle: 'changed',
                  body: "Password Changed <strong>Successfully</strong>."
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
                      position: 'topRight',
                      class: 'bg-danger', 
                      autohide : true,
                      delay    : 4000,
                      title: 'Error',
                      subtitle: 'new & confirm',
                      body: "New & Confirm password was <strong>didn't matched</strong>."
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
                  position: 'topRight',
                  class: 'bg-maroon', 
                  autohide : true,
                  delay    : 4000,
                  title: 'Error',
                  subtitle: 'null password',
                  body: "Empty password <strong>can't be changed</strong>."
                })
              });
        });
      </script>
  <?php
  }
}
?>
