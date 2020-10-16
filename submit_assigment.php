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

  <title>Submit Assigment</title>
<link href="main.css" rel="stylesheet">
  <link rel="stylesheet" href="uploading lib/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="uploading lib/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="uploading lib/css/all.css" crossorigin="anonymous">
    <link href="uploading lib/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>


    <script type="text/javascript" src="uploading lib/js/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="uploading lib/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script src="uploading lib/js/plugins/piexif.js" type="text/javascript"></script>
    <script src="uploading lib/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="uploading lib/js/fileinput.js" type="text/javascript"></script>
    <script src="uploading lib/js/locales/fr.js" type="text/javascript"></script>
    <script src="uploading lib/js/locales/es.js" type="text/javascript"></script>
    <script src="uploading lib/themes/fas/theme.js" type="text/javascript"></script>
    <script src="uploading lib/themes/explorer-fas/theme.js" type="text/javascript"></script>
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
    </style>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse layout-footer-fixed layout-navbar-fixed layout-fixed">
<div class="wrapper">
<?php
if(isset($_GET["extension_error"])){
                // echo "<div style='color:red;font-size:20px;text-align:center;'>Some Files are not acceptable check your files and then try again</div>";
  echo $_GET['extension_error'];
              }
?>
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
            <a href="submit_assigment.php" class="nav-link active">
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
    <?php
    if(isset($_GET['assigment_id'])){
      $id=$_GET['assigment_id'];
      $sql="SELECT * FROM  `creat_assigment` WHERE `id`='$id'";
      $run=mysqli_query($cn,$sql);
      if($run){
        while ($get=mysqli_fetch_array($run)) {
          $assigment_name=$get['ass_name'];
        }
      }
    }

    if(isset($_GET['submit_id'])){
      $id=$_GET['submit_id'];
      $sql="SELECT * FROM  `creat_assigment` WHERE `id`='$id'";
      $run=mysqli_query($cn,$sql);
      if($run){
        while ($get_assigment=mysqli_fetch_array($run)) {
          $_name=$get_assigment['ass_name'];
        }
      }
    }

    ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <form method="post" enctype="multipart/form-data">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Upload your assigment</h5>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <div class="btn-group">
                      <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-wrench"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">Something else here</a>
                        <a class="dropdown-divider"></a>
                        <a href="#" class="dropdown-item">Separated link</a>
                      </div>
                    </div>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                        
                          <div class="file-loading">
                              <input id="file-4" class="file" name="btn_evidence[]" type="file" multiple data-preview-file-type="any" data-show-upload="false" data-show-cancel="false" data-upload-url="#" data-theme="fas">
                          </div>
                        
                      <!-- /.chart-responsive -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                      <label class="label">Assigment</label>
                      <div class="form-group">
                        <select class="form-control" name="txt_assigment_name" class="form-control">
                        <?php
                        if(isset($_GET['assigment_id'])){
                            ?><option selected="<?php echo $assigment_name; ?>" name="txt_assigment_name" class="form-control">
                              <?php echo $assigment_name; ?>
                                
                              </option><?php
                          }elseif(isset($_GET['submit_id'])){
                            ?><option selected="<?php echo $_name; ?>" name="txt_assigment_name" class="form-control">
                              <?php echo $_name; ?>
                                
                              </option><?php
                          }else{
                            $sql="SELECT * FROM `creat_assigment`";
                            $run=mysqli_query($cn,$sql);
                            if($run){
                              while($_get_data=mysqli_fetch_array($run)){
                                $name_of_assigments=$_get_data['ass_name'];
                                //$total_time=$_get_data['time_duration'];
                                $start_date=substr($_get_data['time_duration'],0,19);
                                $last_date=substr($_get_data['time_duration'], 22);
                                $current=date("m/d/Y h:i:s A");
                                $current=strtotime($current);
                                $end = strtotime($last_date);
                                if($end>$current){
                                  ?>
                                 <option value="<?php echo $name_of_assigments; ?>" name="txt_assigment_name" class="form-control"><?php echo $name_of_assigments; ?></option>
                                  <?php
                                }
                                
                              }
                            }
                          }
                          
                        ?>
                        </select>
                      </div>
                      <!-- /.progress-group -->
                      <label class="label">Title</label>
                      <div class="form-group">
                        <input type="text" placeholder="title" name="txt_title" class="form-control">
                      </div>

                        <!-- /.progress-group -->
                        <label class="label">Description</label>
                      <div  class="form-group">
                        <textarea class="form-control" name="txt_description" placeholder="Description"></textarea>
                        </div>

                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6">
                            <input type="submit" name="btn_reset" value="Reset" class="btn btn-danger btn-block">
                          </div>
                          <div class="col-sm-6">
                            <input type="submit" name="btn_submit_assigment" value="Submit" class="btn btn-success btn-block">
                          </div>
                        </div>
                        
                        
                      </div>

                      </div>

                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- ./card-body -->
              </form>
                <!-- /.form -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
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
<script>
    $('#file-fr').fileinput({
        theme: 'fas',
        language: 'fr',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif']
    });
    $('#file-es').fileinput({
        theme: 'fas',
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif']
    });
    $("#file-0").fileinput({
        theme: 'fas',
        uploadUrl: '#'
    }).on('filepreupload', function(event, data, previewId, index) {
        alert('The description entered is:\n\n' + ($('#description').val() || ' NULL'));
    });
    $("#file-1").fileinput({
        theme: 'fas',
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });
    /*
     $(".file").on('fileselect', function(event, n, l) {
     alert('File Selected. Name: ' + l + ', Num: ' + n);
     });
     */
    $("#file-3").fileinput({
        theme: 'fas',
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
        overwriteInitial: false,
        initialPreviewAsData: true,
        initialPreview: [
            "http://lorempixel.com/1920/1080/transport/1",
            "http://lorempixel.com/1920/1080/transport/2",
            "http://lorempixel.com/1920/1080/transport/3"
        ],
        initialPreviewConfig: [
            {caption: "transport-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
            {caption: "transport-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
            {caption: "transport-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
        ]
    });
    $("#file-4").fileinput({
        theme: 'fas',
        uploadExtraData: {kvId: '10'}
    });
    $(".btn-warning").on('click', function () {
        var $el = $("#file-4");
        if ($el.attr('disabled')) {
            $el.fileinput('enable');
        } else {
            $el.fileinput('disable');
        }
    });
    $(".btn-info").on('click', function () {
        $("#file-4").fileinput('refresh', {previewClass: 'bg-info'});
    });
    /*
     $('#file-4').on('fileselectnone', function() {
     alert('Huh! You selected no files.');
     });
     $('#file-4').on('filebrowse', function() {
     alert('File browse clicked for #file-4');
     });
     */
    $(document).ready(function () {
        $("#test-upload").fileinput({
            'theme': 'fas',
            'showPreview': false,
            'allowedFileExtensions': ['jpg', 'png', 'gif','pptx','ppt','doc','docx'],
            'elErrorContainer': '#errorBlock'
        });
        $("#kv-explorer").fileinput({
            'theme': 'explorer-fas',
            'uploadUrl': '#',
            overwriteInitial: false,
            initialPreviewAsData: true,
            initialPreview: [
                "http://lorempixel.com/1920/1080/nature/1",
                "http://lorempixel.com/1920/1080/nature/2",
                "http://lorempixel.com/1920/1080/nature/3"
            ],
            initialPreviewConfig: [
                {caption: "nature-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
                {caption: "nature-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
                {caption: "nature-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
            ]
        });
        /*
         $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
         alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
         });
         */
    });
</script>
</html>

<?php 
if(isset($_POST['btn_submit_assigment'])){
  include('functions_page.php');
  $status = input_recieved($_POST);
  if($status === true){
          
          //$uploaded_dir   = 'submitted  assigments/';
          
          $count          =  count($_FILES["btn_evidence"]["name"]);
          //$uploaded_dir  .= $filename;
          $tmp_dir        =$_FILES["btn_evidence"]["tmp_name"];
          //$size           =$_FILES["btn_evidence"]["size"];
          //$file_type      =$_FILES['btn_evidencebtn_evidence']['type'];
          //$new_size       = $size/1024;   // new size
          for($i=0;$i<$count;$i++){
          $filename       =  $_FILES["btn_evidence"]["name"][$i];
          $text             =pathinfo($filename,PATHINFO_EXTENSION);
          }
         
          //$uploaded=move_uploaded_file($tmp_dir, $uploaded_dir);
          if($text!=null){/*
            if($text == 'jpg' or $text == 'JPG' or $text == 'png' or $text == 'PNG' or
               $text == 'gif' or $text == 'GIF' or $text == 'jpeg' or $text == 'GPEG' or $text == 'pdf'
               or $text == 'PDF' or $text == 'docx' or $text == 'DOCX' or $text == 'txt' or $text == 'TXT' or $text == 'doc' or $text == 'DOC'){*/
              //include('db_page_2.php');
              $status = submit_assigment_multiple();
              
              if($status === true){
                ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('.toastsDefaultSuccess').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-success', 
                        title: 'Done',
                        autohide:true,
                        delay:10000,
                        subtitle: 'Submitted',
                        body: 'Your assigment has been submitted successfully.when it will be acceptable from the lecturer then you will be inform  by recieving an email. ThankYou!'
                      })
                    });
                  });
                </script>
              <?php
              }elseif($status === "extension_error"){
                ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('.toastsDefaultDanger').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-danger', 
                        title: 'Files Error',
                        autohide:true,
                        delay:10000,
                        subtitle: 'not submit',
                        body: 'Some files can not be acceptable plz check your files and then try gain.'
                      })
                    });
                  });
                </script>
              <?php
              }
              else{
                // if(file_exists($uploaded_dir)){
                //   unlink($uploaded_dir);
                // }
                ?>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('.toastsDefaultDanger').ready(function() {
                      $(document).Toasts('create', {
                        class: 'bg-danger', 
                        title: 'Error',
                        autohide:true,
                        delay:5000,
                        subtitle: 'not submit',
                        body: 'You have already submitted your assigment.'
                      })
                    });
                  });
                </script>
              <?php
              }
           /*}else{
              ?>
                    <script type="text/javascript">
                      $(document).ready(function(){
                            $('.toastsDefaultDanger').ready(function() {
                              $(document).Toasts('create', {
                                position: 'topRight',
                                class: 'bg-danger', 
                                autohide : true,
                                delay    : 10000,
                                title: 'Error',
                                subtitle: 'Not Done',
                                body: 'Evedince not acceptable select pdf or document or any image of your evidence because its other than type of extension.'
                              })
                            });
                      });
                    </script>
                  <?php
            }*/
          }else{
            ?>
                    <script type="text/javascript">
                      $(document).ready(function(){
                            $('.toastsDefaultWarning').ready(function() {
                              $(document).Toasts('create', {
                                position: 'topRight',
                                class: 'bg-warning', 
                                autohide : true,
                                delay    : 9000,
                                title: 'Warning',
                                subtitle: 'Not Done',
                                body: "You don't have any evidence first show your evidence then your assigment will be submit."
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
              delay:4000,
              subtitle: 'missing fields',
              icon: 'fas fa-envelope fa-lg',
              body: 'Missing Input Fields <strong>All REQUIRED</strong>'
            })
          });
        });
      </script>
    <?php        
  }
}
ob_end_flush();
?>
