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
$_lecturer_id=$_SESSION["lecturer_logged_in"]["id"];
$sql="SELECT * FROM `registred_lecturers` WHERE `id`='$_lecturer_id'";
$done=mysqli_query($cn,$sql);
if($done){
  while ($get_lec_info=mysqli_fetch_array($done)) {
    $_username=$get_lec_info['username'];
    $_entry_dat=$get_lec_info['entry_date'];
    $_image=$get_lec_info['image'];
    $_gender=$get_lec_info['gender'];
    $_email=$get_lec_info['email'];
    $_address=$get_lec_info['address'];
    $_phone=$get_lec_info['phone'];
    $_dob=$get_lec_info['dob'];
    $_user_role=$get_lec_info['role'];
    $_skill=$get_lec_info['skills'];
    $_faculty=$get_lec_info['faculty'];
    $_department=$get_lec_info['department'];
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

  <title>Lecturer Profile</title>
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
        font-size: 12px;
        width: auto;
        height: auto;
        padding: auto;
      }
       label{
        padding: 9px 30px;
        border: 3px solid #ffc86554;
        border-radius: 8px;
        font-size: 10px;
        background-color: red;
        cursor: hand;
        text-transform: uppercase;
        letter-spacing: 2px;
        color:white;
      }
      label:hover{
        transform: scale(1.02);
      }label.active{
        background-color: #ffc86554;
        color: black;
      }label span{
        font-weight: normal;
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
          <a href="#" class="dropdown-item">
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
                <a href="lecturer_profile.php" class="nav-link active">
                  <i class="far fa-user nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="lecturer_change_password.php" class="nav-link">
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
          <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <ul class="nav nav-pills nav-justified">
                  <li class="nav-item"><a class="nav-link active" style="color: black;" href="#profile" data-toggle="tab"><strong>My Profile</strong></a></li>
                  <li class="nav-item"><a class="nav-link" style="color: black;" href="#edit" data-toggle="tab"><strong>Add or Edit Profile</strong></a></li>
                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="profile">
                          <div class="row">
                            <div class="col-lg-4 col-md-4">
                              <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title text-white">Contactual Information</h3>
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                </button>                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                <p class="text-muted">
                  <?php echo $_email; ?>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>
                <?php
                if(isset($_address) and count_chars($_address)>0){
                  ?><p class="text-muted"><?php echo $_address; ?></p><?php
                }else{
                  ?><p class="text-muted"><?php echo "Not available"; ?></p><?php
                }
                ?>

                <hr>

                <strong><i class="fas fa-phone mr-1"></i> Phone</strong>

                <?php
                if(isset($_phone) and count_chars($_phone)>0){
                  ?><p class="text-muted"><?php echo $_phone; ?></p><?php
                }else{
                  ?><p class="text-muted"><?php echo "Not available"; ?></p><?php
                }
                ?>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Date Of Birth</strong>

                <?php
                if(isset($_dob) & $_dob>0){
                  ?><p class="text-muted"><?php echo $_dob; ?></p><?php
                }else{
                  ?><p class="text-muted"><?php echo "Not available"; ?></p><?php
                }
                ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>

            <div class="col-lg-4 col-md-4">
              <!-- Profile Image -->
                      <div class="card card-danger">
                        <div class="card-header">
                          <h3 class="card-title text-white">Profile</h3>
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body box-profile">
                          <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                 src="<?php echo $_image; ?>"
                                 alt="User profile picture">
                          </div>
                          <h3 class="profile-username text-center"><?php echo $_username; ?></h3>
        
                          <p class="text-muted text-center"><?php echo $_user_role; ?></p>
                          <hr><br>
                          <center>
                          <button type="submit" class="btn btn-danger btn-block">Add more info</button>
                          </center>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
            </div>
            <div class="col-lg-4 col-md-4">
                              <!-- About Me Box -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title text-white">Educational</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i>Faculty</strong>

                <p class="text-muted">
                  <?php echo $_faculty; ?>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i>Department</strong>

                <p class="text-muted"><?php echo $_department; ?></p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
                          </div>

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane fade" id="edit">
                      <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-lg-4 col-md-4">
                              <!-- About Me Box -->
                              <div class="card card-primary">
                                <div class="card-header">
                                  <h3 class="card-title text-white">Contactual Information</h3>
                                  <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                              <i class="fas fa-minus"></i>
                                  </button>                  
                                  </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text" name="edit_email" value="<?php echo $_email; ?>" class="form-control" placeholder="Email">
                                  </div>

                                  <hr>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" name="edit_address" <?php if(isset($_address)){echo "value='$_address'";} ?> class="form-control" placeholder="Address">
                                  </div>

                                  <hr>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="edit_phone" <?php if(isset($_phone)){echo "value='$_phone'";} ?> placeholder="Phone"  data-inputmask='"mask": "(9999) (9999999)"' data-mask>
                                  </div>

                                  <hr>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                                    </div>
                                    <input type="text" class="form-control" <?php if(isset($_dob)){echo "value='$_dob'";} ?> placeholder="Date Of Birth" data-inputmask-alias="datetime" name="edit_birth" data-inputmask-inputformat="mm-dd-yyyy" data-mask>
                                  </div>
                                </div>
                                <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                            </div>

            <div class="col-lg-4 col-md-4">
              <!-- Profile Image -->
                      <div class="card card-danger">
                        <div class="card-header">
                          <h3 class="card-title text-white">Profile</h3>
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body box-profile">
                          <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                 src="<?php echo $_image; ?>"
                                 alt="User profile picture">
                                 <input type="file" name="edit_file" id="upload_img"  hidden onchange="readURL(this);" value="Document">
                                 <label for="upload_img" id="selector">SELECT IMAGE</label>
                                  <script type="text/javascript">
                                    var loader = function(e){
                                    let file = e.target.files;
                                    let show = "<span>Selected File : </span>"+file[0].name;
                                    let output = document.getElementById("selector");
                                    output.innerHTML=show;
                                    output.classList.add("active");
                                    };
                                    let fileinput = document.getElementById("upload_img");
                                    fileinput.addEventListener("change",loader);
                                  </script>
                                  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
                          </div>
                          <h3 class="profile-username text-center">
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="edit_username" value="<?php echo $_username ?>" class="form-control" placeholder="User Name">
                                  </div>
                          </h3>
        
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i>Gender</i></span>
                              </div>
                              <select name="edit_gender" class="form-control">
                                <option disabled selected>Gender</option>
                                <?php
                                if(isset($_gender)){
                                  ?><option selected="<?php echo $_gender ?>"><?php echo $_gender ?></option><?php
                                }
                                ?>
                                <option value="Male" name="edit_gender">Male</option>
                                <option value="Female" name="edit_gender">Female</option>
                              </select>
                            </div>
                          <hr><br>
                          <center>
                          <input type="submit" name="btn_update" class="btn btn-danger btn-block" value="Done">
                          </center>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
            </div>
            <div class="col-lg-4 col-md-4">
                              <!-- About Me Box -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title text-white">Educational</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i>Factulty</i></span>
                        </div>
                        <select name="edit_faculty" class="form-control">
                          <option disabled selected>Faculty</option>
                          <option selected="<?php echo $_faculty; ?>"><?php echo $_faculty; ?></option>
                          <option value="Management Science" name="edit_faculty">Management Science</option>
                          <option value="Social Science" name="edit_faculty">Social Science</option>
                          <option value="Arts" name="edit_faculty">Arts</option>
                        </select>
                </div>

                <hr>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i>Department</i></span>
                        </div>
                        <select name="edit_department" class="form-control">
                          <option disabled selected>Select</option>
                          <option selected="<?php echo $_department; ?>"><?php echo $_department; ?></option>
                          <option value="Computer Science" name="edit_department">Coomputer Science</option>
                          <option value="Agriculture" name="edit_department">Agriculture</option>
                          <option value="English" name="edit_department">English</option>
                          <option value="Botany" name="edit_department">Botany</option>
                        </select>
                </div>
                <hr>
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i>skill</i></span>
                                    </div>
                                    <input type="text" name="edit_skill" value="<?php echo $_skill ?>" class="form-control" placeholder="Your Skill">
                                  </div>                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
          </div>
        </form> <!-- /.form -->
      </div> <!-- /.card-body -->
    </div>
    <!-- /.tab-pane -->

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <script type="text/javascript">
      window.onload = function() {
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    var img = document.getElementById("scream");
    ctx.drawImage(img, 10, 10);
};
function PreviewImage() {
    pdffile=document.getElementById("upload_evidence").files[0];
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
      timePickerIncrement: 30,
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
if(isset($_POST['btn_update'])){
  include('functions_page.php');
    $status=validate_sanitize_student_Update_inputs($_POST);
      if(is_array($status)){
          $uploaded_dir = 'lecturers images/';
          $filename   = $_FILES["edit_file"]["name"];
          $uploaded_dir.= $filename;
          $tmp_dir    =$_FILES["edit_file"]["tmp_name"];
          $size       =$_FILES["edit_file"]["size"];
          $file_type  =$_FILES['edit_file']['type'];
          $new_size = $size/1024;   // new size
          $text     =pathinfo($filename,PATHINFO_EXTENSION);
          $uploaded=move_uploaded_file($tmp_dir, $uploaded_dir);
          if(pathinfo($filename, PATHINFO_EXTENSION)!=null){
            if($text == 'jpg' or $text == 'JPG' or $text == 'png' or $text == 'PNG' or
               $text == 'gif' or $text == 'GIF' or $text == 'jpeg' or $text == 'GPEG'){
              $status=edit_lecturer();
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
                                body: 'Your profile has been updated successfully. You must be RELOGIN to save your changes'
                              })
                            });
                      });
                    </script>
                  <?php
                }else{
                   if(file_exists($uploaded_directory)){
                      unlink($uploaded_directory);
                    }
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
                                body: 'Not Updated something went wrong.'
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
                                subtitle: 'Not Done',
                                body: 'Extension Error its not an Image file change the file and then try.'
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
                                delay    : 5000,
                                title: 'Warning',
                                subtitle: 'Not Done',
                                body: 'Image file not selected . you must be select the image file'
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
                  title: 'Not Updated',
                  subtitle: 'Input Fields',
                  body: 'Invalid Email Formate check your email.'
                })
              });
        });
      </script>
    <?php
      }

}
?>
