<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lecturer Generate Print</title>
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
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
  <!-- Content Header (Page header) -->

            <div class="card">
              <div class="card-header mb-3">
                <div class="row">
                        <?php
                        include('db_page.php');
                      $cn=db_connection();
                       if(isset($_GET['teacher_print_id'])){
                        $id=$_GET['teacher_print_id'];
                        $sql="SELECT * FROM `tbl_request_lectureres` WHERE `id`='$id'";
                        $run=mysqli_query($cn,$sql);
                        while ($get_data=mysqli_fetch_assoc($run)) {
                        $username=$get_data["username"];
                        $email=$get_data["email"];
                        $role=$get_data["role"];
                        $faculty=$get_data["faculty"];
                        $entry_date=$get_data["entry_date"];
                        }?>
                  <div class="col-md-11">
                    <h3 style="text-align: center;"><?php echo $username; ?></h3>
                    <h3 style="text-align: center;"><?php echo $email; ?></h3>
                  </div>
                    <div class="col-md-1">
                                       <?php
                      $cn=db_connection();
                       if(isset($_GET['teacher_print_id'])){
                        $id=$_GET['teacher_print_id'];
                        $sql="SELECT * FROM `tbl_request_lectureres` WHERE `id`='$id'";
                        $run=mysqli_query($cn,$sql);
                        $get_data=mysqli_fetch_assoc($run);
          
                        }?>
                        <div class="img img-circle">
                          <?php if(file_exists($get_data["image"])){
                            ?>
                            <img src="<?php echo $get_data["image"]; ?>" class="img-circle" style="width: 80%;height: 90%; margin: auto;float: right;">
                             <?php
                          } else{
                              echo "No Image<br>Available";
                          }
                          ?>
                          
                        </div>
                        <?php
                        

                      }else{
                        echo "<h2>OOPS! User Not Found <span class='fa fa-angle-right'> <a href='teacher_requests_page.php'> Go Back To Request Page </a></span></h2>";
                      }
                   
                        ?>
                  </div>
                </div>
              </div>
              <div class="card-body mr-1">
                <table class="table table-bordere table-hover mb-3">
                  <div class="row">
                    <div class="col-md-6">
                      <?php 
                        if(isset($_GET['teacher_print_id'])){
                          ?>
                      <th>user Type</th>
                      <th>Faculty</th>
                      <th>Request Date</th>
                      <th>Print Date</th></tr>
                     <tr>
                       <td><?php echo $role; ?></td>
                        <td><?php echo $faculty; ?></td>
                        <td><?php echo $entry_date; ?></td>
                        <td><?php echo date('d/m/yy'); ?></td>
                     </tr>
                    </div>
                    <div class="col-md-6">
                     
                    </div> 
                  </div>              
                </table>
              <center>
                <div class="row">
                  <div class="col-md-12">
                <?php
                echo "<span class='badge badge-warning' style='font-family:Arial;'><h4 style='text-align:center;'>MR. ".$username." Would like to request an account please make sure"."</h4></span>";
                ?>
                  </div>
                </div></center>
              </div>
              <div class="card-footer">
                <div class="row" style="margin-left: 100px;">
                  <div class="col-lg-4"></div>
                    <div class="col-lg-4"></div>
                      <div class="col-lg-4">
                        <a href="teacher_requests_page.php"  class="btn btn-success">Go Back</a>
                      </div>
                </div>
              </div>
            </div>
            </div>
            <script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
                        <?php

                        }

                       ?>
      </div><!-- /.container-fluid -->
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
</html>
