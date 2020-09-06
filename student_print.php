<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BKUC Student | Print</title>
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
             <!-- <div class="card-header mb-3"> -->
                <div class="row">
                        <?php
                        include('db_page.php');
                      $cn=db_connection();
                       if(isset($_GET['print_id'])){
                        $id=$_GET['print_id'];
                        $sql="SELECT * FROM `tbl_students_requests` WHERE `id`='$id'";
                        $run=mysqli_query($cn,$sql);
                        while ($get_data=mysqli_fetch_assoc($run)) {
                        $first_name=$get_data["first_name"];
                        $last_name=$get_data["last_name"];
                        $d_o_b=$get_data["d_o_b"];
                        $email=$get_data["email"];
                        $phone=$get_data["phone"];
                        $address=$get_data["address"];
                        $batch_no=$get_data["batch_no"];
                        $session=$get_data["session"];
                        $faculty=$get_data["faculty"];
                        $department=$get_data["department"];
                        $message=$get_data["message"];
                        }?>
                  <div class="col-md-11"><br><br><br>
                    <h3 style="text-align: center;"><?php echo "Name  : ". $first_name.$last_name; ?></h3>
                    <h4 style="text-align: center;"><?php echo "Email : ".$email; ?></h4>
                  </div>
                    <div class="col-md-1">
                                       <?php
                      $cn=db_connection();
                       if(isset($_GET['print_id'])){
                        $id=$_GET['print_id'];
                        $sql="SELECT * FROM `tbl_students_requests` WHERE `id`='$id'";
                        $run=mysqli_query($cn,$sql);
                        $get_data=mysqli_fetch_assoc($run);
          
                        }?>
                        <div class="img img-circle">
                          <img src="<?php echo $get_data["img"]; ?>" class="img-circle" style="width: 70%;height: 70%; margin: auto;float: right;">
                        </div>
                        <?php
                        
                      }else{
                        echo "<h2>OOPS! User Not Found <span class='fa fa-angle-right'> <a href='student_requests_page.php'> Go Back To Request Page </a></span></h2>";
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
                        if(isset($_GET['print_id'])){
                          ?>
                      <tr>
                      <th>Date Of Birth</th>
                      <th>Phone</th>
                      <th>session</th>
                      <th>Address </th>
                      <th>Faculty</th>
                     <th>Department</th>
                     <th>Batch No</th></tr>
                     <tr>
                        <td><?php echo $d_o_b; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $session; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $faculty; ?></td>
                        <td><?php echo $department; ?></td>
                        <td><?php echo $batch_no; ?></td>
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
                echo "<span class='badge badge-warning' style='font-family:Arial;'><h4 style='text-align:center;'>".$message."</h4></span>";
                ?>
                  </div>
                </div></center>
              </div>
              <div class="card-footer">
                <div class="row" style="margin-left: 100px;">
                  <div class="col-lg-4"></div>
                  <div class="col-lg-4"></div>
                  <div class="col-lg-4">
                    <a href="?approve_id=<?php echo $_GET['details_id'];?>"  class="btn btn-primary">Accept</a>
                    <a href="?reject_id=<?php echo $_GET['details_id'];?>" class="btn btn-danger">Reject</a>
                    <a href="student_requests_page.php"  class="btn btn-success">Go Back</a>
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
