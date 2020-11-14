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
      }#reject_to{
        border-radius: 20px;
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
                              icon    : 'fas fa-check-circle fa-lg',
                              body: "Assigment has been Rejected"
                            })
                          });
                        });
                        
                      </script>
                    <?php
                    }elseif(isset($_GET['done_reject_again'])){
                      ?>
                        <script type="text/javascript">
                          $(document).ready(function(){
                            $('.toastsDefaultPurple').ready(function() {
                              $(document).Toasts('create', {
                                class: 'bg-purple', 
                                title: 'Again Rejected',
                                autohide:true,
                                delay:5000,
                                subtitle: 'Again Done',
                                icon    : 'fas fa-check-circle fa-lg',
                                body: "Once again you rejected this assignment"
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
                  $sql_r="SELECT * FROM `re_submit_assignments` WHERE `submitted_to`='$lec_name'";
                  $run_r=mysqli_query($cn,$sql_r);

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
                    $student_img=$get_data_a['std_img'];
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
                       <tr id="<?php echo $primary_key; ?>">
                      <td><?php echo $assigment_count; ?></td>
                      <td><?php echo $student_name; ?></td>
                      <td><?php echo $submitted_assigment; ?></td>
                      <td><?php echo $submitted_on; ?></td>
                      <form method="post">
                      <td>
                        <input type="text" placeholder="student marks / <?php echo $total_marks ?>" name="std_marks" class="form-control">
                        </td>
                      <td>

                          <a href="student_view_evidence.php?student_id=<?php echo $primary_key; ?>" class="btn btn-primary">View Evidence</a>
                          <!-- <a href="?student_reject_id=<?php //echo $primary_key; ?>" class="btn btn-danger">Reject</a> -->
                          <a href="#view_assigment_model" class="" data-toggle="modal">
                          <i class="fas fa-times-circle fa-lg view" data-toggle="tooltip" 
                            ass-id="<?php echo $primary_key; ?>"
                            std-name="<?php echo $student_name; ?>"
                            std-img="<?php echo $student_img; ?>"
                            title="reject assignment"></i></a>

                          
                            <input type="hidden" name="h_value" id="h_value" value="<?php echo $primary_key; ?>">
                          <input type="submit" name="btn_accept" id="btn_accept" value="Accept" class="btn btn-success">
                          </form>
                      </td>

                      <!-- model assigment information -->
                      <div class="modal fade" id="view_assigment_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <form method="post">
                              <div class="modal-header bg-danger">
                                <p class="modal-title" id="exampleModalLabel">Assignment Rejecting</p>
                                <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              
                              <div class="modal-body">
                                <input type="hidden" name="assigment_id" id="id_v">
                                <p class="badge badge-maroon bg-maroon" style="border-radius: 20px;padding: 5px;">Rejecting To : </p>&nbsp;<input type="text" style="border:none;border-radius: 20px;padding-left: 10px;" name="" class="bg-danger" id="student_name_v">
                                <div class="form-group">
                                  <textarea name="txt_reject_reason" placeholder="Why? type some reasons.." class="form-control"></textarea>
                                </div>
                              </div>
                              <div class="modal-footer bg-light">
                                <button type="button" class="btn btn-danger btn-float" data-dismiss="modal">Close</button>

                                <!-- <input type="submit" name="btn_reject_done" value="Reject Assignment" class="btn btn-danger btn-float btn-block"> -->
                                <button type="submit" class="btn btn-danger btn-float btn-block" name="reject_assigment">Reject Assignment</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </tr>
                    
                    <?php

                      } // end while

                    } // end while
                  }if (mysqli_num_rows($run_r)>0) {
                    while ($get_data_r=mysqli_fetch_array($run_r)) {
                    $assigment_count+=1;
                    $_id=$get_data_r['f_k'];
                    $student_email=$get_data_r['std_email'];
                    $student_assignment=$get_data_r['assignment'];
                    $description=$get_data_r['descr'];
                    $title=$get_data_r['title'];
                    $student_re_submited_on=$get_data_r['re_submiited_on'];
                    $pk=$get_data_r['p_k'];
                    $assigment_re_submitted_to=$get_data_r['submitted_to'];

                    //this query for just getting total marks of every assignment
                    $sql="SELECT * FROM `creat_assigment` WHERE `created_by`='$lec_name' and `ass_name`='$student_assignment'";
                    $run_f=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run_f)>0){
                      while ($get_data_f=mysqli_fetch_array($run_f)) {
                        $total_marks = $get_data_f['ass_marks'];
                      }
                    }
                    //this query is just for getting every student name
                    $sql="SELECT * FROM `student_whose_submitted` WHERE `id`='$_id'";
                    $run=mysqli_query($cn,$sql);
                    while($get_data_g=mysqli_fetch_assoc($run)){
                      $student_name_r=$get_data_g['std_name'];
                    }

                    ?>
                       <tr id="<?php echo $primary_key; ?>">
                      <td><?php echo $assigment_count; ?></td>
                      <td><?php echo $student_name_r; ?></td>
                      <td><?php echo $student_assignment; ?></td>
                      <td><?php echo "<span class='badge badge-purple bg-purple badge-pill' style='font-family:verdana;'>Re-Submitted : $student_re_submited_on</span>"; ?></td>
                      <form method="post">
                      <td>
                        <input type="text" placeholder="student marks / <?php echo $total_marks ?>" name="std_marks" class="form-control">
                        </td>
                      <td>

                          <a href="student_view_evidence.php?student_id_2=<?php echo $pk; ?>" class="btn btn-primary">View Evidence</a>
                          <!-- <a href="?student_reject_id=<?php //echo $primary_key; ?>" class="btn btn-danger">Reject</a> -->
                          <a href="#view_assigment_model" class="" data-toggle="modal">
                          <i class="fas fa-times-circle fa-lg view" data-toggle="tooltip" 
                            ass-id="<?php echo $pk; ?>"
                            std-name="<?php echo $student_name_r; ?>"
                            title="Assignment reject again"></i></a>

                          
                            <input type="hidden" name="h_value" id="h_value" value="<?php echo $pk; ?>">
                          <input type="submit" name="btn_accept_again" id="btn_accept" value="Accept" class="btn btn-success">
                          </form>
                      </td>

                      <!-- model assigment information -->
                      <div class="modal fade" id="view_assigment_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <form method="post">
                              <div class="modal-header bg-danger">
                                <p class="modal-title" id="exampleModalLabel">Assignment Rejecting</p>
                                <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              
                              <div class="modal-body">
                                <input type="hidden" name="assigment_id" id="id_v">
                                <p class="badge badge-maroon bg-maroon" style="border-radius: 20px;padding: 5px;">Rejecting To : </p>&nbsp;<input type="text" style="border:none;border-radius: 20px;padding-left: 10px;" name="" class="bg-danger" id="student_name_v">
                                <div class="form-group">
                                  <textarea name="txt_reject_reason" placeholder="Why? type some reasons.." class="form-control"></textarea>
                                </div>
                              </div>
                              <div class="modal-footer bg-light">
                                <button type="button" class="btn btn-danger btn-float" data-dismiss="modal">Close</button>

                                <!-- <input type="submit" name="btn_reject_done" value="Reject Assignment" class="btn btn-danger btn-float btn-block"> -->
                                <button type="submit" class="btn btn-danger btn-float btn-block" name="reject_assigment">Reject Assignment</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </tr>
                    
                    <?php
                    }
                  } // end if
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
  
</div>
<!-- ./wrapper -->

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
    var std_name=$(this).attr("std-name");
    var std_img=$(this).attr("std-img");
    $('#id_v').val(ass_id);
    $('#student_name_v').val(std_name);
    $('#std_img_v').val(std_img);
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

if(isset($_POST["btn_accept_again"])){
  include('functions_page.php');
  $std_marks=$_POST['std_marks'];
  //$status = input_recieved($_POST['std_marks']);
  if($std_marks != "" or $std_marks != null){
    $status = student_accept_assigment_again();
    if($status == "done"){
      ?>
                <script type="text/javascript">
                  window.location="show_assigment_submitted_list_to_lecturer.php?success_id";
                </script>
              <?php

    }elseif ($status == "old_info_delettion_error") {
      ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('.toastsDefaultMaroon').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-maroon', 
                        title: 'Not Done',
                        autohide:true,
                        delay:5000,
                        subtitle: 'Error',
                        body: "Oops! Previous Info about this student can not delete"
                      })
                    });
                  });
                </script>
              <?php
    }elseif ($status == "evidence not delete") {
      ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('.toastsDefaultDanger').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-danger', 
                        title: 'Not Done',
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

if(isset($_POST['reject_assigment'])){
  if($_POST['txt_reject_reason'] != null or $_POST['txt_reject_reason'] != ""){
      $status = student_reject_assigment();
  if($status == "done"){
              ?>
                <script type="text/javascript">
                  window.location="show_assigment_submitted_list_to_lecturer.php?reject_id";
                </script>
              <?php
  }else if($status == "rejected_again"){
    header("location:show_assigment_submitted_list_to_lecturer.php?done_reject_again");
  }else if($status == "already_rejected"){
    ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('.toastsDefaultMaroon').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-maroon', 
                        title: 'Alreay Rejected',
                        autohide:true,
                        delay:5000,
                        subtitle: 'Not Done',
                        icon    : 'fas fa-info fa-lg',
                        body: "This assignment was already rejected"
                      })
                    });
                  });
                </script>
              <?php
  }
  else{
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
                        icon    : 'fas fa-times-circle fa-lg',
                        body: "Oops Something went wrong"
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
                    $('.toastsDefaultPurple').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-purple', 
                        title: 'Error',
                        autohide:true,
                        delay:6000,
                        subtitle: 'Not Done',
                        icon    : 'fas fa-times-circle fa-lg',
                        body: "Reason was not set plz type some reasons and then try again"
                      })
                    });
                  });
                </script>
              <?php
  }

}

ob_end_flush();
?>