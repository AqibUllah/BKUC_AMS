<!DOCTYPE html>
<html>
<head>
	<title>Admin SignUP | Page</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	
<div class="login-box">
	<div class="login-logo">
			<a href="#"><b>Register</b> Admin</a>
		</div>
		<div class="card" style="background: transparent;">
			<div class="card-body login-card-body">
				<form method="post" class="md-form" enctype="multipart/form-data">
            <div class="input-group mb-2">
                    <input type="file" name="lecturer_image"class="form-control">
          </div>
					<div class="input-group mb-2">
		                <input type="text" name="admin_username" placeholder="User Name" class="form-control">
		                  <div class="input-group-append">
		                    <div class="input-group-text">
		                      <span class="fas fa-user"></span>
		                    </div>
		                  </div>
					</div>
					<div class="input-group mb-2">
						 <input type="text" name="admin_email" placeholder="Email" class="form-control">
		                  <div class="input-group-append">
		                    <div class="input-group-text">
		                      <span class="fas fa-envelope"></span>
		                    </div>
		                  </div>
					</div>
			        <div class="input-group mb-2">
			             <input type="password" name="admin_psswrd" placeholder="Password" class="form-control">
			                 <div class="input-group-append">
			                   <div class="input-group-text">
			                     <span class="fas fa-lock"></span>
			                   </div>
			                 </div>
			        </div>
			        <div class="input-group mb-2">
			             <input type="password" name="admin_confirm_psswrd" placeholder="Confirm Password" class="form-control">
			                 <div class="input-group-append">
			                   <div class="input-group-text">
			                     <span class="fas fa-lock"></span>
			                   </div>
			                 </div>
			        </div>
		            <div class="input-group mb-2">
		                <select name="admin_faculty" class="form-control">
		                  <option disabled selected>Faculty</option>
		                  <option value="Science" name="admin_faculty">Science</option>
		                  <option value="Arts" name="admin_faculty">Arts</option>
		                </select>
		            </div>
		            <div class="input-group mb-2">
		                <select name="admin_role" class="form-control">
		                  <option disabled selected>Select Role</option>
		                  <option value="Teacher" name="admin_role">Teacher</option>
		                  <option value="Manager" name="admin_role">Manager</option>
		                </select>
		            </div>
					<div class="row">
  						<div class="col-12">
  							<input type="submit" name="btn_admin_sign_Up" class="btn btn-success btn-block" value="Sign Up">
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

</body>
</html>


<?php
if(isset($_POST['btn_admin_sign_Up'])){
  include('functions_page.php');
  $status=input_recieved($_POST);
  if($status === true){
      $status=validate_sanitize_admin_SignUp_inputs($_POST);
      if(is_array($status)){
                 include('db_page.php');
                 $uploaded_directory     ="lecturers images/";
                 $filename               =$_FILES["lecturer_image"]["name"];
                 $uploaded_directory    .=$filename;
                 $tmp_directory          =$_FILES["lecturer_image"]["tmp_name"];
                 $text                   =pathinfo($filename, PATHINFO_EXTENSION);
                 if(pathinfo($filename, PATHINFO_EXTENSION)!=null){
                    if($text == 'jpg' or $text == 'JPG' or $text == 'png' or $text == 'PNG' or
                          $text == 'gif' or $text == 'GIF' or $text == 'jpeg' or $text == 'GPEG'){
                      if($_POST["admin_psswrd"] == $_POST["admin_confirm_psswrd"]){

                          $status = SignUp_Lecturer($status);
                          $uploaded=move_uploaded_file($tmp_directory, $uploaded_directory);
                          if($status=== true){
                            ?>
                            <script type="text/javascript">
                              $(document).ready(function(){
                                    $('.toastsDefaultSuccess').ready(function() {
                                      $(document).Toasts('create', {
                                        class: 'bg-success', 
                                        title: 'Request Pending',
                                        subtitle: 'Pending',
                                        body: 'Sir! Your Account Request is now Pending for Approval.<br>Please wait for confirmation.Thank You!'
                                      })
                                    });
                              });
                            </script>
                          <?php 
                          }else{

                             if(file_exists($uploaded_directory)){
                                  unlink($uploaded_directory);
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
                                      title: 'Error',
                                      subtitle: 'Mis Matche',
                                      body: 'Confirm Password Not <strong>Matche</strong>.'
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
            }
            else{
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
