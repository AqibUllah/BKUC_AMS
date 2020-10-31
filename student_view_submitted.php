<?php
ob_start();
session_start();
   if(isset($_SESSION["student_logged_in"])){
          }else{
            header("location:login_page.php");
          }



include 'db_page_2.php';
$cn=db_connection();
$std_class=$_SESSION["student_logged_in"]["student_class"];
$std_semester=$_SESSION["student_logged_in"]["student_semester"];
$sql="SELECT * FROM `creat_assigment` WHERE `class`='$std_class' and `semester`='$std_semester'";
$count = 0;
$run=mysqli_query($cn,$sql);
if(mysqli_num_rows($run)>0){
while($get_data=mysqli_fetch_array($run)){
  $count+=1;
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

  <title>My Assigment</title>
  <link href="main.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="lib/lightbox/css/lightbox.css" type="text/css" media="screen" />

  <script type="text/javascript" src="uploading lib/js/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="uploading lib/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <script src="uploading lib/js/plugins/piexif.js" type="text/javascript"></script>
    <script src="uploading lib/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="uploading lib/js/fileinput.js" type="text/javascript"></script>
    <script src="uploading lib/js/locales/fr.js" type="text/javascript"></script>
    <script src="uploading lib/js/locales/es.js" type="text/javascript"></script>
    <script src="uploading lib/themes/fas/theme.js" type="text/javascript"></script>
    <script src="uploading lib/themes/explorer-fas/theme.js" type="text/javascript"></script>

  <link rel="stylesheet" href="uploading lib/css/bootstrap.min.css" crossorigin="anonymous">
  <link href="uploading lib/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="uploading lib/css/all.css" crossorigin="anonymous">
  <link href="uploading lib/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>

  <script type="text/javascript" src="lib/lightbox/js/lightbox.js"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
      table th{
        text-align: center;
      }
      #td_titles{
        font-weight: bold;
        font-size: 15px;
      }
      embed{
        width: 100px;
        height: 100px;
        cursor: pointer;
        padding: 5px;
      }
      embed:hover{
        transform: scale(2.0);
      }#docx_id{

      }h3,h6{
        color: white;
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
                  if(isset($_GET['get_std_view_id'])){
                    $view_id=$_GET['get_std_view_id'];
                    $sql="SELECT * FROM `submit_assigments` WHERE `primary_key`='$view_id'";
                    $run=mysqli_query($cn,$sql);
                    while($get_data=mysqli_fetch_array($run)){
                      $submitted_id=$get_data['std_id'];
                      $submitted_assigment=$get_data['assigment'];
                      $submitted_on=$get_data['submitted_on'];
                      $std_assigment_title=$get_data['title'];
                      $std_assigment_description=$get_data['description'];
                      $pk=$get_data['primary_key'];
                      $created_by=$get_data['assigment_was_created_by'];
                    }

                    $sql="SELECT * FROM `student_whose_submitted` WHERE `id`='$submitted_id'";
                    $run_b=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run_b)>0){
                      while($get_data=mysqli_fetch_array($run_b)){
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
                    }

                    ?>
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="card card-dark">
                          <div class="card-header">
                            <h3 class="text-center"><?php echo $submitted_assigment; ?></h3>
                            <?php $user_submitted=$_SESSION['student_logged_in']['first_name']; ?>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                <table>
                                  <tr bgcolor="card-dark">
                                  <td style="text-align: left;" id="td_titles">
                                    Title  
                                  </td>
                                  <td>
                                  <?php echo $std_assigment_title; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="text-align: left;" id="td_titles">
                                    Description  
                                  </td>
                                  <td>
                                    <?php echo $std_assigment_description; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Status  
                                  </td>
                                  <td>
                                    <?php echo "<span class='badge badge-success' style='font-family:verdana;'>Completed</span>"; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Confirmation  
                                  </td>
                                  <td>
                                    <?php echo "<span style='font-family:verdana;' class='badge badge-primary'>pending</span>"; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="text-align: left;" id="td_titles">
                                    Submitted On
                                  </td>
                                  <td>
                                    <?php
                                    echo "<span style='font-family:verdana;' class='badge badge-purple bg-purple'>$submitted_on</span>";
                                    ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="text-align: left;" id="td_titles">
                                    Submitted By
                                  </td>
                                  <td>
                                    <?php
                                    echo "<span style='font-family:verdana;' class='badge badge-purple bg-purple'>$user_submitted</span>";
                                    ?>
                                  </td>
                                </tr>
                              </table>
                            </div>
                            <div class="col-md-6" style="text-align: center;">
                              <div class="card">
                                <div class="card-header bg-dark">
                                  <?php
                                  $sql="SELECT * FROM `attach_evidences` WHERE `id`='$submitted_id' and `assigment`='$submitted_assigment'";
                                    $run_b=mysqli_query($cn,$sql);
                                    if(mysqli_num_rows($run_b)>0){
                                      $count_b=0;
                                      while ($get_data_b=mysqli_fetch_array($run_b)) {
                                        $count_b+=1;
                                      }
                                      
                                     echo "<h6>".$count_b." Attachements</h6>"; 
                                    
                                    }
                                  ?>
                                </div>
                                <div class="card-body">
                                  <?php
                              

                              
                              $sql="SELECT * FROM `attach_evidences` WHERE `id`='$submitted_id' and `assigment`='$submitted_assigment'";
                              $run_a=mysqli_query($cn,$sql);
                              if(mysqli_num_rows($run_a)>0){
                                while ($get_data_b=mysqli_fetch_array($run_a)) {
                                  $attach_id=$get_data_b['id'];
                                  $attach_assigment=$get_data_b['assigment'];
                                  $attach_file=$get_data_b['files'];
                                  $text             =pathinfo($attach_file,PATHINFO_EXTENSION);
                                  if($text === 'pptx' or $text === 'PPTX'){
                                    
                                     //$attach_file=read_file_docx($attach_file);
                                          // or /var/www/html/file.docx
                                          ?>
                                          <tr>
                                            <td>ppt file
                                              <a href="preview_pdf.php?doc_id=<?php echo $attach_file; ?>" href="">
                                                <span class="badge badge-danger">click to open</span>
                                              </a>
                                            </td>
                                          </tr>
                                          
                                          <?php   

                                   
                                  }elseif($text === 'docx' or $text === 'DOCX'){
                                    
                                     //$attach_file=read_file_docx($attach_file);
                                          // or /var/www/html/file.docx
                                          ?>
                                          <tr>
                                            <td>word file
                                              <a href="preview_pdf.php?doc_id=<?php echo $attach_file; ?>" href="">
                                                <span class="badge badge-info">click to open</span>
                                              </a>
                                            </td>
                                          </tr>
                                          
                                          
                                          <?php   

                                   
                                  }elseif ($text == 'pdf' or $text=='PDF') { 
                                    ?><tr>
                                      <td>pdf file
                                        <a href="preview_pdf.php?get_pdf=<?php echo $attach_file; ?>" href="">
                                            <span class="badge bg-maroon">click to open</span>
                                          </a>
                                      </td>
                                    </tr>
                                          
                                          
                                          <?php
                                  }elseif ($text == 'txt' or $text=='TXT') {
                                    ?><tr>
                                      <td>text file
                                        <a href="preview_pdf.php?get_pdf=<?php echo $attach_file; ?>" href="">
                                            <span class="badge badge-info">click to open</span>
                                          </a>
                                      </td>
                                    </tr>
                                    <?php
                                  }
                                  else{
                                    ?>
                                   <a href="<?php echo $attach_file; ?>" rel="lightbox" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                      
                                      <embed src="<?php echo $attach_file; ?>" rel="lightbox"></embed>
                                  </a>                                    
                                    <?php
                                  }
                                  ?> 
                                  


 
                                     
                                    
                                  <?php
                                }
                              }
                              ?>
                                </div>
                              </div>
                              
        
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php

                  }elseif(isset($_GET['get_std_resubmit_id'])){
                    $view_id=$_GET['get_std_resubmit_id'];
                    $sql="SELECT * FROM `re_submit_assignments` WHERE `f_k`='$view_id'";
                    $run=mysqli_query($cn,$sql);
                    while($get_data=mysqli_fetch_array($run)){
                      $submitted_id=$get_data['f_k'];
                      $submitted_assigment=$get_data['assignment'];
                      $submitted_on=$get_data['re_submiited_on'];
                      $std_assigment_title=$get_data['title'];
                      $std_assigment_description=$get_data['descr'];
                      $pk=$get_data['p_k'];
                      $created_by=$get_data['submitted_to'];
                    }

                    $sql="SELECT * FROM `student_whose_submitted` WHERE `id`='$submitted_id'";
                    $run_b=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run_b)>0){
                      while($get_data=mysqli_fetch_array($run_b)){
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
                    }

                    ?>
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="card card-dark">
                          <div class="card-header">
                            <h3 class="text-center"><?php echo $submitted_assigment; ?></h3>
                            <?php $user_submitted=$_SESSION['student_logged_in']['first_name']; ?>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                <table>
                                <tr class="bg-dark">
                                  <td style="text-align: left;" id="td_titles">
                                    Assignment  
                                  </td>
                                  <td>
                                  <?php echo $submitted_assigment; ?>
                                  </td>
                                </tr>
                                  <tr class="bg-gray">
                                  <td style="text-align: left;" id="td_titles">
                                    Title  
                                  </td>
                                  <td>
                                  <?php echo $std_assigment_title; ?>
                                  </td>
                                </tr>
                                <tr class="bg-red">
                                  <td style="text-align: left;" id="td_titles">
                                    Description  
                                  </td>
                                  <td>
                                    <?php echo $std_assigment_description; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Status  
                                  </td>
                                  <td>
                                    <?php echo "<span class='badge badge-success' style='font-family:verdana;'>Completed</span>"; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Confirmation  
                                  </td>
                                  <td>
                                    <?php echo "<span style='font-family:verdana;' class='badge badge-primary'>pending</span>"; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="text-align: left;" id="td_titles">
                                    Re Submitted On&nbsp;
                                  </td>
                                  <td>
                                    <?php
                                    echo "<span style='font-family:verdana;' class='badge badge-purple bg-purple'>$submitted_on</span>";
                                    ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="text-align: left;" id="td_titles">
                                    Submitted By
                                  </td>
                                  <td>
                                    <?php
                                    echo "<span style='font-family:verdana;' class='badge badge-purple bg-purple'>$user_submitted</span>";
                                    ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="text-align: left;" id="td_titles">
                                    Submitted To
                                  </td>
                                  <td>
                                    <?php
                                    echo "<span style='font-family:verdana;' class='badge badge-secondary bg-danger'>$created_by</span>";
                                    ?>
                                  </td>
                                </tr>
                              </table>
                            </div>
                            <div class="col-md-6" style="text-align: center;">
                              <div class="card">
                                <div class="card-header bg-dark">
                                  <?php
                                  $sql="SELECT * FROM `re_submitted_attachments` WHERE `f_k`='$submitted_id' and `assignment`='$submitted_assigment'";
                                    $run_b=mysqli_query($cn,$sql);
                                    if(mysqli_num_rows($run_b)>0){
                                      $count_b=0;
                                      while ($get_data_b=mysqli_fetch_array($run_b)) {
                                        $count_b+=1;
                                      }
                                      
                                     echo "<h6>".$count_b." Attachements</h6>"; 
                                    
                                    }
                                  ?>
                                </div>
                                <div class="card-body">
                                  <?php
                              

                              
                              $sql="SELECT * FROM `re_submitted_attachments` WHERE `f_k`='$submitted_id' and `assignment`='$submitted_assigment'";
                              $run_a=mysqli_query($cn,$sql);
                              if(mysqli_num_rows($run_a)>0){
                                while ($get_data_b=mysqli_fetch_array($run_a)) {
                                  $attach_id=$get_data_b['f_k'];
                                  $attach_assigment=$get_data_b['assignment'];
                                  $attach_file=$get_data_b['files'];
                                  $text             =pathinfo($attach_file,PATHINFO_EXTENSION);
                                  if($text === 'pptx' or $text === 'PPTX'){
                                    
                                     //$attach_file=read_file_docx($attach_file);
                                          // or /var/www/html/file.docx
                                          ?>
                                          <tr>
                                            <td>ppt file
                                              <a href="preview_pdf.php?doc_id=<?php echo $attach_file; ?>" href="">
                                                <span class="badge badge-danger">click to open</span>
                                              </a>
                                            </td>
                                          </tr>
                                          
                                          <?php   

                                   
                                  }elseif($text === 'docx' or $text === 'DOCX'){
                                    
                                     //$attach_file=read_file_docx($attach_file);
                                          // or /var/www/html/file.docx
                                          ?>
                                          <tr>
                                            <td>word file
                                              <a href="preview_pdf.php?doc_id=<?php echo $attach_file; ?>" href="">
                                                <span class="badge badge-info">click to open</span>
                                              </a>
                                            </td>
                                          </tr>
                                          
                                          
                                          <?php   

                                   
                                  }elseif ($text == 'pdf' or $text=='PDF') { 
                                    ?><tr>
                                      <td>pdf file
                                        <a href="preview_pdf.php?get_pdf=<?php echo $attach_file; ?>" href="">
                                            <span class="badge bg-maroon">click to open</span>
                                          </a>
                                      </td>
                                    </tr>
                                          
                                          
                                          <?php
                                  }elseif ($text == 'txt' or $text=='TXT') {
                                    ?><tr>
                                      <td>text file
                                        <a href="preview_pdf.php?get_pdf=<?php echo $attach_file; ?>" href="">
                                            <span class="badge badge-info">click to open</span>
                                          </a>
                                      </td>
                                    </tr>
                                    <?php
                                  }
                                  else{
                                    ?>
                                   <a href="<?php echo $attach_file; ?>" rel="lightbox" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                                      
                                      <embed src="<?php echo $attach_file; ?>" rel="lightbox"></embed>
                                  </a>                                    
                                    <?php
                                  }
                                  ?> 
                                  


 
                                     
                                    
                                  <?php
                                }
                              }
                              ?>
                                </div>
                              </div>
                              
        
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php

                  }elseif (isset($_GET['get_std_acpt_id'])) {
                    $acpt=$_GET['get_std_acpt_id'];
                    $sql="SELECT * FROM `students_assigment_accepted` WHERE `id`='$acpt'";
                    $run_acp=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run_acp)>0){
                      while ($get_acpt_data=mysqli_fetch_array($run_acp)) {
                        $id_a=$get_acpt_data['id'];
                        $student_a=$get_acpt_data['std_name'];
                        $student_assigment_a=$get_acpt_data['asssigment'];
                        $student_assigment_title_a=$get_acpt_data['title'];
                        $student_assigment_description_a=$get_acpt_data['description'];
                        $student_email_a=$get_acpt_data['std_email'];
                        $student_submitted_Dat_a=$get_acpt_data['submition_date'];
                        $student_confirmation_a=$get_acpt_data['confirmation'];
                        $student_marks_a=$get_acpt_data['marks'];
                        $assigment_due_date_a=$get_acpt_data['due_date'];
                        $by_a=$get_acpt_data['confirm_by'];
                        $lec_email_a=$get_acpt_data['lec_email'];
                      }

                      //get assigment total marks
                      $sql_lec="SELECT * FROM `creat_assigment` WHERE `created_by`='$by_a'";
                      $run_lec=mysqli_query($cn,$sql_lec);
                      if($run_lec){
                        while ($get_lec=mysqli_fetch_array($run_lec)) {
                          $total_marks_a=$get_lec['ass_marks'];
                        }
                      }

                      ?>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <a href="submitted_assigments.php" class="btn btn-secondary text-white">Go back</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="float-right">
                                  <a href="student_assigment_details_print.php?id_a=<?php echo $id_a; ?>" class="btn btn-secondary text-white" target="_blank"><i class="fas fa-print"></i> Print</a>
                                </div>
                        </div>
                      </div><br>
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="card card-dark">
                          <div class="card-header">
                            <div class="row">
                              <div class="col-md-12">
                                <?php //$user_submitted=$_SESSION['student_logged_in']['first_name']; ?>
                                <?php echo "<h6 class='float-left' style='color:white;'>$student_a</h6>"?>
                              </div>
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                <table>
                                  <tr bgcolor="card-dark">
                                  <td style="text-align: left;" id="td_titles">
                                    Assigment  
                                  </td>
                                  <td>
                                  <?php echo $student_assigment_a; ?>
                                  </td>
                                </tr>
                                  <tr>
                                  <td style="text-align: left;" id="td_titles">
                                    Title  
                                  </td>
                                  <td>
                                  <?php echo $student_assigment_title_a; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="text-align: left;" id="td_titles">
                                    Description  
                                  </td>
                                  <td>
                                    <?php echo $student_assigment_description_a; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Status  
                                  </td>
                                  <td>
                                    <?php echo "<span class='badge badge-success'>Completed</span>"; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Marks  
                                  </td>
                                  <td>
                                    <?php 
                                    if($student_marks_a > 0){
                                      echo $student_marks_a; 
                                    }else{
                                      echo "0 / ".$total_marks_a; 
                                    }
                                    ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Due Date  
                                  </td>
                                  <td>
                                    <?php echo $assigment_due_date_a; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Submitted On  
                                  </td>
                                  <td>
                                    <?php echo $student_submitted_Dat_a; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Confirmation  
                                  </td>
                                  <td>
                                    <?php echo "<span class='badge badge-success'>$student_confirmation_a</span>"; ?>
                                  </td>
                                </tr>
                              </table>
                            </div>
                            <div class="col-md-6" style="text-align: center;">
                              <div class="card">
                                <div class="card-header bg-dark">
                                  <div class="h5" style="color: lightgreen;">Accepted</div>
                                </div>
                                <div class="card-body">
                                  <p class="small">Congrates! your assigment has been  Accepted by <?php echo $by_a; ?></p>
                                  <p class="small">You can contact with <?php echo $by_a; ?> by 
                                    <strong><?php echo $lec_email_a; ?></strong></p>
                                </div>
                              </div>
                              
        
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php

                    }
                    
                  }elseif (isset($_GET['get_std_rjt_id'])) {
                   $rjt=$_GET['get_std_rjt_id'];
                    $sql="SELECT * FROM `students_assigment_rejected` WHERE `id`='$rjt'";
                    $run_rjt=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run_rjt)>0){
                      while ($get_rjt_data=mysqli_fetch_array($run_rjt)) {
                        $id_r=$get_rjt_data['id'];
                        $student_r=$get_rjt_data['std_name'];
                        $student_assigment_r=$get_rjt_data['asssigment'];
                        $student_assigment_title_r=$get_rjt_data['title'];
                        $student_assigment_description_r=$get_rjt_data['description'];
                        $student_email_r=$get_rjt_data['std_email'];
                        $student_submitted_Dat_r=$get_rjt_data['submition_date'];
                        $student_confirmation_r=$get_rjt_data['confirmation'];
                        $reason_r=$get_rjt_data['reject_reason'];
                        $student_marks_r=$get_rjt_data['marks'];
                        $assigment_due_date_r=$get_rjt_data['due_date'];
                        $by_r=$get_rjt_data['confirm_by'];
                        $lec_email_r=$get_rjt_data['lec_email'];
                        $rejected_on=$get_rjt_data['confirm_on'];
                        
                      }

                      //get assigment total marks
                      $sql_lec="SELECT * FROM `creat_assigment` WHERE `created_by`='$by_r'";
                      $run_lec=mysqli_query($cn,$sql_lec);
                      if($run_lec){
                        while ($get_lec=mysqli_fetch_array($run_lec)) {
                          $total_marks_r=$get_lec['ass_marks'];
                        }
                      }
                      ?>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <a href="submitted_assigments.php" class="btn btn-secondary text-white">Go back</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="float-right">
                                  <a href="student_assigment_details_print.php?id_r=<?php echo $id_r; ?>" class="btn btn-secondary" target="_blank"><i class="fas fa-print"></i> Print</a>
                            </div>
                        </div>
                      </div><br>
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="card card-dark">
                          <div class="card-header">
                            <div class="row">
                              <div class="col-md-12">
                                <?php //$user_submitted=$_SESSION['student_logged_in']['first_name']; ?>
                                <?php echo "<h6 class='float-left' style='color:white;'>$student_r</h6>"?>
                              </div>
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="table-responsive">
                                <table>
                                  <tr>
                                  <td style="text-align: left;" id="td_titles">
                                    Assigment  
                                  </td>
                                  <td>
                                  <?php echo $student_assigment_r; ?>
                                  </td>
                                </tr>
                                  <tr>
                                  <td style="text-align: left;" id="td_titles">
                                    Title  
                                  </td>
                                  <td>
                                  <?php echo $student_assigment_title_r; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="text-align: left;" id="td_titles">
                                    Description  
                                  </td>
                                  <td>
                                    <?php echo $student_assigment_description_r; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Status  
                                  </td>
                                  <td>
                                    <?php echo "<span class='badge badge-success'>Completed</span>"; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Marks  
                                  </td>
                                  <td>
                                    <?php 
                                    if($student_marks_r > 0){
                                      echo $student_marks_r." / ".$total_marks_r; 
                                    }else{
                                      echo "0 / ".$total_marks_r; 
                                    }
                                    ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Due Date  
                                  </td>
                                  <td>
                                    <?php echo $assigment_due_date_r; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Submitted On  
                                  </td>
                                  <td>
                                    <?php echo $student_submitted_Dat_r; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Confirmation  
                                  </td>
                                  <td>
                                    <?php echo "<span class='badge badge-danger'>$student_confirmation_r</span>"; ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td  style="text-align: left;" id="td_titles">
                                    Rejected On  
                                  </td>
                                  <td>
                                    <?php echo "$rejected_on"; ?>
                                  </td>
                                </tr>
                              </table>
                            </div>
                            </div>
                            <div class="col-md-6" style="text-align: center;">
                              <div class="card">
                                <div class="card-header bg-dark">
                                  <div class="h5 danger" style="color: red;">Rejected</div>
                                </div>
                                <div class="card-body">
                                  <div class="h6">Sorry! your assigment has been rejected by <?php echo $by_r ." You can contact with him using ";?>
                                    <strong class="badge badge-primary" style="font-family: verdana;font-size: 10px;padding:5px;margin: 5px;"><?php echo $lec_email_r; ?></strong></div>
                                  <span class="badge badge-warning"></span>
                                  <label for="txt_reject_reason" class="float-left badge badge-danger">Reason:</label>
                                  <textarea class="form-control" readonly rows="3" name="txt_reject_reason"><?php echo $reason_r; ?></textarea><br>
                                  <a href="#re_submit_model" data-toggle="modal" class="btn btn-maroon btn-float bg-maroon">
                                    <i class="submit" style="font-family: candara;" data-toggle="tooltip" 
                                  ass-id="<?php echo $id_r; ?>"
                                  ass-name="<?php echo $student_assigment_r; ?>"
                                  lec-name="<?php echo $by_r; ?>"
                                  title="Re submit Assignment">Re - Submit</i>
                                  </a>
                                </div>
                              </div>
                              <!-- model assigment information -->
                              <div class="modal fade" id="re_submit_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <form method="post" enctype="multipart/form-data">
                                      <div class="modal-header bg-danger">
                                        <p class="modal-title" id="exampleModalLabel">Assignment Info</p>
                                        <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      
                                      <div class="modal-body">
                                        <input type="hidden" name="ass_id" id="id_v">
                                        <input type="hidden" name="lec_name" id="lec_name_v">
                                        <label class="label float-left">Assigment</label>
                                        <div class="form-group">
                                          <input type="text" name="text_assignment" readonly class="form-control" id="ass_name_v">
                                        </div>
                                        <div class="form-group">
                                          <label class="label float-left">Title</label>
                                          <input type="text" name="text_title" class="form-control">
                                        </div>
                                        <div class="form-group">
                                          <label class="label float-left">Description</label>
                                          <input type="text" name="text_description" class="form-control">
                                        </div>
                                        <div class="form-group">
                                          <div class="file-loading">
                                      <input id="file-4" class="file" name="btn_evidence[]" type="file" multiple data-preview-file-type="any" data-show-upload="false" data-show-cancel="false" data-upload-url="#" data-theme="fas">
                                  </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer bg-light">
                                        <button type="button" class="btn btn-danger btn-float" data-dismiss="modal">Close</button>
                                        <button type="submit" name="btn_resubmit" class="btn btn-success btn-float">Submit</button>
                                      </div>
                                      </form>
                                    </div>
                                  </div>
                                </div><!-- end model-->
                                <?php
                                if(isset($_POST['btn_resubmit'])){
                                  $count          =  count($_FILES["btn_evidence"]["name"]);
                                  $tmp_dir        =$_FILES["btn_evidence"]["tmp_name"];
                                  for($i=0;$i<$count;$i++){
                                    $filename     = $_FILES["btn_evidence"]["name"][$i];
                                    $text         = pathinfo($filename,PATHINFO_EXTENSION);
                                  }
                                  if($_POST['text_title']!= null and  $_POST['text_description']!= null){
                                    if($text != null){
                                    $status=re_submit_assignment();
                                    if($status == true){
                                      ?>
                                      <script type="text/javascript">
                                        $(document).ready(function(){
                                          $('.toastsDefaultSuccess').ready(function() {
                                            $(document).Toasts('create', {
                                              class: 'bg-success', 
                                              title: 'Re-Submitted',
                                              autohide:true,
                                              delay:10000,
                                              subtitle: 'Done',
                                              icon    : 'fas fa-check-circle fa-lg',
                                              body: 'Your assigment has been <b>Re-Submitted</b>. When it will be acceptable from the lecturer then you will be inform  by recieving an email. ThankYou!'
                                            })
                                          });
                                        });
                                      </script>
                                    <?php
                                    }elseif ($status == "already_submitted") {
                                      ?>
                                      <script type="text/javascript">
                                        $(document).ready(function(){
                                          $('.toastsDefaultDanger').ready(function() {
                                            $(document).Toasts('create', {
                                              class: 'bg-danger', 
                                              title: 'Re-Submitted',
                                              autohide:true,
                                              delay:10000,
                                              subtitle: 'Alread',
                                              icon    : 'fas fa-info-circle fa-lg',
                                              body: 'You have already submitted last time\n No need to re-submit wait for confirmation from the your Superior'
                                            })
                                          });
                                        });
                                      </script>
                                    <?php
                                    }elseif ($status == "extension_error") {
                                    ?>
                                      <script type="text/javascript">
                                        $(document).ready(function(){
                                          $('.toastsDefaultMaroon').ready(function() {
                                            $(document).Toasts('create', {
                                              class: 'bg-maroon', 
                                              title: 'Files Error',
                                              autohide:true,
                                              delay:10000,
                                              subtitle: 'Extensoin error',
                                              icon    : 'fas fa-times-circle fa-lg',
                                              body: 'Your files was not correct plz check your files and then try again'
                                            })
                                          });
                                        });
                                      </script>
                                    <?php
                                  }elseif ($status == "error_uploading_files") {
                                    ?>
                                      <script type="text/javascript">
                                        $(document).ready(function(){
                                          $('.toastsDefaultPurple').ready(function() {
                                            $(document).Toasts('create', {
                                              class: 'bg-purple', 
                                              title: 'Uploading Error',
                                              autohide:true,
                                              delay:10000,
                                              subtitle: 'error',
                                              icon    : 'fas fa-times-circle fa-lg',
                                              body: 'Your files Can not submite something went wrong!'
                                            })
                                          });
                                        });
                                      </script>
                                    <?php
                                  }elseif ($status == "not_exists") {
                                    ?>
                                      <script type="text/javascript">
                                        $(document).ready(function(){
                                          $('.toastsDefaultPurple').ready(function() {
                                            $(document).Toasts('create', {
                                              class: 'bg-purple', 
                                              title: 'Not Exists',
                                              autohide:true,
                                              delay:10000,
                                              subtitle: 'error',
                                              icon    : 'fas fa-times-circle fa-lg',
                                              body: 'Your previous assignment was not set this rebmission can not done!'
                                            })
                                          });
                                        });
                                      </script>
                                    <?php
                                  }else{
                                    ?>
                                      <script type="text/javascript">
                                        $(document).ready(function(){
                                          $('.toastsDefaultPurple').ready(function() {
                                            $(document).Toasts('create', {
                                              class: 'bg-purple', 
                                              title: 'Not Done',
                                              autohide:true,
                                              delay:10000,
                                              subtitle: 'Error',
                                              icon    : 'fas fa-times-circle fa-lg',
                                              body: 'Oops! can not re-submit something went wrong!'
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
                                              title: '0 Files',
                                              autohide:true,
                                              delay:10000,
                                              subtitle: 'Error',
                                              icon    : 'fas fa-times-circle fa-lg',
                                              body: "Operation can not be done because \n You didn't select any files"
                                            })
                                          });
                                        });
                                      </script>
                                    <?php
                                }
                                }
                                  else{
                                    ?>
                                      <script type="text/javascript">
                                        $(document).ready(function(){
                                          $('.toastsDefaultdark').ready(function() {
                                            $(document).Toasts('create', {
                                              class: 'bg-dark', 
                                              title: 'Missing Fields',
                                              autohide:true,
                                              delay:5000,
                                              subtitle: 'Error',
                                              icon    : 'fas fa-times-circle fa-lg',
                                              body: 'Can not done missing input fileds'
                                            })
                                          });
                                        });
                                      </script>
                                    <?php
                                  }
                                }
                                ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php

                    }
                  }else{
                      echo "<h1 style='text-align:center;color:grey;'>Oops! Assignment Not Found Something Went Wrong</h1>";
                    }
                  ob_end_flush();
                  ?>
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
<script src="lib/lightbox/js/lightbox.min.js"></script>
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
<!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- REQUIRED SCRIPTS -->
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>


 <script>
    $(document).on('click','.submit',function(e) {
    var ass_id=$(this).attr("ass-id");
    var ass_name=$(this).attr("ass-name");
    var lec_name=$(this).attr("lec-name");
    $('#id_v').val(ass_id);
    $('#ass_name_v').val(ass_name);
    $('#lec_name_v').val(lec_name);
  });
    </script>

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
