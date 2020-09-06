<?php
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

  <title>Dashboard</title>

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
          <?php
            if(isset($_SESSION["student_logged_in"])){
              echo $_SESSION["student_logged_in"]["first_name"];
            }
          ?><br>
          <span class="right badge badge-danger"><a href="LogOff_page.php">Log Out</a></span>
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
                  <i class="far fa-circle nav-icon"></i>
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
              <i class="nav-icon fas fa-tachometer-alt"></i>
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
        <p align="center" style="font-size: 30px;color:"><span class="badge badge-danger">Upload Your Assigment</span></p>
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
          <div class="col-lg-12">
                <!-- write or design something in 12 columns -->
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <center>
                  <div class="card">
                    <div class="card-header bg-dark">
                      <h3>Your Evodince</h3>
                      <?php

                            echo $assigment_name; ?>
                    </div>
                    <div class="card-body">
                      <form method="post" enctype="multipart/form-data">
                        <div  class="form-group">
                          <select name="txt_assigment_name" class="form-control">
                          <option selected disabled>Select Your Assigment</option>
                          <?php
                          if(isset($_GET['assigment_id'])){
                            ?><option selected="<?php echo $assigment_name; ?>"><?php

                            echo $assigment_name; ?></option><?php
                          }elseif(isset($_GET['submit_id'])){
                            ?><option selected="<?php echo $_name; ?>"><?php echo $_name; ?></option><?php
                          }
                          ?>
                          <?php 
                          $cn;
                          $sql="SELECT * FROM `creat_assigment`";
                          $run=mysqli_query($cn,$sql);
                          if($run){
                            while($_get_data=mysqli_fetch_array($run)){
                              $name_of_assigments=$_get_data['ass_name'];
                              ?>
                          <option value="<?php echo $name_of_assigments; ?>" name="txt_assigment_name"><?php echo $name_of_assigments; ?></option>
                              <?php
                            }
                          }
                          ?>
                        </select>
                        </div>
                        <div  class="form-group">
                          <input type="text" name="txt_title" class="form-control" placeholder="title">
                        </div>
                        <div  class="form-group">
                        <textarea class="form-control" name="txt_description" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="file" id="upload_evidence" name="btn_evidence" value="Evidence"
                           hidden onchange="readURL(this);">
                           
                    <label for="upload_evidence" id="selector">Upload Your Evidence <span class="fas fa-file"></span></label>
                          <script type="text/javascript">
                            var loader = function(e){
                            let file = e.target.files;
                            let show = "<span>Selected File : </span>"+file[0].name;
                            let output = document.getElementById("selector");
                            output.innerHTML=show;
                            output.classList.add("active");
                            };
                            let fileinput = document.getElementById("upload_evidence");
                            fileinput.addEventListener("change",loader);
                          </script>
                          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
                         <input type="submit" name="btn_submit_assigment" value="Submit Assigment" style="font-size: 20px;" class="btn btn-success btn-float btn-block">
                        </div>
                      </form>
                    </div>
                  </div>
                </center>
              </div>
              <div class="col-md-3"></div>
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

<?php 
if(isset($_POST['btn_submit_assigment'])){
  include('functions_page.php');
  $status = input_recieved($_POST);
  if($_POST['txt_assigment_name'] == true and $_POST['txt_title'] == true and $_POST['txt_description']==true){
          $uploaded_dir   = 'submitted  assigments/';
          $filename       = $_FILES["btn_evidence"]["name"];
          $uploaded_dir  .= $filename;
          $tmp_dir        =$_FILES["btn_evidence"]["tmp_name"];
          //$size           =$_FILES["btn_evidence"]["size"];
          //$file_type      =$_FILES['btn_evidencebtn_evidence']['type'];
          //$new_size       = $size/1024;   // new size
          $text     =pathinfo($filename,PATHINFO_EXTENSION);
          $uploaded=move_uploaded_file($tmp_dir, $uploaded_dir);
          if(pathinfo($filename, PATHINFO_EXTENSION)!=null){
            if($text == 'jpg' or $text == 'JPG' or $text == 'png' or $text == 'PNG' or
               $text == 'gif' or $text == 'GIF' or $text == 'jpeg' or $text == 'GPEG' or $text == 'pdf'
               or $text == 'PDF' or $text == 'docx' or $text == 'DOCX' or $text == 'txt' or $text == 'TXT' or $text == 'doc' or $text == 'DOC'){

              //$status = submit_assigment();

              $cn=db_connection();
              $id=$_SESSION["student_logged_in"]['id'];
              $user_name=$_SESSION['student_logged_in']['first_name'];
              $user_email=$_SESSION['student_logged_in']['std_email'];
              $login_student_image=$_SESSION['student_logged_in']['student_image'];
              $_assigment=$_POST["txt_assigment_name"];

              $sql="SELECT * FROM `submitted_assigments` WHERE `email`='$user_email'";
              $done=mysqli_query($cn,$sql);
              if(mysqli_num_rows($done)>0){

                while ($get=mysqli_fetch_assoc($done)) {
                $std_department = $get['department'];
                $Submitter_ID = $get['id'];
                $std_faculty = $get['faculty'];
                $std_semester = $get['semester'];
                $std_image = $get['std_img'];
                $Submitter_email = $get['email'];
                
                }

                $sql="SELECT * FROM `submit_assigments` WHERE `std_id`='$Submitter_ID'";
                $done=mysqli_query($cn,$sql);
                if(mysqli_num_rows($done)>0){
                  while ($get_submitting_data=mysqli_fetch_assoc($done)) {
                  $COMP_forien_Key = $get_submitting_data['std_id'];
                  $_COMP_EVIDENCE = $get_submitting_data['assigment'];
                  $COMP_ON_SUBMITTED = $get_submitting_data['submitted_on'];
                  $COMP_PK1 = $get_submitting_data['primary_key'];

                  $array = array('$fk_id' => $COMP_forien_Key, '$_Evidence'=> $_COMP_EVIDENCE, '$date_on_submitted'=>$COMP_ON_SUBMITTED, 'pk'=>$COMP_PK1);
                    foreach ($array as $arr => $value) {
                      echo $value."<br>";
                    }

                  $sql="SELECT * FROM `submit_assigments` WHERE `assigment`='$_COMP_EVIDENCE'";
                  $done=mysqli_query($cn,$sql);
                  while ($get_submitting_data=mysqli_fetch_assoc($done)) {
                    $FOREN_KEY = $get_submitting_data['std_id'];
                    $EVIDENCE = $get_submitting_data['assigment'];
                    $Date_ON_SUBMITTED = $get_submitting_data['submitted_on'];
                    $PK2 = $get_submitting_data['primary_key'];

                    $array = array('$fk_id' => $FOREN_KEY, '$_Evidence'=> $EVIDENCE, '$date_on_submitted'=>$Date_ON_SUBMITTED, 'pk'=>$PK2);
                    foreach ($array as $arr => $value) {
                      echo $value."<br>";
                    }

                    //echo $_evidence;exit();
                    echo "<br>".$PK2."<br>";
                    echo "<br>".$FOREN_KEY."<br>";
                    echo "<br>".$EVIDENCE."<br>";
                    echo "<br>".$_assigment."<br>";
                    //exit();
                    $submitted_on=date('m/d/Y h:i A');
                    if($Submitter_ID == $FOREN_KEY and $_COMP_EVIDENCE!= $_assigment and $COMP_PK1 != $PK2){
                    
                       $sql_fk="INSERT INTO `submit_assigments`(`std_id`,`assigment`,`submitted_on`) 
                          VALUES ('$Submitter_ID','$_assigment','$submitted_on')";
                       $add = mysqli_query($cn,$sql_fk);
                       mysqli_close($cn);
                      echo "submitted<br>";
                  }else{
                    echo "false<br>";
                  }
                  }

                  
                }
                  }else{
                    $submitted_on=date('m/d/Y h:i A');
                    $sql_fk="INSERT INTO `submit_assigments`(`std_id`,`assigment`,`submitted_on`) 
                          VALUES ('$Submitter_ID','$_assigment','$submitted_on')";
                       $add = mysqli_query($cn,$sql_fk);
                       mysqli_close($cn);
                      echo "submitted<br>";
                  }
                

              }else{

                $sql="SELECT * FROM `registred_students` WHERE `id`='$id'";
                $getting=mysqli_query($cn,$sql);
                if(mysqli_num_rows($getting)>0){
                  while ($get_std_info=mysqli_fetch_assoc($getting)) {
                    $_loggedIn_std_department=$get_std_info['department'];
                    $_loggedIn_std_faculty=$get_std_info['faculty'];
                    $_loggedIn_std_semester=$get_std_info['semester'];
                  }
                }
                 $sql="INSERT INTO `submitted_assigments`(`std_name`, `email`, `department`, 
                                    `semester`, `faculty`, `std_img`, `title`, `description`, 
                                    `evidence`, `submitted_date`) VALUES (?,?,?,?,?,?,?,?,?,?)";
                  $stmt=mysqli_prepare($cn,$sql);
                  if($stmt){
                    $uploaded_dir = 'submitted  assigments/';
                    $filename   = $_FILES["btn_evidence"]["name"];
                    $uploaded_dir.= $filename;
                    $tmp_dir    =$_FILES["btn_evidence"]["tmp_name"];
                    $size       =$_FILES["btn_evidence"]["size"];
                    $file_type    =$_FILES['btn_evidence']['type'];
                    $new_size = $size/1024;   // new size
                    $text     =pathinfo($filename,PATHINFO_EXTENSION);

                    $user_name=$_SESSION['student_logged_in']['first_name'];
                    $user_email=$_SESSION['student_logged_in']['std_email'];
                    $login_student_image=$_SESSION['student_logged_in']['student_image'];
                    $_assigment=$_POST["txt_assigment_name"];

                    $assigment=$_POST["txt_assigment_name"];
                    $assigment_title=$_POST["txt_title"];
                    $assigment_discription=$_POST["txt_description"];
                    $submitted_date=date('m/d/Y h:i A');
                    mysqli_stmt_bind_param($stmt, 'ssssssssss',$user_name,$user_email,$_loggedIn_std_department,$_loggedIn_std_semester,$_loggedIn_std_faculty,$login_student_image,$assigment_title,$assigment_discription,$uploaded_dir,$submitted_date);
                    $status_a = mysqli_stmt_execute($stmt);

                    if($status_a){
                    $submitted_on=date('m/d/Y h:i A');
                    $sql_fk="INSERT INTO `submit_assigments`(`std_id`,`assigment`,`submitted_on`) 
                         VALUES ('$id','$_assigment','$submitted_on')";
                    $add = mysqli_query($cn,$sql_fk);
                      mysqli_stmt_close($stmt);
                      mysqli_close($cn);
                      echo "submitted";
                    }else{

                      echo "not submitted";
                      mysqli_stmt_close($stmt);
                      mysqli_close($cn);
                    }

                    
                  }else{
                    mysqli_stmt_close($stmt);
                    mysqli_close($cn);
                     echo "not submitted";
                  }

              }

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
              }else{
                if(file_exists($uploaded_dir)){
                  unlink($uploaded_dir);
                }
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
            }else{
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
              body: 'Missing Input Fields <strong>All REQUIRED</strong>'
            })
          });
        });
      </script>
    <?php        
  }
}

?>
