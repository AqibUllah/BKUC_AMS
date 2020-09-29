<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TheEvent - Bootstrap Event Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
<?php
if(isset($_GET['success'])){
   ?>
      <script type="text/javascript">
            $(document).ready(function(){
                  $('.toastsDefaultSuccess').ready(function() {
                    $(document).Toasts('create', {
                      position: 'topRight',
                      class: 'bg-success', 
                      autohide : true,
                      delay    : 5000,
                      title: 'Done',
                      subtitle: 'Sent',
                      body: "Your feedback has been <strong>Sent</strong>."
                    })
                  });
            });
          </script>
      <?php
}elseif(isset($_GET['error_exist'])){
 ?>
      <script type="text/javascript">
            $(document).ready(function(){
                  $('.toastsDefaultMaroon').ready(function() {
                    $(document).Toasts('create', {
                      position: 'topRight',
                      class: 'bg-maroon', 
                      autohide : true,
                      delay    : 5000,
                      title: 'Error',
                      subtitle: 'Already sent',
                      body: "Your feedback already <strong>sent</strong>."
                    })
                  });
            });
          </script>
      <?php
}
?>
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="login_page.php">Sign In</a></li>
          <li><a href="select_type_page.php">Sign Up</a></li>
          <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">The BKUC<br><span>Assignment </span>Management System</h1>
      <p class="mb-4 pb-0">Bacha Khan University Palosa, Charsadda Khyber Pakhtunkhwa Pakistan.</p>
      <div class="row">
        <div class="col-12">
          <div class="callout callout-default bg-danger">
                <strong class="h2 float-left"><i class="fas fa-info-circle"></i> Note</strong><br><br>
                <small  style="color: white;">When you want to submitte your assigment using BKUC AMS so first check your assignment,evidences etc.. then go to submit. Because once you have submitted your assignment then it will not recover</small>
                <!-- /.col -->
            </div>
        </div>
      </div>
      <a href="http://www.bkuc.edu.pk" class="about-btn scrollto">About The BKUC</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>About The BKUC AMS</h2>
            <p>Assignment Management System is a web-based application developed using php at front end and SQL server at back end. Through this system user can assign job to any employee online and admin can also check the status of the assigned work. Using this system management team can take decision on time after checking the current status of the assigned work. This system helps the user to complete work on time as user can check the status of assigned work any time. Assignment management system is developed to manage the work assigning process online.

            We have developed this project to automate the assignment task. Using this application admin can assign work to any employee online and employee can update the status of assigned work online. Using this software an employee can perform assignment related work online.</p>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Speakers Section
    ============================-->


    <!--==========================
      Schedule Section
    ============================-->
 

    <!--==========================
      Venue Section
    ============================-->


    <!--==========================
      Hotels Section
    ============================-->


    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="img/Create-Assignments-easily-1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/Create-Assignments-easily-1.jpg" alt=""></a>

        <a href="img/Flexible-grade-scaling.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/Flexible-grade-scaling.jpg" alt=""></a>

        <a href="img/Instantly-access-relevant-data.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/Instantly-access-relevant-data.jpg" alt=""></a>

        <a href="img/Review-assignments-with-interactive-reports.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/Review-assignments-with-interactive-reports.jpg" alt=""></a>

        <a href="img/Student-work-load-management.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/Student-work-load-management.jpg" alt=""></a>

        <a href="img/Subject-specific-assignment-types.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/Subject-specific-assignment-types.jpg" alt=""></a>

        <a href="img/Time-saving-1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/Time-saving-1.jpg" alt=""></a>
        
        
        
       
       
        
      </div>

    </section>

    <!--==========================
      Sponsors Section
    ============================-->


    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">What is an Assignment Management System? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                      Assignment management help teachers to assign tasks and deadlines to students and monitor their performance on completion of these tasks.

                      All the assignments are assigned with a start and end date, student update the task on completion. Teachers can view the status of the task and reports are being generated after evaluation.

                      Things are made easy using this system for both teachers and students.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">Benefits of Assignment Management System? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                      1) Create Assignments Easily<br>
                      The teachers can create assignments without much effort.
                      The additional resources such as PDF’s, docs, images etc can be attached to the same.
                      It provides teachers more time to teach and spent less time on these activities.
                    </p><img src="img/Create-Assignments-easily-1.jpg">
                    <p>
                      2) Time Saving<br>
                      As this process requires fewer manual efforts, the system is time-saving. Assignments and projects can be assigned to the students online. No extra efforts should be spent for paper works.
                      “It is indeed time saving, Na?”
                    </p><img src="img/Time-saving-1.jpg">
                    <p>
                      3) Review Assignments with Interactive Reports<br>
                      <img src="img/Review-assignments-with-interactive-reports.jpg"><br>
                      Once the assignments are completed by the students, it can be reviewed by teachers online. Grades can be rewarded in the system itself, accordingly.
                      Feedback from the educators is beneficial for students to improve themselves.
                    </p>
                    <p>
                      4) Instantly Access Relevant Data<br>
                      The students can easily access any type of subject data. As teachers upload videos, PDF, Docs etc., students can make use of the resources instantly. So, these are the major benefits of this system.
                    </p><img src="img/Instantly-access-relevant-data.jpg">
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">Major Features of this Assignment Management System <i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>1. Student Work- Load Management<br>
                      The hectic load of assignments can be managed systematically by the students.
                    </p><img src="img/Student-work-load-management.jpg">
                    <p>2. Flexible Grade Scaling<br>
                      The grades are awarded by the teachers. Remarks and instructions for the assignments and projects will also be noted.
                    </p><img src="img/Flexible-grade-scaling.jpg">
                    <p>3. Subject Specific Assignment Types<br>
                      Assignments based on each subject can be viewed particularly. It is also easy for the teachers to assign topics for students from Pre-defined topics available in the system.
                    </p><img src="img/Subject-specific-assignment-types.jpg">
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">And so, What are the Key Highlights of Assignment Management System? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                      Assign Assignments to students or a group of students
                    </p>
                    <p>
                      Track the status of completed tasks(pending/completed)
                    </p>
                    <p>
                      Monitor individual student status
                    </p>
                    <p>
                      Track Student performance
                    </p>
                    <p>
                      Generate student reports
                    </p>
                    <p>
                      Email notifications can be sent for each assignment
                    </p>
                    <p>
                      List of pending tasks can be viewed
                    </p>
                    <p>
                      Completed task can be closed
                    </p>
                  </div>
                </li>  
              </ul>
          </div>
        </div>

      </div>

    </section>

    <!--==========================
      Subscribe Section
    ============================-->


    <!--==========================
      Buy Ticket Section
    ============================-->


    <!--==========================
      Contact Section
    ============================-->
    <form action="" method="post" role="form">
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Nihil officia ut sint molestiae tenetur.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>www.bkuc.edu.pk</address>
              <address>Bacha Khan University Palosa, Charsadda Khyber Pakhtunkhwa Pakistan.</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">Exchange#1: 091-6540116</a></p>
              <p><a href="tel:+155895548855">Exchange#1: 091-6540117</a></p>
              <p><a href="tel:+155895548855">Fax:091-6540060</a></p>
              <p><a href="tel:+155895548855">P.O.Box#:20 Charsadda</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">admin@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" name="btn_send">Send Message</button></div>

        </div>

      </div>
    </section><!-- #contact -->
  </form>  

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo.png" alt="TheBKUCAMS">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Exchange#1: 091-6540116<br>
              Exchange#1: 091-6540117<br><br>
              www.bkuc.edu.pk<br>
              Bacha Khan University Palosa, Charsadda Khyber Pakhtunkhwa Pakistan.<br><br>
              Fax:091-6540060<br>
              P.O.Box#:20 Charsadda<br>
              <strong>Phone:</strong> +0000000000<br>
              <strong>Email:</strong> admin@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/groups/491811574174591/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="http://www.nts.org.pk/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <strong>The BKUC AMS</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        Designed by <a href="https://bootstrapmade.com/">Aqib Lodhi</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
<?php
if(isset($_POST['btn_send'])){
    $username=$_POST['name'];
    $useremail=$_POST['email'];
    $usersubject=$_POST['subject'];
    $usermessage=$_POST['message'];
    if($username != "" or $username != null or $useremail != "" or $useremail != null or
      $usersubject != "" or $usersubject != null or $usermessage != "" or $usermessage != null){
      include('db_page_2.php');
      $status = insert_user_feedback($_POST);
      if($status == true){
        ?>
        <script type="text/javascript">
          window.location="index.php?success";
        </script>
        <?php
        //header("location:index.php?success");
      }elseif ($status == "exist") {
        //header("location:index.php?error_exist");
        ?>
        <script type="text/javascript">
          window.location="index.php?error_exist";
        </script>
        <?php
        ?><h1 style="color: green;">user Feed back already recieved</h1><?php
      }
      else{
        ?><h1 style="color: red;">user Feed back can not recieved</h1><?php
      }
    }else{

    }
}
?>