<?php
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
			<a href="#"><b>LOG IN</b>PAGE</a>
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
				<form method="post">
					<div class="input-group mb-3">
						<input type="text" name="std_login_email" placeholder="Email" class="form-control">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" name="std_login_password" class="form-control" placeholder="Password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-8">
							<a href="forgott_password_page.php" class="badge badge-danger">Forgott Password?</a>
						</div>
						<div class="col-4">
							<input type="submit" name="btn_login_signIn" class="btn btn-info btn-block" value="Sign In">
              <i class="fas fa-sign-in"></i>
						</div>
					</div>
				</form>
				<div class="social-auth-links text-center mb-3">
					<p>- OR -</p>
					<a href="select_type_page.php" class="btn btn-success btn-block">
						<i class="fas fa-plus-square mr-2" aria-hidden="true"></i>
						Creat an account
					</a>
				</div>
			</div>
		</div>
		
	</div>


<?php
if(isset($_POST['btn_login_signIn'])){
	include('functions_page.php');
	$status=input_recieved($_POST);
	if($status===true){
		$status=validate_sanitize_login_inputs($_POST);
		if(is_array($status)){
			include('db_page.php');
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
					    $('.toastsDefaultDanger').ready(function() {
					      $(document).Toasts('create', {
					        class: 'bg-danger', 
                  autohide : true,
                  delay    : 4000,
					        title: 'Error',
					        subtitle: 'Invalid Email',
					        body: 'Invalid Email <strong>FORMATE</strong>.'
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
                  position: 'topRight',
					        class: 'bg-maroon', 
                  autohide : true,
                  delay    : 4000,
					        title: 'Error',
					        subtitle: 'Input Fields',
					        body: 'Email & Password Should be <strong>REQUIRED</strong>.'
					      })
					    });
				});
			</script>
		<?php
	}
}

?>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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

