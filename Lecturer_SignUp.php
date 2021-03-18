<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page | Sign Up</title>
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
  <!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
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
  <link rel="stylesheet" type="text/css" href="file.css">
</head>
<body class="hold-transition login-page">
  <center>
	<div class="login-box" style="width: 100%">
		<div class="login-logo">
			<a href="#"><b>Register</b> Lecturer</a>
		</div>
        <div class="card card-default">
            <center>
              <div class="card-header bg-primary">
                <h3 class="card-title">Registration Form</h3>
              </div>
            </center>
              <form method="post" id="quickForm" class="md-form" enctype="multipart/form-data">
              <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="row">
                    <div class="col-lg col-md col-sm col-xs">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#step-1">
                      <button type="button" class="step-trigger" role="tab" aria-controls="step-1" id="step-1-trigger">
                        <span class="bs-stepper-label">Step</span>
                        <span class="bs-stepper-circle">1</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#step-2">
                      <button type="button" class="step-trigger" role="tab" aria-controls="step-2" id="step-2-trigger">
                        <span class="bs-stepper-label">Step</span>
                        <span class="bs-stepper-circle">2</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#step-3">
                      <button type="button" class="step-trigger" role="tab" aria-controls="step-3" id="step-3-trigger">
                        <span class="bs-stepper-label">Step</span>
                        <span class="bs-stepper-circle">3</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#step-4">
                      <button type="button" class="step-trigger" role="tab" aria-controls="step-4" id="step-4-trigger">
                        <span class="bs-stepper-label">Step</span>
                        <span class="bs-stepper-circle">4</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#step-5">
                      <button type="button" class="step-trigger" role="tab" aria-controls="step-5" id="step-5-trigger">
                        <span class="bs-stepper-label">Step</span>
                        <span class="bs-stepper-circle">5</span>
                      </button>
                    </div>
                  </div>
                  </div>
                  </div>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="step-1" class="content" role="tabpanel" aria-labelledby="step-1-trigger">
                      <div class="form-group">
                        <label for="admin_username" class="float-left">Full Name</label>
                        <input type="text" name="admin_username" class="form-control" id="admin_username" placeholder="full name">
                      </div>
                      <div class="form-group">
                        <label for="admin_email" class="float-left">Email Address</label>
                        <input type="text"v name="admin_email" class="form-control" id="admin_email" placeholder="email address">
                      </div>
                      <button class="btn btn-primary float-right" type="button" id="btn-step-1">Next &nbsp;
                       <i class="fas fa-angle-right"></i></button><br><br>
                    </div>
                    <div id="step-2" class="content" role="tabpanel" aria-labelledby="step-2-trigger">
                      <div class="form-group">
                        <label for="admin_address" class="float-left">Permanat Address</label>
                        <input type="text"v name="admin_address" class="form-control" id="admin_address" placeholder="your Address">
                      </div>
                      <div class="form-group">
                        <label for="admin_phone" class="float-left">Phone</label>
                        <input type="text" name="admin_phone" class="form-control" id="admin_phone" placeholder="Phone" data-inputmask='"mask": "(9999) (9999999)"' data-mask>
                      </div>
                      <button class="btn btn-primary float-left" type="button" onclick="stepper.previous()">
                      <i class="fas fa-angle-left"></i>&nbsp; Previous</button>
                      <button class="btn btn-primary float-right" type="button" id="btn-step-2">Next &nbsp;<i class="fas fa-angle-right"></i></button>
                      <br><br>
                    </div>
                    <div id="step-3" class="content" role="tabpanel" aria-labelledby="step-3-trigger">
                      <div class="form-group">
                        <label for="admin_faculty" class="float-left">Select Faculty</label>
                        <select name="admin_faculty" id="admin_faculty" class="form-control">
                          <option disabled selected></option>
                          <option value="Management Science" name="admin_faculty">Management Science</option>
                          <option value="Social Science" name="admin_faculty">Social Science</option>
                          <option value="Arts" name="admin_faculty">Arts</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="lec_gender" class="float-left">Select Gender</label>
                          <select name="lec_gender" id="lec_gender" class="form-control">
                            <option disabled selected></option>
                            <option value="Male" name="lec_gender">Male</option>
                            <option value="Female" name="lec_gender">Female</option>
                          </select>
                      </div>
                      <button class="btn btn-primary float-left" type="button" onclick="stepper.previous()">
                      <i class="fas fa-angle-left"></i>&nbsp; Previous</button>
                      <button class="btn btn-primary float-right" type="button" id="btn-step-3">Next &nbsp;<i class="fas fa-angle-right"></i></button>
                      <br><br>
                    </div>
                    <div id="step-4" class="content" role="tabpanel" aria-labelledby="step-4-trigger">
                      <div class="form-group">
                        <label for="admin_psswrd" class="float-left">Password</label>
                        <div class="input-group mb-2">
                        <input type="password" id="admin_psswrd" name="admin_psswrd" placeholder="Password" class="form-control">
                         <div class="input-group-append">
                           <div class="input-group-text">
                             <span class="fas fa-lock"></span>
                           </div>
                         </div>
                       </div>
                      </div>
                      <div class="form-group">
                        <label for="admin_confirm_psswrd" class="float-left">Confirm Password</label>
                        <div class="input-group mb-2">
                          <input type="password" name="admin_confirm_psswrd" id="admin_confirm_psswrd" placeholder="Confirm Password" class="form-control">
                         <div class="input-group-append">
                           <div class="input-group-text">
                             <span class="fas fa-lock"></span>
                           </div>
                         </div>
                       </div>
                      </div>
                      <button class="btn btn-primary float-left" type="button" onclick="stepper.previous()">
                      <i class="fas fa-angle-left"></i>&nbsp; Previous</button>
                      <button class="btn btn-primary float-right" type="button" id="btn-step-4">Next &nbsp;<i class="fas fa-angle-right"></i></button>
                      <br><br>
                    </div>
                    <div id="step-5" class="content" role="tabpanel" aria-labelledby="step-5-trigger">
                      <div class="form-group">
                         <label for="lecturer_image" id="selector">Choose Image</label>
                         <center>
                          <div class="input-group mb-1">
                              <input type="file" class="form-controls" id="lecturer_image" name="lecturer_image" hidden>
                              <script src="signup_lec_image.js"></script>
                          </div>
                        </center>
                      </div>
                      <button class="btn btn-primary" type="button" onclick="stepper.previous()"><i class="fas fa-angle-left"></i>
                     &nbsp; Previous</button>
                      <button class="btn btn-success" id="btn-step-5" name="btn_admin_sign_Up">Done &nbsp;<i class="fas fa-check-circle"></i></button><br><br>
                    </div>
                  </div>
                  </div>
                </div>
              </form>
                <div class="card-footer bg-info">
                  <a class="text-danger" href="login_page.php">Already Member Goto Login Page</a><br>
                  <a class="text-danger" href="https:bkucams.000webhostapp.com">Bkuc Assignment Management System.</a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </center>

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

<script>
  $(document).ready(function(){
    $("#btn-step-1").on('click',function(){
      var field1 = document.getElementById("admin_username").value;
      var field2 = document.getElementById("admin_email").value;
      if(field1 != "" & field2 != ""){
        stepper.next();
      }else{
        $(function () {
          $('#step-1').validate({
            rules: {
              admin_username: {
                required: true,
              },
              admin_email: {
                required: true,
                email   :true,
              },
            },
            messages: {
              admin_username: {
                required: "Please enter full name",
              },
              admin_email: {
                required: "Please enter email address",
                email   : "please enter a valid email address",
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

    $("#btn-step-2").on('click',function(){
      var field3 = document.getElementById("admin_address").value;
      var field4 = document.getElementById("admin_phone").value;
      if(field3 != "" & field4 != "" ){
        stepper.next();
      }else{
        $(function () {
          $('#step-2').validate({
            rules: {
              admin_address: {
                required: true,
              },
              admin_phone: {
                required: true,
              },
            },
            messages: {
              admin_address: {
                required: "Please enter your address",
              },
              admin_phone: {
                required: "Please enter your mob #",
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

    $("#btn-step-3").on('click',function(){
      var field5 = document.getElementById("admin_faculty").value;
      var field6 = document.getElementById("lec_gender").value;
      if(field5 != "" & field6 !=""){
        stepper.next();
      }else{
        $(function () {
          $('#step-3').validate({
            rules: {
              admin_faculty: {
                required: true,
              },
              lec_gender: {
                required: true,
              },
            },
            messages: {
              admin_faculty: {
                required: "Please select your faculty",
              },
              lec_gender: {
                required: "Please select your gender",
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

    $("#btn-step-4").on('click',function(){
      var field7 = document.getElementById("admin_psswrd").value;
      var field8 = document.getElementById("admin_confirm_psswrd").value;
      if(field7 != "" & field8 !=""){
        stepper.next();
      }else{
        $(function () {
          $('#step-4').validate({
            rules: {
              admin_psswrd: {
                required: true,
              },
              admin_confirm_psswrd: {
                required: true,
              },
            },
            messages: {
              admin_psswrd: {
                required: "Please enter password",
              },
              admin_confirm_psswrd: {
                required: "Please enter confirm password",
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


<!-- Page specific script -->
<script>
$(function () {
  $('#quickForm').validate({
    rules: {
      admin_email: {
        required: true,
        email: true,
      },admin_username: {
        required: true,
      },admin_address: {
        required: true,
      },admin_phone: {
        required: true,
      },admin_faculty: {
        required: true,
      },lec_gender: {
        required: true,
      },admin_psswrd: {
        required: true,
        minlength: 8,
      },admin_confirm_psswrd: {
        required: true,
        minlength:8,
      },
    },
    messages: {
      admin_email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      }, admin_username: {
        required: "Please enter full name"
      },
      admin_username: {
        required: "Please enter last name",
      },
      admin_phone: {
        required: "Please enter your mob #",
      },admin_faculty: {
        required: "Please select your faculty",
      },
      lec_gender: {
        required: "Please select your gender",
      },
      admin_psswrd: {
        required: "Please enter your password",
      },
      admin_confirm_psswrd: {
        required: "Please enter your confirm password",
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

<?php
if(isset($_POST['btn_admin_sign_Up'])){
  include('functions_page.php');
      $status=validate_sanitize_admin_SignUp_inputs($_POST);
      if(is_array($status)){
                 include('db_page_2.php');
                 $uploaded_directory     ="lecturers images/";
                 $filename               =$_FILES["lecturer_image"]["name"];
                 $uploaded_directory    .=$filename;
                 $tmp_directory          =$_FILES["lecturer_image"]["tmp_name"];
                 $text                   =pathinfo($filename, PATHINFO_EXTENSION);

                 /*   if($text == 'jpg' or $text == 'JPG' or $text == 'png' or $text == 'PNG' or
                          $text == 'gif' or $text == 'GIF' or $text == 'jpeg' or $text == 'GPEG'){ */
                      if($_POST["admin_psswrd"] == $_POST["admin_confirm_psswrd"]){ 

                          $status = SignUp_Lecturer($status);
                          if($status=== true){
                            $uploaded=move_uploaded_file($tmp_directory, $uploaded_directory);
                            ?>
                            <script type="text/javascript">
                              $(document).ready(function(){
                                    $('.toastsDefaultSuccess').ready(function() {
                                      $(document).Toasts('create', {
                                        class: 'bg-success', 
                                        title: 'Request Pending',
                                        subtitle: 'Pending',
                                        autohide : true,
                                        delay:10000,
                                        icon: 'fas fa-check',
                                        body: 'Sir! Your Account Request is now Pending for Approval.<br>Please wait for confirmation.Thank You!'
                                      })
                                    });
                              });
                            </script>
                          <?php 
                          }elseif ($status == "user_exists") {
                            ?>
                            <script type="text/javascript">
                              $(document).ready(function(){
                                    $('.toastsDefaultInfo').ready(function() {
                                      $(document).Toasts('create', {
                                        class: 'bg-info', 
                                        title: 'Not Register',
                                        subtitle: 'Email Exists',
                                        autohide : true,
                                        delay:4000,
                                        icon: 'fas fa-info',
                                        body: 'This User is Already <strong>EXISTS</strong>.'
                                      })
                                    });
                              });
                            </script>
                          <?php 
                          }elseif ($status == "user_exists_2") {
                            ?>
                            <script type="text/javascript">
                              $(document).ready(function(){
                                    $('.toastsDefaultInfo').ready(function() {
                                      $(document).Toasts('create', {
                                        class: 'bg-info', 
                                        title: 'Already in pending',
                                        subtitle: 'ID Exists',
                                        autohide : true,
                                        delay:8000,
                                        icon: 'fas fa-info-circle',
                                        body: 'Your Account is Already in pending. Wait for confirmation from the admin <strong>ThankYou!</strong>.'
                                      })
                                    });
                              });
                            </script>
                          <?php 
                          }else{

                             // if(file_exists($uploaded_directory)){
                             //      unlink($uploaded_directory);
                             //  }
                           ?>
                            <script type="text/javascript">
                              $(document).ready(function(){
                                    $('.toastsDefaultInfo').ready(function() {
                                      $(document).Toasts('create', {
                                        class: 'bg-info', 
                                        title: 'Not Register',
                                        subtitle: 'wrong',
                                        autohide : true,
                                        delay:6000,
                                        icon: 'fas fa-times',
                                        body: 'Oops Account can not register. Somwthing went <strong>Wrong</strong>.'
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
                                      autohide : true,
                                      delay:4000,
                                      icon: 'fas fa-times',
                                      body: 'Confirm Password Not <strong>Matche</strong>.'
                                    })
                                  });
                            });
                          </script>
                         <?php
                      }

                  /*  }else{
                       ?>
                        <script type="text/javascript">
                          $(document).ready(function(){
                                $('.toastsDefaultDanger').ready(function() {
                                  $(document).Toasts('create', {
                                    class: 'bg-danger', 
                                    title: 'Extension Error',
                                    subtitle: 'Not Image',
                                    autohide : true,
                                    delay:4000,
                                    icon: 'fas fa-times',
                                    body: 'Its not an image file.'
                                  })
                                });
                          });
                        </script>
                        <?php 
                    } */
               }else{
                   ?>
                  <script type="text/javascript">
                    $(document).ready(function(){
                          $('.toastsDefaultMaroon').ready(function() {
                            $(document).Toasts('create', {
                              class: 'bg-maroon', 
                              title: 'Error',
                              subtitle: 'Formate Error',
                              autohide : true,
                              delay:4000,
                              icon: 'fas fa-times',
                              body: 'Email <strong>FORMATE</strong> was not correct.'
                            })
                          });
                    });
                  </script>
                <?php
               }
}

            
?>