<?php
session_start();
   if(isset($_SESSION["student_logged_in"])){
          }else{
            header("location:login_page.php");
          }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BKUC | AMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
    section{
      padding: 50px;
    }
  </style>
</head>
<?php
            if(isset($_GET['accepted_std_details_id'])){
              $a_id=$_GET['accepted_std_details_id'];
              include('db_page_2.php');
              $cn=db_connection();
                    $sql="SELECT * FROM `students_assigment_accepted` WHERE `id`='$a_id'";
                    $run=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run)>0){
                      $count_accepted=0;
                      while ($get_data=mysqli_fetch_assoc($run)) {
                        $id=$get_data['id'];
                        $std_name=$get_data['std_name'];
                        $std_email=$get_data['std_email'];
                        $std_mob=$get_data['std_mob'];
                        $std_img=$get_data['std_img'];
                        $std_assigment=$get_data['asssigment'];
                        $std_marks=$get_data['marks'];
                        $assigment_title=$get_data['title'];
                        $assigment_description=$get_data['description'];
                        $ass_due_date=$get_data['due_date'];
                        $ass_submit_date=$get_data['submition_date'];
                        $std_confirmation=$get_data['confirmation'];
                        $confirm_by=$get_data['confirm_by'];
                        $lec_email=$get_data['lec_email'];
                        $confirm_on=$get_data['confirm_on'];
                        $count_accepted+=1;
                      }

                      //get assigment total marks
                      $sql_lec="SELECT * FROM `creat_assigment` WHERE `created_by`='$confirm_by'";
                      $run_lec=mysqli_query($cn,$sql_lec);
                      if($run_lec){
                        while ($get_lec=mysqli_fetch_array($run_lec)) {
                          $total_marks_acp=$get_lec['ass_marks'];
                        }
                      }
                      //getting std more info
                      $sql="SELECT * FROM `registred_students` WHERE `email`='$std_email'";
                      $getting=mysqli_query($cn,$sql);
                      if(mysqli_num_rows($getting)>0){
                        while ($get_std_info=mysqli_fetch_assoc($getting)) {
                          $std_department=$get_std_info['department'];
                          $std_faculty=$get_std_info['faculty'];
                          $std_semester=$get_std_info['semester'];
                        }
                      }
                    }
            }elseif (isset($_GET['rejected_std_details_id'])) {
              $b_id=$_GET['rejected_std_details_id'];
              include('db_page_2.php');
              $cn=db_connection();
                    $sql="SELECT * FROM `students_assigment_rejected` WHERE `id`='$b_id'";
                    $run_a=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run_a)>0){
                      $count_rejected=0;
                      while ($get_data_b=mysqli_fetch_array($run_a)) {
                        $id_r=$get_data_b['id'];
                        $std_name_r=$get_data_b['std_name'];
                        $std_email_r=$get_data_b['std_email'];
                        $std_mob_r=$get_data_b['std_mob'];
                        $std_img_r=$get_data_b['std_img'];
                        $std_assigmen_rt=$get_data_b['asssigment'];
                        $std_marks_r=$get_data_b['marks'];
                        $std_title_r=$get_data_b['title'];
                        $std_description_r=$get_data_b['description'];
                        $ass_due_date_r=$get_data_b['due_date'];
                        $ass_submit_date_r=$get_data_b['submition_date'];
                        $std_confirmation_r=$get_data_b['confirmation'];
                        $confirm_by_r=$get_data_b['confirm_by'];
                        $lec_email_r=$get_data_b['lec_email'];
                        $confirm_on_r=$get_data_b['confirm_on'];
                        $count_rejected+=1;
                      }
                      //getting std more info
                      $sql="SELECT * FROM `registred_students` WHERE `email`='$std_email_r'";
                      $getting=mysqli_query($cn,$sql);
                      if(mysqli_num_rows($getting)>0){
                        while ($get_std_info=mysqli_fetch_assoc($getting)) {
                          $std_department_r=$get_std_info['department'];
                          $std_faculty_r=$get_std_info['faculty'];
                          $std_semester_r=$get_std_info['semester'];
                        }
                      }

                    }
            }elseif (isset($_GET['id_r'])) {
              $id_r=$_GET['id_r'];
              include('db_page_2.php');
              $cn=db_connection();
              $student_email_r=$_SESSION["student_logged_in"]["std_email"];
                    $sql="SELECT * FROM `students_assigment_rejected` WHERE `id`='$id_r'";
                    $run_a=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run_a)>0){
                      while ($get_data_b=mysqli_fetch_array($run_a)) {
                        $id_r=$get_data_b['id'];
                        $std_name_r=$get_data_b['std_name'];
                        $std_email_r=$get_data_b['std_email'];
                        $std_mob_r=$get_data_b['std_mob'];
                        $std_img_r=$get_data_b['std_img'];
                        $std_assigmen_rt=$get_data_b['asssigment'];
                        $std_marks_r=$get_data_b['marks'];
                        $std_title_r=$get_data_b['title'];
                        $std_description_r=$get_data_b['description'];
                        $ass_due_date_r=$get_data_b['due_date'];
                        $ass_submit_date_r=$get_data_b['submition_date'];
                        $std_confirmation_r=$get_data_b['confirmation'];
                        $confirm_by_r=$get_data_b['confirm_by'];
                        $lec_email_r=$get_data_b['lec_email'];
                        $confirm_on_r=$get_data_b['confirm_on'];
                      }

                      //get assigment total marks
                      $sql_lec="SELECT * FROM `creat_assigment` WHERE `created_by`='$confirm_by_r'";
                      $run_lec=mysqli_query($cn,$sql_lec);
                      if($run_lec){
                        while ($get_lec=mysqli_fetch_array($run_lec)) {
                          $total_marks_r=$get_lec['ass_marks'];
                        }
                      }
                      //getting std more info
                      $sql="SELECT * FROM `registred_students` WHERE `email`='$student_email_r'";
                      $getting=mysqli_query($cn,$sql);
                      if(mysqli_num_rows($getting)>0){
                        while ($get_std_info=mysqli_fetch_assoc($getting)) {
                          $std_department_r=$get_std_info['department'];
                          $std_faculty_r=$get_std_info['faculty'];
                          $std_semester_r=$get_std_info['semester'];
                        }
                      }

                    }
            }elseif (isset($_GET['id_a'])) {
              $id_a=$_GET['id_a'];
              include('db_page_2.php');
              $cn=db_connection();
              $student_email=$_SESSION["student_logged_in"]["std_email"];
                    $sql="SELECT * FROM `students_assigment_accepted` WHERE `id`='$id_a'";
                    $run_a=mysqli_query($cn,$sql);
                    if(mysqli_num_rows($run_a)>0){
                      while ($get_data_b=mysqli_fetch_array($run_a)) {
                        $id_a=$get_data_b['id'];
                        $std_name_a=$get_data_b['std_name'];
                        $std_email_a=$get_data_b['std_email'];
                        $std_mob_a=$get_data_b['std_mob'];
                        $std_img_a=$get_data_b['std_img'];
                        $std_assigmen_a=$get_data_b['asssigment'];
                        $std_marks_a=$get_data_b['marks'];
                        $std_title_a=$get_data_b['title'];
                        $std_description_a=$get_data_b['description'];
                        $ass_due_date_a=$get_data_b['due_date'];
                        $ass_submit_date_a=$get_data_b['submition_date'];
                        $std_confirmation_a=$get_data_b['confirmation'];
                        $confirm_by_a=$get_data_b['confirm_by'];
                        $lec_email_a=$get_data_b['lec_email'];
                        $confirm_on_a=$get_data_b['confirm_on'];
                      }

                      //get assigment total marks
                      $sql_lec="SELECT * FROM `creat_assigment` WHERE `ass_name`='$std_assigmen_a' and `created_by`='$confirm_by_a'";
                      $run_lec=mysqli_query($cn,$sql_lec);
                      if($run_lec){
                        while ($get_lec=mysqli_fetch_array($run_lec)) {
                          $total_marks_a=$get_lec['ass_marks'];

                        }
                      }

                      //getting std more info
                      $sql="SELECT * FROM `registred_students` WHERE `email`='$student_email'";
                      $getting=mysqli_query($cn,$sql);
                      if(mysqli_num_rows($getting)>0){
                        while ($get_std_info=mysqli_fetch_assoc($getting)) {
                          $std_department_a=$get_std_info['department'];
                          $std_faculty_a=$get_std_info['faculty'];
                          $std_semester_a=$get_std_info['semester'];
                        }
                      }

                    }
            }
            ?>
<body>
<div class="wrapper">
  <?php
if(isset($_GET['accepted_std_details_id'])){
?>
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      
      <!-- /.col -->
    </div><br>
     <!-- info row -->
     <div class="col-12">
        <h2 class="page-header text-center" style="color: green;"><i class="fas fa-globe"></i>
          BKUC ASSIGMENT MANAGEMENT SYSTEM
        </h2><small class="float-right"><?php echo "Date : ". date('m/d/Y'); ?></small>
      </div><br><br>
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-user"></i> <b> Student Info</b><br><br>
                  <address>
                    Student : <?php echo $std_name; ?><br>
                    Faculty : <?php echo "$std_faculty"; ?><br>
                    Department : <?php echo "$std_department"; ?><br>
                    Semester : <?php echo "$std_semester"; ?><br>
                    Phone : <?php echo "$std_mob"; ?><br>
                    Emil : <?php echo "$std_email"; ?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-file"></i> <b> Assigment Info</b><br><br>
                  <address>
                    Assigment : <?php echo "$std_assigment"; ?><br>
                    Title : <?php echo "$assigment_title"; ?><br>
                    Descriptionn : <?php echo "$assigment_description"; ?><br>
                    Marks : <?php echo $std_marks." / ".$total_marks_acp; ?><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-clock"></i> <b> Submission Info</b><br><br>
                    Due Date : <?php echo "$ass_due_date"; ?><br>
                    Submitted On : <?php echo "$ass_submit_date"; ?><br><br>
                    <div class="badge badge-info">
                    Submitted To : <?php echo "$confirm_by"; ?><br>
                    Email : <?php echo "$lec_email"; ?><br>
                    </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->


  </section>
  <!-- /.content -->
      <div class="row">
      <div class="col-6">
        
      </div>
      <div class="col-6">

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Assigment Confirmation</th>
              <td><strong><p style="color: green;"><i class="fas fa-check"></i> <?php echo $std_confirmation; ?></p></strong></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
<?php
}
if(isset($_GET['rejected_std_details_id'])){
?>
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      
      <!-- /.col -->
    </div><br>
     <!-- info row -->
     <div class="col-12">
        <h2 class="page-header text-center" style="color: green;"><i class="fas fa-globe"></i>
          BKUC ASSIGMENT MANAGEMENT SYSTEM
        </h2><small class="float-right"><?php echo "Date : ". date('m/d/Y'); ?></small>
      </div><br><br>
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-user"></i> <b> Student Info</b><br><br>
                  <address>
                    Student : <?php echo $std_name_r; ?><br>
                    Faculty : <?php echo "$std_faculty_r"; ?><br>
                    Department : <?php echo "$std_department_r"; ?><br>
                    Semester : <?php echo "$std_semester_r"; ?><br>
                    Phone : <?php echo "$std_mob_r"; ?><br>
                    Emil : <?php echo "$std_email_r"; ?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-file"></i> <b> Assigment Info</b><br><br>
                  <address>
                    Assigment : <?php echo "$std_assigmen_rt"; ?><br>
                    Title : <?php echo "$std_title_r"; ?><br>
                    Descriptionn : <?php echo "$std_description_r"; ?><br>
                    Marks : <?php echo " 0 / ".$total_marks_r; ?><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-clock"></i> <b> Submission Info</b><br><br>
                    Due Date : <?php echo "$ass_due_date_r"; ?><br>
                    Submitted On : <?php echo "$ass_submit_date_r"; ?><br><br>
                    <div class="badge badge-info">
                    Submitted To : <?php echo "$confirm_by_r"; ?><br>
                    Email : <?php echo "$lec_email_r"; ?><br>
                    </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->


  </section>
  <!-- /.content -->
      <div class="row">
      <div class="col-6">
        
      </div>
      <div class="col-6">

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Assigment Confirmation</th>
              <td><strong><p style="color: red;"><i class="fas fa-times"></i> <?php echo $std_confirmation_r; ?></p></strong></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
<?php
}
if(isset($_GET['id_r'])){
  ?>
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      
      <!-- /.col -->
    </div><br>
     <!-- info row -->
     <div class="col-12">
        <h2 class="page-header text-center" style="color: green;"><i class="fas fa-globe"></i>
          BKUC ASSIGMENT MANAGEMENT SYSTEM
        </h2><small class="float-right"><?php echo "Date : ". date('m/d/Y'); ?></small>
      </div><br><br>
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-user"></i> <b> Student Info</b><br><br>
                  <address>
                    Student : <?php echo $std_name_r; ?><br>
                    Faculty : <?php echo "$std_faculty_r"; ?><br>
                    Department : <?php echo "$std_department_r"; ?><br>
                    Semester : <?php echo "$std_semester_r"; ?><br>
                    Phone : <?php echo "$std_mob_r"; ?><br>
                    Emil : <?php echo "$std_email_r"; ?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-file"></i> <b> Assigment Info</b><br><br>
                  <address>
                    Assigment : <?php echo "$std_assigmen_rt"; ?><br>
                    Title : <?php echo "$std_title_r"; ?><br>
                    Descriptionn : <?php echo "$std_description_r"; ?><br>
                    Marks : <?php echo " 0 / ".$total_marks_r; ?><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-clock"></i> <b> Submission Info</b><br><br>
                    Due Date : <?php echo "$ass_due_date_r"; ?><br>
                    Submitted On : <?php echo "$ass_submit_date_r"; ?><br><br>
                    <div class="badge badge-info">
                    Submitted To : <?php echo "$confirm_by_r"; ?><br>
                    Email : <?php echo "$lec_email_r"; ?><br>
                    </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->


  </section>
  <!-- /.content -->
      <div class="row">
      <div class="col-6">
        
      </div>
      <div class="col-6">

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Assigment Confirmation</th>
              <td><strong><p style="color: red;"><i class="fas fa-times"></i> <?php echo $std_confirmation_r; ?></p></strong></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
<?php
}
if(isset($_GET['id_a'])){
  ?>
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      
      <!-- /.col -->
    </div><br>
     <!-- info row -->
     <div class="col-12">
        <h2 class="page-header text-center" style="color: green;"><i class="fas fa-globe"></i>
          BKUC ASSIGMENT MANAGEMENT SYSTEM
        </h2><small class="float-right"><?php echo "Date : ". date('m/d/Y'); ?></small>
      </div><br><br>
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-user"></i> <b> Student Info</b><br><br>
                  <address>
                    Student : <?php echo $std_name_a; ?><br>
                    Faculty : <?php echo $std_faculty_a; ?><br>
                    Department : <?php echo $std_department_a; ?><br>
                    Semester : <?php echo $std_semester_a; ?><br>
                    Phone : <?php echo $std_mob_a; ?><br>
                    Emil : <?php echo $std_email_a; ?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-file"></i> <b> Assigment Info</b><br><br>
                  <address>
                    Assigment : <?php echo "$std_assigmen_a"; ?><br>
                    Title : <?php echo "$std_title_a"; ?><br>
                    Descriptionn : <?php echo "$std_description_a"; ?><br>
                    Marks : <?php echo $std_marks_a." / ".$total_marks_a; ?><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-clock"></i> <b> Submission Info</b><br><br>
                    Due Date : <?php echo "$ass_due_date_a"; ?><br>
                    Submitted On : <?php echo "$ass_submit_date_a"; ?><br><br>
                    <div class="badge badge-info">
                    Submitted To : <?php echo "$confirm_by_a"; ?><br>
                    Email : <?php echo "$lec_email_a"; ?><br>
                    </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->


  </section>
  <!-- /.content -->
      <div class="row">
      <div class="col-6">
        
      </div>
      <div class="col-6">

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Assigment Confirmation</th>
              <td><strong><p style="color: green;"><i class="fas fa-check"></i> <?php echo $std_confirmation_a; ?></p></strong></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
<?php
}
  ?>
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
