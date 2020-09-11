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

  <title>Creat Assigment</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
      label{
        padding: 9px 30px;
        border: 3px solid #ffc872;
        border-radius: 8px;
        font-size: 13px;
        background-color: maroon;
        cursor: hand;
        text-transform: uppercase;
        letter-spacing: 2px;
        color:#ffc872;
      }
      label:hover{
        transform: scale(1.04);
      }label.active{
        background-color: #ffc872;
        color: black;
      }label span{
        font-weight: normal;
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
            <a href="creat_assigment.php" class="nav-link active">
              <i class="nav-icon fas fa-file"></i>
              <p>
                New Assigment
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
        <center>
          <div class="card card-dark">
            <div class="card-header">
              <div class="row">
                <div class="col-md-7">
                  <form method="post" enctype="multipart/form-data"
                   action="<?php print $_SERVER['PHP_SELF']?>">
                  <h4>Set Assigment duration</h4>
                  <div class="form-group">
                    <div class="input-group" name="txt_duration">
                    <input type="text" name="txt_duration" id="reservationtime" class="form-control">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <h4>Set Assigment Marks</h4>
                  <input type="text" name="assimgent_marks" placeholder="Total Marks" class="form-control">
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <select name="select_faculty" class="form-control">
                            <option disabled selected value ="Faculty">Faculty</option>
                            <option value="Management Science" name="select_faculty">Management Science</option>
                            <option value="Agriculture" name="select_faculty">Agriculture</option>
                            <option value="Social Science" name="select_faculty">Social Science</option>
                            <option value="Arts" name="select_faculty">Arts</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <select name="select_department" class="form-control">
                            <option disabled selected value ="Department" name="select_department">Department</option>
                            <option value="Computer Science" name="select_department">Computer Science</option>
                            <option value="Chemistry" name="select_department">Chemistry</option>
                            <option value="Botany" name="select_department">Botany</option>
                            <option value="English" name="select_department">English</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <select name="select_semester" class="form-control" required>
                            <option disabled selected value ="Semester">Semester</option>
                            <option value="Semester 1st" name="select_semester">Semester 1st</option>
                            <option value="Semester 2nd" name="select_semester">Semester 2nd</option>
                            <option value="Semester 3rd" name="select_semester">Semester 3rd</option>
                            <option value="Semester 4th" name="select_semester">Semester 4th</option>
                            <option value="Semester 5th" name="select_semester">Semester 5th</option>
                            <option value="Semester 6th" name="select_semester">Semester 6th</option>
                            <option value="Semester 7th" name="select_semester">Semester 7th</option>
                            <option value="Semester 8th" name="select_semester">Semester 8th</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" name="txt_batch" placeholder="Batch No" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" name="txt_assgmnt_name" placeholder="Assgiemnt Name" class="form-control">
                    </div>
                    <div class="form-group">
                      <input type="text" name="txt_session" placeholder="Academic Session" class="form-control">
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <textarea class="form-control rounded-0" name="txt_message" id="exampleFormControlTextarea2" rows="3"
                          placeholder="Enter Some Message"></textarea>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="submit" name="btn_reset" value="Reset" class="btn btn-danger btn-block">
                          <input type="submit" name="btn_submit" value="Upload" class="btn btn-success btn-block">
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                  <card class="card-body">
                    <div style="clear:both">
                       <iframe id="viewer" frameborder="0" scrolling="no" onchange="readURL(this);" width="300" height="200"></iframe>
                    </div>
                  </card>
                  <div class="card-footer">
                    <input type="file" id="upload_pdf" name="file" hidden onchange="readURL(this);" value="Document" class="btn btn-info" accept="application/pdf">
                    <a href="#viewer" value="Preview" class="btn btn-secondary" onchange="readURL(this);" onclick="PreviewImage();">Preview</a>
                    <label for="upload_pdf" id="selector">ANY  PDF FILE</label>
                          <script type="text/javascript">
                            var loader = function(e){
                            let file = e.target.files;
                            let show = "<span>Selected File : </span>"+file[0].name;
                            let output = document.getElementById("selector");
                            output.innerHTML=show;
                            output.classList.add("active");
                            };
                            let fileinput = document.getElementById("upload_pdf");
                            fileinput.addEventListener("change",loader);
                          </script>
                          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
        </center>
      </div><!-- /.container-fluid -->
    </div>
    <script type="text/javascript">
      window.onload = function() {
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    var img = document.getElementById("scream");
    ctx.drawImage(img, 10, 10);
};
function PreviewImage() {
    pdffile=document.getElementById("upload_pdf").files[0];
    pdffile_url=URL.createObjectURL(pdffile);
    $('#viewer').attr('src',pdffile_url);
}
    </script>
    <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#viewer')
                    .attr('src', e.target.result)
                    .width(400)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
                <!-- write or design something in 6 columns -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <!-- write or design something in 6 columns -->
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
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
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

<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 59,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
</body>
</html>

<?php
if(isset($_POST['btn_submit'])){
  include('functions_page.php');
    $status = input_recieved($_POST);
    if($status === true){
        include('db_page_2.php');
          $uploaded_dir = 'assigment_images_pdf/';
          $filename   = $_FILES["file"]["name"];
          $uploaded_dir.= $filename;
          $tmp_dir    =$_FILES["file"]["tmp_name"];
          $size       =$_FILES["file"]["size"];
          $file_type    =$_FILES['file']['type'];
          $new_size = $size/1024;   // new size
          $text     =pathinfo($filename,PATHINFO_EXTENSION);
          $uploaded=move_uploaded_file($tmp_dir, $uploaded_dir);
          if(pathinfo($filename, PATHINFO_EXTENSION)!=null){
            if($text == 'jpg' or $text == 'JPG' or $text == 'png' or $text == 'PNG' or
               $text == 'gif' or $text == 'GIF' or $text == 'jpeg' or $text == 'GPEG' or $text == 'pdf'
               or $text == 'PDF' or $text == 'docx' or $text == 'DOCX' or $text == 'doc' or $text == 'DOC'){
               $status=creat_assigment($_POST);
                if($status === true){
                  ?>
                    <script type="text/javascript">
                      $(document).ready(function(){
                            $('.toastsDefaultSuccess').ready(function() {
                              $(document).Toasts('create', {
                                position: 'topRight',
                                class: 'bg-success', 
                                autohide : true,
                                delay    : 6000,
                                title: 'Done',
                                subtitle: 'Created',
                                body: 'New Assigment has been created.'
                              })
                            });
                      });
                    </script>
                  <?php
                }else{
                   // if(file_exists($uploaded_directory)){
                   //    unlink($uploaded_directory);
                   //  }
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
                                subtitle: 'Not Done',
                                body: 'This Assigment was created last time. plz wait until that expire'
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
                                subtitle: 'Not Done',
                                body: 'Extension Error its not any pdf file change the file and then try.'
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
                            $('.toastsDefaultWarning').ready(function() {
                              $(document).Toasts('create', {
                                position: 'topRight',
                                class: 'bg-warning', 
                                autohide : true,
                                delay    : 5000,
                                title: 'Warning',
                                subtitle: 'Not Done',
                                body: 'Pdf file not selected plz select any pdf file for the assigment.'
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
                  subtitle: 'Input Fields',
                  body: 'All Fields Shoud Be <strong>REQUIRED</strong>.'
                })
              });
        });
      </script>
    <?php
    }
}
?>


<div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Progress</h4>
          </div>
          <div class="modal-body">
            <div class="progress">
      <div class="progress-bar progress-bar-striped active" role="progressbar"
      aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">Please Wait</div>
    </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>