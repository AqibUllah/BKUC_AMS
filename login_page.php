<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOG IN</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page"> 
	<div class="login-box">
		<div class="login-logo">
			<a href="index.php"><b>BKUC </b> AMS</a>
		</div>
		<div class="card" style="background: transparent;">
			<div class="card-body login-card-body">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
					<img class="login-logo" src="images/image.jpg" style="height: 80px;width: 80px;">
					</div>
					<div class="col-md-4"></div>
				</div>
				<form method="post" id="quickForm">
          <div class="form-group">
					<div class="input-group mb-3">
						<input type="text" name="std_login_email" placeholder="Email" class="form-control">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
        </div>
        <div class="form-group">
					<div class="input-group mb-3">
						<input type="password" name="std_login_password" class="form-control" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
          </div>
					<div class="row">
						<div class="col-8">
							<a href="seelct_forgot_options.php" class="badge badge-danger">Forgott Password?</a>
						</div>
						<div class="col-4">
							<input type="submit" name="btn_login_signIn" class="btn btn-info btn-block" value="Sign In">
              <i class="fas fa-go"></i>
						</div>
					</div>
				</form>
				<div class="social-auth-links text-center mb-3">
					<p>- OR -</p>
					<a href="select_type_page.php" class="btn btn-success btn-block">
						<i class="fas fa-plus-circle mr-2" aria-hidden="true"></i>
						Creat an account
					</a>
				</div>
			</div>
		</div>
		

<!--<h1>
<?php  
/*
date_default_timezone_set("Asia/Karachi");
echo date_default_timezone_get()."<br>";
$tz = timezone_open("Asia/Karachi");
echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";
echo "<br>";
echo date("h:i:s A e")."<br>";
*/
?>
</h1> -->

<?php
if(isset($_POST['btn_login_signIn'])){
	include('functions_page.php');
	$status=input_recieved($_POST);
	if($status===true){
		$status=validate_sanitize_login_inputs($_POST);
		if(is_array($status)){
			include('db_page_2.php');
      $cn=db_connection();
      $input_email=$_POST['std_login_email'];
      //super admin
      $sql="select * from `tbl_super_admin` where `email`='$input_email'";
      $stmt = mysqli_query($cn,$sql);
      //lecturer
      $sql_a="SELECT * FROM `registred_lecturers` WHERE `email`='$input_email'";
      $stmt_a = mysqli_query($cn,$sql_a);
      //student
      $sql_b="select * from `registred_students` where `email`='$input_email'";
      $stmt_b = mysqli_query($cn,$sql_b);
      if(mysqli_num_rows($stmt)>0){
                $student=authenticate_student($status);
                $admin=atuthenticate_admin($status);
                $lecturer=atuthenticate_lecturer($status);
                if(is_array($admin)){
                  $_SESSION["admin_logged_in"]=$admin;
                  header("location:admin_main_dashboard.php");
                    
                  
                } if(is_array($student)){
                  $_SESSION["student_logged_in"]=$student;
                  header("location:Student_Dashboard.php");
                }
                if(is_array($lecturer)){
                  $_SESSION["lecturer_logged_in"]=$lecturer;      
                  header("location:Lecturer_Dashboard.php");
                }
                else
                {
                  ?>
                  <script type="text/javascript">
                    $(document).ready(function(){
                          $('.toastsDefaultDanger').ready(function() {
                            $(document).Toasts('create', {
                              class: 'bg-danger',
                              autohide : true,
                              delay    : 4000, 
                              title: 'Error',
                              subtitle: 'Invalid ID',
                              body: 'Invalid Email OR Password.'
                            })
                          });
                    });
                  </script>
                  <?php
                  }
      }elseif(mysqli_num_rows($stmt_a)>0){
                  $student=authenticate_student($status);
                  $admin=atuthenticate_admin($status);
                  $lecturer=atuthenticate_lecturer($status);
                  if(is_array($admin)){
                    $_SESSION["admin_logged_in"]=$admin;
                    header("location:admin_main_dashboard.php");
                      
                    
                  } if(is_array($student)){
                    $_SESSION["student_logged_in"]=$student;
                    header("location:Student_Dashboard.php");
                  }
                  if(is_array($lecturer)){
                    $_SESSION["lecturer_logged_in"]=$lecturer;      
                    header("location:Lecturer_Dashboard.php");
                  }
                  else
                  {
                    ?>
                    <script type="text/javascript">
                      $(document).ready(function(){
                            $('.toastsDefaultDanger').ready(function() {
                              $(document).Toasts('create', {
                                class: 'bg-danger',
                                autohide : true,
                                delay    : 4000, 
                                title: 'Error',
                                subtitle: 'Invalid ID',
                                body: 'Invalid Email OR Password.'
                              })
                            });
                      });
                    </script>
                    <?php
                    }
      }elseif(mysqli_num_rows($stmt_b)>0){
                    $student=authenticate_student($status);
                    $admin=atuthenticate_admin($status);
                    $lecturer=atuthenticate_lecturer($status);
                    if(is_array($admin)){
                      $_SESSION["admin_logged_in"]=$admin;
                      header("location:admin_main_dashboard.php");
                        
                      
                    } if(is_array($student)){
                      $_SESSION["student_logged_in"]=$student;
                      header("location:Student_Dashboard.php");
                    }
                    if(is_array($lecturer)){
                      $_SESSION["lecturer_logged_in"]=$lecturer;      
                      header("location:Lecturer_Dashboard.php");
                    }
                    else
                    {
                      ?>
                      <script type="text/javascript">
                        $(document).ready(function(){
                              $('.toastsDefaultDanger').ready(function() {
                                $(document).Toasts('create', {
                                  class: 'bg-danger',
                                  autohide : true,
                                  delay    : 4000, 
                                  title: 'Error',
                                  subtitle: 'Invalid ID',
                                  body: 'Invalid Email OR Password.'
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
                  autohide : true,
                  delay    : 6000,
                  title: 'Error',
                  subtitle: 'User Not Found',
                  icon:'fas fa-exclamation-circle',
                  body: 'This user can not exists in our <strong>BKUC AMS</strong>.'
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
					        class: 'bg-danger', 
                  autohide : true,
                  delay    : 4000,
					        title: 'Error',
					        subtitle: 'Email <strong>FORMATE</strong>',
                  icon:'fas fa-times-circle',
					        body: 'Invalid Email your email format was not correct.'
					      })
					    });
				});
			</script>
			<?php
			}
	}else{
		?>
    <!-- <div class="h4 text-center" style="color: grey;">
      Enter your email & password !
    </div> -->
			<script type="text/javascript">
				$(document).ready(function(){
					    $('.toastsDefaultMaroon').ready(function() {
					      $(document).Toasts('create', {
                  position: 'topRight',
					        class: 'bg-maroon', 
                  autohide : true,
                  delay    : 4000,
					        title: 'Error',
					        subtitle: 'Input Fields',
                  icon:'fas fa-times-circle',
					        body: 'Email & Password Should be <strong>REQUIRED</strong>.'
					      })
					    });
				});
			</script>
		<?php
	}
}
ob_end_flush();
?>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
  <script src="plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="plugins/jquery-validation/additional-methods.min.js"></script>
  <!-- BS-Stepper -->
<script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- dropzonejs -->
<script src="plugins/dropzone/min/dropzone.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

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

<script>
  $(document).ready(function(){
    $("#abc").on('click',function(){
      var field1 = document.getElementById("txt_first").value;
      var field2 = document.getElementById("txt_last").value;
      if(field1 != "" & field2 != ""){
        stepper.next();
      }else{
        $(function () {
  $('#form1').validate({
    rules: {
      txt_first: {
        required: true,
      },
      txt_last: {
        required: true,
      },
    },
    messages: {
      txt_first: {
        required: "Please enter first name",
      },
      txt_last: {
        required: "Please enter last name"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
      }
    });

    $("#abc2").on('click',function(){
                        var field3 = document.getElementById("txt_email_id").value;
                        var field4 = document.getElementById("txt_address_id").value;
                        if(field3 != "" & field4 != ""){
                          stepper.next();
                        }else{
                        $(function () {
                        $('#registran_form_validation').validate({
                        rules: {
                        txt_email_id: {
                          required: true,
                          email:true,
                        },txt_address_id: {
                        required : true,
                        },
                      },
                      messages: {
                      txt_email_id: {
                        required: "Please enter email address",
                        email : "please enter a valid email"
                      }, txt_address_id: {
                        required: "Please enter valid address"
                      },
                      },
                      errorElement: 'span',
                      errorPlacement: function (error, element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-group').append(error);
                      },
                      highlight: function (element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                      },
                      unhighlight: function (element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                      }
                    });
                  });
                }
    });

  });
</script>

<!-- Page specific script -->
<script>
$(function () {
  $('#quickForm').validate({
    rules: {
      std_login_email: {
        required: true,
        email: true,
      },std_login_password: {
        required: true,
      },
    },
    messages: {
      std_login_email: {
        required: "Please enter email address",
        email: "Please enter a vaild email address"
      }, std_login_password: {
        required: "Please provid password"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>



<!-- 
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-success">
                  Launch Ddanger Modal
                </button>

       /.modal --><!--
      <div class="modal fade alertDefaultSuccess" id="modal-success">
        <div class="modal-dialog ">
            <div class="modal-body">
              <div class="alert alert-danger alert-dismissible" id="modal-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  Hello form alert i m danger alert
                  soul, like these sweet mornings of spring which I enjoy with my whole heart.
                </div>
          </div>
           /.modal-content 
        </div> 
         /.modal-dialog 
      </div>
       /.modal -->

