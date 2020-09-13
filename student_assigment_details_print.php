<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Invoice</title>
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
            }elseif (isset($_GE['rejected_std_details_id'])) {
              $b_id=$_GET['rejected_std_details_id'];
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

                    }
            }
            ?>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <?php echo $std_name; ?>
          <small class="float-right"><?php echo "Date : ". date('m/d/Y'); ?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
     <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-info"></i> <b>Student Info</b><br><br>
                  <address>
                    <strong>Faculty : <?php echo "$std_faculty"; ?></strong><br>
                    Department : <?php echo "$std_department"; ?><br>
                    Semester : <?php echo "$std_semester"; ?><br>
                    Phone : <?php echo "$std_mob"; ?><br>
                    Emil : <?php echo "$std_email"; ?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-info"></i> <b>Assigment Info</b><br><br>
                  <address>
                    <strong>Assigment : <?php echo "$std_assigment"; ?></strong><br>
                    Title : <?php echo "$assigment_title"; ?><br>
                    Descriptionn : <?php echo "$assigment_description"; ?><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <i class="fas fa-info"></i> <b>Submission Info</b><br><br>
                    <strong>Due Date : <?php echo "$ass_due_date"; ?></strong><br>
                    Submitted On : <?php echo "$ass_submit_date"; ?><br><br>
                    <div class="badge badge-info">
                    Submitted To : <?php echo "$confirm_by"; ?><br>
                    Email : <?php echo "$lec_email"; ?><br>
                    </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

    <div class="row">
      <div class="col-6">

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Confirmation</th>
              <td><p style="color: green;"><?php echo $std_confirmation; ?></p></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
