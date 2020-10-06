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
$sql="SELECT * FROM `creat_assigment`";
$run=mysqli_query($cn,$sql);
$count = 0;
while($get_data=mysqli_fetch_array($run)){
  $count+=1;
}
$student_id=$_SESSION["student_logged_in"]["id"];
$sql="SELECT * FROM `registred_students` WHERE `id`='$student_id'";
$done=mysqli_query($cn,$sql);
if($done){
  while ($get_std_info=mysqli_fetch_array($done)) {
    $_std_name=$get_std_info['first_name'].$get_std_info['last_name'];
    $_first_name=$get_std_info['first_name'];
    $_last_name=$get_std_info['last_name'];
    $_dob=$get_std_info['d_o_b'];
    $_email=$get_std_info['email'];
    $_user_type=$get_std_info['type'];
    $_phone=$get_std_info['phone'];
    $_address=$get_std_info['address'];
    $_img=$get_std_info['img'];
    $_batch=$get_std_info['batch_no'];
    $_session=$get_std_info['session'];
    $_faculty=$get_std_info['faculty'];
    $_department=$get_std_info['department'];
    $_semester=$get_std_info['semester'];
    $_entry_date=$get_std_info['registry_date'];
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

  <title>Student Profile</title>

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
      h3{
        color: white;
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
          <a href="#" class="dropdown-item">
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
            <a href="submitted_assigments.php" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Total Submitted
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Account Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="student_profile.php" class="nav-link active">
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
          <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <ul class="nav nav-pills nav-justified">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Student Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#edit" data-toggle="tab">Add -OR- Update Profile</a></li>
                  
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
                <h3 class="card-title">Contactual Information</h3>
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

                <p class="text-muted"><?php echo $_address; ?></p>

                <hr>

                <strong><i class="fas fa-phone mr-1"></i> Phone</strong>

                <p class="text-muted">
                  <?php echo $_phone; ?>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Date Of Birth</strong>

                <p class="text-muted"><?php echo $_dob; ?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>

                    <div class="col-lg-4 col-md-4">
                      <!-- Profile Image -->
                      <div class="card card-danger">
                        <div class="card-header">
                          <h3 class="card-title">Profile</h3>
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
                                 src="<?php echo $_img; ?>"
                                 alt="User profile picture">
                          </div>
                          <h3 class="profile-username text-center"><?php echo $_std_name; ?></h3>
                          <?php if(strlen($_semester)>0){
                            ?>
                            <p class="text-muted text-center"><?php echo $_user_type." Of ".$_semester;?></p>
                            <?php
                          }else{
                            ?>
                            <p class="text-muted text-center"><?php echo $_user_type; ?></p>
                            <?php
                          } ?>
                          <hr><br>
                          <center>
                          <center>
                          <span class="h3 text-center">AMS USER</span>
                          </center>
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
                <h3 class="card-title">Education</h3>
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

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Batch #</strong>

                <p class="text-muted">
                 <?php echo $_batch; ?>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Session</strong>

                <p class="text-muted"><?php echo $_session; ?></p>
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
                                  <h3 class="card-title">Contactual Information</h3>
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
                                    <input type="text" name="edit_address" value="<?php echo $_address; ?>" class="form-control" placeholder="Address">
                                  </div>

                                  <hr>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $_phone; ?>" name="edit_phone" placeholder="Phone"  data-inputmask='"mask": "(9999) (9999999)"' data-mask>
                                  </div>

                                  <hr>

                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                                    </div>
                                    <input type="text" class="form-control" value="<?php echo $_dob; ?>" placeholder="Date Of Birth" data-inputmask-alias="datetime" name="edit_birth" data-inputmask-inputformat="mm-dd-yyyy" data-mask>
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
                          <h3 class="card-title">Profile</h3>
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
                                 src="<?php echo $_img; ?>"
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
                                    <input type="text" name="edit_first_name" value="<?php echo $_first_name ?>" class="form-control" placeholder="first name">
                                    <input type="text" name="edit_last_name" value="<?php echo $_last_name ?>" class="form-control" placeholder="last name">
                                  </div>
                          </h3>
        
                          <p class="text-muted text-center"><?php echo $_user_type; ?></p>
                          <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i>semeter</i></span>
                                      <select name="edit_semester" class="form-control">
                                        <option disabled selected>Select Semester</option>
                                        <?php 
                                        if(strlen($_semester)>0){
                                          ?>
                                          <option selected="<?php echo $_faculty; ?>"><?php echo $_semester; ?></option>
                                          <?php
                                        }
                                        ?>
                                        <option value="Semester 1st" name="edit_semester">Semester 1st</option>
                                        <option value="Semester 2nd" name="edit_semester">Semester 2nd</option>
                                        <option value="Semester 3rd" name="edit_semester">Semester 3rd</option>
                                        <option value="Semester 4th" name="edit_semester">Semester 4th</option>
                                        <option value="Semester 5th" name="edit_semester">Semester 5th</option>
                                        <option value="Semester 6th" name="edit_semester">Semester 6th</option>
                                        <option value="Semester 7th" name="edit_semester">Semester 7th</option>
                                        <option value="Semester 8th" name="edit_semester">Semester 8th</option>
                                      </select>
                                    </div>
                                    
                                  </div>
                        </div>
                        <!-- /.card-body -->
                            <script type="text/javascript">
                                    window.onload = function() {
                                  var canvas = document.getElementById("myCanvas");
                                  var ctx = canvas.getContext("2d");
                                  var img = document.getElementById("scream");
                                  ctx.drawImage(img, 10, 10);
                              };
                              function PreviewImage() {
                                  pdffile=document.getElementById("upload_img").files[0];
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
                      </div>
                      <!-- /.card -->
            </div>
            <div class="col-lg-4 col-md-4">
                              <!-- About Me Box -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Education</h3>
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
                          <option disabled selected>Department</option>
                          <option selected="<?php echo $_department; ?>"><?php echo $_department; ?></option>
                          <option value="Management Science" name="edit_department">Coomputer Science</option>
                          <option value="Agriculture" name="edit_department">Agriculture</option>
                          <option value="English" name="edit_department">English</option>
                          <option value="Botany" name="edit_department">Botany</option>
                        </select>
                </div>
                <hr>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i>Batch</i></span>
                    </div>
                        <input type="text" name="edit_batch" value="<?php echo $_batch; ?>" class="form-control" placeholder="Batch">
                </div>
                <hr>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i>Session</i></span>
                    </div>
                        <input type="text" name="edit_session" value="<?php echo $_session; ?>" class="form-control" placeholder="Session">
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
    <strong>Developed by &copy; <a href="https://adminlte.io">Aqib Lodhi</a>.</strong> All rights reserved.
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
    $status = input_recieved($_POST);
    if($status === true){$status=validate_sanitize_student_Update_inputs($_POST);
      if(is_array($status)){
          $uploaded_dir = 'student images/';
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
              $status=edit_student();
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
                                body: 'Your profile has been updated successfully.'
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
ob_end_flush();
?>
