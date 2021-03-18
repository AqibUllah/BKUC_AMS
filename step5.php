<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Recovering password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
   <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
    img{
      width: 100px;
      height: 100px;
    }#abc{
      font-size: 20px;
      font-family: Century Gothics;
    }a{
      color: white;
    }
    a:hover{
      color: yellow;
    }
  </style>
</head>
<body class="hold-transition" style="background: #eee;">
  <?php
  if(isset($_GET['email'])){
  ?>
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <div class="login_box">
          <div class="login-logo">
            <b>Recovering</b> password
          </div>
          <div class="card card-default">
            <center>
              <div class="card-header bg-primary">
                <h3 class="card-title">Just 4 Steps To Recover</h3>
              </div>
            </center>
              <form method="post" id="quickForm" class="md-form">
              <div class="card-body p-0">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg col-md col-sm col-xs">
                        <div class="input-group mb-3">
                        </div>
                          <center>
                            <div class="form-group">
                              <span class="badge badge-primary h1" id="abc"> Step 4 / 4 </span>
                            </div>
                          </center>
                    </div>
                  </div>
                    <!-- your steps content here -->
                      <div class="form-group">
                        <label for="n_pass" class="float-left">New Password</label>
                        <input type="password"v name="n_pass" class="form-control" id="n_pass" placeholder="New Password">
                      </div>
                      <div class="form-group">
                        <label for="c_pass" class="float-left">Confirm Password</label>
                        <input type="password" name="c_pass" class="form-control" id="c_pass" placeholder="Confirm pass">
                      </div>

                      <!-- <button class="btn btn-primary float-left" type="submit"
                      name="btn_back">
                      <i class="fas fa-angle-left"></i>&nbsp; Previous</button> -->
                      <a href="login_page.php" class="btn btn-purple bg-purple">Log In</a>
                      <button class="btn btn-success float-right" type="submit" name="btn_change_pass">Change password &nbsp;<i class="fas fa-check-circle fa-lg"></i></button>
                      <br><br>
              </div>
            </div>
              </form>
                <div class="card-footer bg-info">
                  <center>
                  <a href="login_page.php">Goto Login Page</a><br>
                  <a href="https:bkucams.000webhostapp.com">Bkuc Assignment Management System.</a>
                  </center>
                </div>
              </div>
              <!-- /.card-body -->
        </div>
      </div>
    <div class="col-md-4">
      
    </div>
  </div>
  <?php
  }else{
    ?>    <br><br>
              <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <div class="alert alert-maroon bg-maroon alert-dismissible fade show" role="alert">
                    <div class="h1">Elligel ! <i class="fas fa-exclamation-triangle fa-sm"></i></div>
                    <p>You do not have permission to access this page 
                      &nbsp;&nbsp;Go to step 1 &nbsp;<a href="recover_password_way2.php" class="btn btn-primary">Step 1 </a></p>
                    <button type="button" style="font-size: 50px;" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2"></div>
              </div>
              <?php
  }
  ?>
	


<?php
if(isset($_POST['btn_back'])){
  header("location:step4.php");
}
if(isset($_GET['email'])){
  $email=$_GET['email'];
}
  if(isset($_POST['btn_change_pass'])){
  include('db_page_2.php');
  $cn=db_connection();
  $new_pass=$_POST['n_pass'];
  $conf_pass=$_POST['c_pass'];
  if($new_pass != "" or $new_pass != null and $conf_pass!= "" and $conf_pass!= null){
    $hashed = password_hash($new_pass, PASSWORD_DEFAULT);
    $sql="UPDATE `registred_students` SET `psswrd`='$hashed' WHERE `email`='$email'";
    $run=mysqli_query($cn,$sql);

    $sql2="UPDATE `registred_lecturers` SET `pass`='$hashed' WHERE `email`='$email'";
    $run2=mysqli_query($cn,$sql2);

    if($run){
      ?>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <div class="h1"><strong>Password Changed! </strong><i class="fas fa-check-circle fa-sm"></i></div>
              <p>your password has been changed successfully. </p>
              <i>go to login page >> </i> <a href="login_page.php"
              style="font-family: verdana;padding: 10px;margin: 10px;" class="btn btn-danger"> Log In </a>
              <button type="button" style="font-size: 50px;" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
        </div>
        <?php
        //again sending  mail
                  $to = $email;
                  $subject = "REGARDING : Password Changed";
                  $headers="From: BKUC AMS";
                  $message="<html><body>";
                  $message.="<div style='max-width: 600px;min-width: 200px;background-color: #fff;padding: 20px;margin: auto';>
                  <center><img style='max-height: 75px;' src='https://www.bkuc.edu.pk/public/images/top_banner1.png'></a></center>
                  <h3>BKUC ASSIGMENT MANAGEMENT SYSTEM</h3>
                  <strong>Dear AMS User Your Account Password Has Been Changed Successfully</strong>
                  <p>You need to login to your account to confirm that it was you.</p>
                  <a href='http://http://bkucams.000webhostapp.com/login_page.php'>Go to your Account BKUC AMS</a>
                  </div>";
                  $message.="</body></html>";
                  $headers .= "Reply-To: aqibullah3312@gmail.com" . "\r\n";
                  $headers .= "MIME-Version: 1.0"."\r\n";
                  $headers .= "MIME-Version: 1.0"."\r\n";
                  $headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
                  mail($to, $subject, $message,$headers);         
    }elseif ($run2){
      ?>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <div class="h1"><strong>Password Changed! </strong><i class="fas fa-check-circle fa-sm"></i></div>
              <p>your password has been changed successfully. </p>
              <i>go to login page >> </i> <a href="login_page.php"
              style="font-family: verdana;padding: 10px;margin: 10px;" class="btn btn-danger"> Log In </a>
              <button type="button" style="font-size: 50px;" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
        </div>
        <?php
        //again sending  mail
                  $to = $email;
                  $subject = "REGARDING : Password Changed";
                  $headers="From: BKUC AMS";
                  $message="<html><body>";
                  $message.="<div style='max-width: 600px;min-width: 200px;background-color: #fff;padding: 20px;margin: auto';>
                  <center><img style='max-height: 75px;' src='https://www.bkuc.edu.pk/public/images/top_banner1.png'></a></center>
                  <h3>BKUC ASSIGMENT MANAGEMENT SYSTEM</h3>
                  <strong>Dear AMS User Your Account Password Has Been Changed Successfully</strong>
                  <p>You need to login to your account to confirm that it was you.</p>
                  <a href='http://http://bkucams.000webhostapp.com/login_page.php'>Go to your Account BKUC AMS</a>
                  </div>";
                  $message.="</body></html>";
                  $headers .= "Reply-To: aqibullah3312@gmail.com" . "\r\n";
                  $headers .= "MIME-Version: 1.0"."\r\n";
                  $headers .= "MIME-Version: 1.0"."\r\n";
                  $headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
                  mail($to, $subject, $message,$headers);         
    }else{
      ?>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <div class="h1">Error In Changing<i class="fas fa-exclamation-triangle fa-sm"></i></div>
              <p><strong>Oops! </strong> Password Did Not Change Something Went Wrong</p>
              <button type="button" style="font-size: 50px;" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
        </div>
        <?php
    }
  }else{
    ?>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="alert alert-maroon alert-dismissible fade show" role="alert">
              <div class="h1">Error <i class="fas fa-times-circle fa-sm"></i></div>
              <p>Please Enter New & Confirfm Passwords</p>
              <button type="button" style="font-size: 50px;" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2"></div>
        </div>
        <?php
  }
  
}

// if(isset($_GET[$id_error])){
//   echo $_GET['id_error'];
// }

?>

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
<!-- BS-Stepper -->
<script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
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
<div id="result"></div>
<script>

  function post(){
    var input_email = document.getElementById('check_email').value;
    var new_data = input_email;
    $.ajax({
      type:"post",
      url:"validation_email.php",
      data:new_data,
      success:function(html){
        alert('hello');
      }
    });
    //$.post('validation_email.php',{post_email:input_email});
  }
</script>

<?php
  //$a = "<script>document.writeln(input_email);</script>";
  //echo $a;

ob_end_flush();
?>


<script type="text/javascript">
// Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>

<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
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
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  });

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false;

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template");
  previewNode.id = "";
  var previewTemplate = previewNode.parentNode.innerHTML;
  previewNode.parentNode.removeChild(previewNode);

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  });

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
  });

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
  });

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1";
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
  });

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0";
  });

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
  };
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true);
  };
  // DropzoneJS Demo Code End
</script>


</body>
</html>