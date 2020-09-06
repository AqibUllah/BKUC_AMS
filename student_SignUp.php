<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page | Sign Up</title>
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

</head>
<body class="hold-transition login-page">
  <center>
	<div class="login-box" style="width: 100%">
		<div class="login-logo">
			<a href="#"><b>Register</b> STUDENT</a>
		</div>
		<div class="card" style="background: transparent;">
			<div class="card-body login-card-body">
				<form method="post" class="md-form" enctype="multipart/form-data">
          <div class="input-group mb-1">
              <input type="file" class="form-controls" name="student_image">
          </div>
					<div class="input-group mb-1">
                <input type="text" name="std_first_name" placeholder="First Name" class="form-control">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-graduation-cap"></span>
                    </div>
                  </div>
                 <input type="text" name="std_last_name" class="form-control" placeholder="Last Name">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-graduation-cap"></span>
                    </div>
                  </div>
					</div>
					<div class="input-group mb-1">
					  <input type="text"  name="std_DOB" class="form-control" placeholder="Date Of Birth" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-birthday-cake"></span>
                    </div>
                  </div>
                 <input type="text" name="std_mob_no" class="form-control" placeholder="Mob #" data-inputmask='"mask": "(9999) (9999999)"' data-mask>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-phone"></span>
                    </div>
                  </div>
					</div>
          <div class="input-group mb-1">
                 <input type="text" name="std_email" placeholder="Email" class="form-control">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
          </div>
           <div class="input-group mb-1">
                 <input type="text" name="std_address" placeholder="Address" class="form-control">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-address-card"></span>
                    </div>
                  </div>
          </div>
          <div class="input-group mb-1">
                 <input type="password" name="std_psswrd" placeholder="Password" class="form-control">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
          </div>
          <div class="input-group mb-1">
            <input type="text" name="std_batch_no" placeholder="Batch No" class="form-control">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-bars"></span>
                    </div>
                  </div>
                 <input type="text" name="std_session" class="form-control" placeholder="Session">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-calendar"></span>
                    </div>
                  </div>
          </div>
          <div class="input-group mb-1">
              <select name="std_faculty" class="form-control">
                <option disabled selected>Faculty</option>
                <option value="Science" name="std_faculty">Science</option>
                <option value="Arts" name="std_faculty">Arts</option>
              </select>

          </div>
          <div class="input-group mb-1">
              <select name="std_department" class="form-control">
                <option disabled selected>Department</option>
                <option value="CS" name="std_department">CS</option>
                <option value="BS" name="std_department">BS</option>
                <option value="Social Science" name="std_department">Social Sience</option>
                <option value="Agriculture" name="std_department">Agriculture</option>
                <option value="English" name="std_department">English</option>
                <option value="IT" name="std_department">IT</option>
                <option value="Arts" name="std_department">Arts</option>
              </select>
          </div>
					<div class="row">
  						<div class="col-12">
  							<input type="submit" name="btn_sign_Up" class="btn btn-success btn-block" value="Sign Up">
  						</div>
					</div>
        <div class="social-auth-links text-center mb-3">
             <div class="col-12">
                <a href="login_page.php">Already member Goto Login?</a>
             </div>
        </div>
			</form>
		</div>
	</div>
</div>
</center>

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

<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        type: 'success',
        title: '<strong>Success</strong>, Data inserted successfully.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        type: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        type: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        type: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        type: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultTopLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'topLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomRight').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomRight',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultAutohide').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        autohide: true,
        delay: 750,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultNotFixed').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        fixed: false,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultFull').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        icon: 'fas fa-envelope fa-lg',
      })
    });
    $('.toastsDefaultFullImage').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        image: '../../dist/img/user3-128x128.jpg',
        imageAlt: 'User Picture',
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultMaroon').click(function() {
      $(document).Toasts('create', {
        class: 'bg-maroon', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
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
if(isset($_POST['btn_sign_Up'])){
	include('functions_page.php');
	$status=input_recieved($_POST);
	if($status === true){
		$status=validate_sanitize_student_SignUp_inputs($_POST);
      if(is_array($status)){
        include('db_page.php');
            $uploaded_dir     ="student images/";
            $filename         =$_FILES["student_image"]["name"];
            $uploaded_dir   .=$filename;
            $tmp_dir         =$_FILES["student_image"]["tmp_name"];
                 if(pathinfo($filename, PATHINFO_EXTENSION)!=null){
                         $text             =pathinfo($filename, PATHINFO_EXTENSION);
                        if($text == 'jpg' or $text == 'JPG' or $text == 'png' or $text == 'PNG' or
                          $text == 'gif' or $text == 'GIF' or $text == 'jpeg' or $text == 'GPEG'){
                          $status = Registration_Request_Student($status);
                          $uploaded=move_uploaded_file($tmp_dir, $uploaded_dir);
                        if($status === true){
                          ?>
                            <script type="text/javascript">
                              $(document).ready(function(){
                                    $('.toastsDefaultSuccess').ready(function() {
                                      $(document).Toasts('create', {
                                        class: 'bg-success', 
                                        title: 'Request Pending',
                                        subtitle: 'Pending',
                                        body: 'Your Account  Request is now Pending for Approval.<br>Please wait for confirmation.Thank You!'
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
                                    $('.toastsDefaultInfo').ready(function() {
                                      $(document).Toasts('create', {
                                        class: 'bg-info', 
                                        title: 'Not Register',
                                        subtitle: 'Email Exists',
                                        body: 'This Email is Already <strong>EXISTS</strong>.'
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
                            title: 'Extension Error',
                            subtitle: 'Not Image',
                            body: 'Its not an image file.'
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
                            title: 'Not Register',
                            subtitle: 'Not Select',
                            body: 'Plz select the Image then try.'
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
                          subtitle: 'Formate Error',
                          body: 'Email <strong>FORMATE</strong> was not correct.'
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
					        class: 'bg-warning', 
					        title: 'Warning',
					        subtitle: 'Input Fields',
					        body: 'ALL Fields Should be <strong>REQUIRED</strong>.'
					      })
					    });
				});
			</script>
		<?php
	}
}

?>