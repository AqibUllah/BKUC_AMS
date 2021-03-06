<?php
	function db_connection(){
		$cn=mysqli_connect("localhost","root","","bkuc_ams");
		if(mysqli_connect_errno()){
			die(mysqli_connect_error());
		}
		return $cn;
	}

	function Registration_Request_Student($arg){
	$cn=db_connection();
	$sql="INSERT INTO `tbl_students_requests`(`first_name`, `last_name`, `d_o_b`, `email`, `psswrd`, `phone`, `address`, `img`, `batch_no`, `session`, `faculty`, `department`, `message`, `entry_date_time`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$stmt=mysqli_prepare($cn,$sql);
	if($stmt){
		$uploaded_dir		 ="student images/";
		$filename			 =$_FILES["student_image"]["name"];
		$uploaded_dir		.=$filename;
		$tmp_dir			 =$_FILES["student_image"]["tmp_name"];
		$size 				 =$_FILES["student_image"]["size"];
		$text				 =pathinfo($filename, PATHINFO_EXTENSION);
		$register_first_name=$arg["std_first_name"];
		$register_last_name=$arg["std_last_name"];
		$register_dob=$arg["std_DOB"];
		$register_email=$arg["std_email"];
		$register_psswrd=$arg["std_psswrd"];
		$register_mob=$arg["std_mob_no"];
		$register_address=$arg["std_address"];
		$register_batch=$arg["std_batch_no"];
		$register_session=$arg["std_session"];
		$register_faculty=$arg['std_faculty'];
		$register_department=$arg["std_department"];
		$message="$register_first_name $register_last_name Would like to request an account";
		$date_time=date('d-m-yy');

		mysqli_stmt_bind_param($stmt, 'ssssssssssssss', $register_first_name, $register_last_name, $register_dob,
		$register_email,$register_psswrd,$register_mob,$register_address,$uploaded_dir,$register_batch,$register_session,
		$register_faculty,$register_department,$message,$date_time);

		$status=mysqli_stmt_execute($stmt);
		if($status){
			mysqli_stmt_close($stmt);
			mysqli_close($cn);
          	return true;
		}
			mysqli_stmt_close($stmt);
			mysqli_close($cn);
          	return "email_exists";
		
	}
}

function SignUp_Lecturer($arg){
	$cn=db_connection();
	$sql="INSERT INTO `tbl_request_lectureres`(`username`, `email`, `pass`, `image`, `role`, `faculty`, `entry_date`) VALUES(?,?,?,?,?,?,?)";
	$stmt=mysqli_prepare($cn,$sql);
	if($stmt){
		$uploaded_dir		 ="lecturers images/";
		$filename			 =$_FILES["lecturer_image"]["name"];
		$uploaded_dir		.=$filename;
		$tmp_dir			 =$_FILES["lecturer_image"]["tmp_name"];
		$size 				 =$_FILES["lecturer_image"]["size"];
		$text				 =pathinfo($filename, PATHINFO_EXTENSION);

		$_admin_UserName=$arg["admin_username"];
		$_admin_email=$arg["admin_email"];
		$_admin_password=$arg["admin_psswrd"];
		$_admin_faculty=$arg["admin_faculty"];
		$_admin_role=$arg["admin_role"];
		$date=date('d-m-yy');
		mysqli_stmt_bind_param($stmt, 'sssssss', $_admin_UserName,$_admin_email,$_admin_password,$uploaded_dir,$_admin_role,$_admin_faculty,$date);
		/*
		mysqli_stmt_bind_param($stmt, 'sssssssssss', $arg["std_first_name"], $arg["std_last_name"], $arg["std_DOB"],$arg["std_email"],$arg["std_psswrd"],$arg["std_mob_no"],$arg["std_address"],$arg["std_batch_no"],$arg["std_session"],$arg["std_faculty"]
			,$arg["std_department"]);*/
		$status=mysqli_stmt_execute($stmt);
		if($status){
			mysqli_stmt_close($stmt);
			mysqli_close($cn);
          	return true;
		}
			mysqli_stmt_close($stmt);
			mysqli_close($cn);
          	return "email_exists";
		
	}
}

function creat_assigment($arg){
	$cn=db_connection();
	$sql="INSERT INTO `creat_assigment`(`faculty`, `department`, `semester`, `batch`, `ass_name`, `session`, `time_duration`, `message`, `document`, `created_on`, `created_by`) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
	$stmt = mysqli_prepare($cn,$sql);
	if($stmt){
	$uploaded_dir = 'assigment_images_pdf/';
	$filename	  = $_FILES["file"]["name"];
	$uploaded_dir.= $filename;
	$tmp_dir 	  =$_FILES["file"]["tmp_name"];
	$size 		  =$_FILES["file"]["size"];
	$file_type    =$_FILES['file']['type'];
	$new_size = $size/1024;   // new size
	$text		  =pathinfo($filename,PATHINFO_EXTENSION);

		$_faculty=$arg["select_faculty"];
		$_department=$arg["select_department"];
		$_semester=$arg["select_semester"];
		$_batch=$arg["txt_batch"];
		$_name=$arg["txt_assgmnt_name"];
		$_session=$arg["txt_session"];
		$_total_duration=$arg["txt_duration"];
		$_message=$arg["txt_message"];
		$_created_on=date('d/m/yy');
		$_created_by=$_SESSION["lecturer_logged_in"]["username"];


			$sql="SELECT * FROM `creat_assigment`";
			$run=mysqli_query($cn,$sql);
			while ($get=mysqli_fetch_array($run)){
				$_assigment_name=$get['ass_name'];
				$_creater=$get['$_created_by'];
				if($_created_by == $_creater and $_name == $_assigment_name){
					return false;
				}
			}
	mysqli_stmt_bind_param($stmt, 'sssssssssss', $_faculty,$_department,$_semester,$_batch,$_name,$_session,$_total_duration,$_message,$uploaded_dir,$_created_on,$_created_by);

		$status=mysqli_stmt_execute($stmt);
		if($status){
			mysqli_stmt_close($stmt);
			mysqli_close($cn);
          	return true;
		}
			mysqli_stmt_close($stmt);
			mysqli_close($cn);
          	return false;
	}
		
		

}

function submit_assigment(){
			  $cn=db_connection();
              $id=$_SESSION["student_logged_in"]['id'];
              $user_name=$_SESSION['student_logged_in']['first_name'];
              $user_email=$_SESSION['student_logged_in']['std_email'];
              $login_student_image=$_SESSION['student_logged_in']['student_image'];
              $_assigment=$_POST["txt_assigment_name"];

              		$uploaded_dir = 'submitted  assigments/';
                    $filename  	  = $_FILES["btn_evidence"]["name"];
                    $uploaded_dir.= $filename;
                    $tmp_dir      =$_FILES["btn_evidence"]["tmp_name"];

              $sql="SELECT * FROM `student_whose_submitted` WHERE `email`='$user_email'";
              $done=mysqli_query($cn,$sql);
              if(mysqli_num_rows($done)>0){

                while ($get=mysqli_fetch_assoc($done)) {
                $std_department = $get['department'];
                $Submitter_ID = $get['id'];
                $std_faculty = $get['faculty'];
                $std_semester = $get['semester'];
                $std_image = $get['std_img'];
                $Submitter_email = $get['email'];
                
                }

                $sql="SELECT * FROM `submit_assigments` WHERE `std_id`='$Submitter_ID' and `assigment`='$_assigment'";
	                $done=mysqli_query($cn,$sql);
		                if(mysqli_num_rows($done)>0){
		                  while ($get_submitting_data=mysqli_fetch_assoc($done)) {
		                  $COMP_forien_Key = $get_submitting_data['std_id'];
		                  $_COMP_EVIDENCE = $get_submitting_data['assigment'];
		                  $COMP_ON_SUBMITTED = $get_submitting_data['submitted_on'];
		                  $COMP_PK1 = $get_submitting_data['primary_key'];

		                   
		                }
	                	return false;
	                  }else{

	                    $sql="SELECT * FROM `creat_assigment` WHERE `ass_name`='$_assigment'";
		                $getting=mysqli_query($cn,$sql);
		                if(mysqli_num_rows($getting)>0){
		                  while ($get_std_info=mysqli_fetch_assoc($getting)) {
		                    $lecturer_name=$get_std_info['created_by'];
		                  }
		                }

	                    $submitted_on=date('m/d/Y h:i A');
	                    $sql_fk="INSERT INTO `submit_assigments`(`std_id`,`assigment`,`evidence`,`submitted_on`,`assigment_was_created_by`) 
	                          VALUES ('$Submitter_ID','$_assigment','$uploaded_dir','$submitted_on','$lecturer_name')";
	                       $add = mysqli_query($cn,$sql_fk);
	                       mysqli_close($cn);
	                      return true;
	                  }
                

              }else{

                $sql="SELECT * FROM `registred_students` WHERE `id`='$id'";
                $getting=mysqli_query($cn,$sql);
                if(mysqli_num_rows($getting)>0){
                  while ($get_std_info=mysqli_fetch_assoc($getting)) {
                    $_loggedIn_std_department=$get_std_info['department'];
                    $_loggedIn_std_faculty=$get_std_info['faculty'];
                    $_loggedIn_std_semester=$get_std_info['semester'];
                  }
                }

                $sql="SELECT * FROM `creat_assigment` WHERE `ass_name`='$_assigment'";
                $getting=mysqli_query($cn,$sql);
                if(mysqli_num_rows($getting)>0){
                  while ($get_std_info=mysqli_fetch_assoc($getting)) {
                    $lecturer_name=$get_std_info['created_by'];
                  }
                }

                 $sql="INSERT INTO `student_whose_submitted`(`std_name`, `email`, `department`, 
                                    `semester`, `faculty`, `std_img`, `title`, `description`, 
                                    `evidence`, `submitted_date`, `assigment_created_by`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
                  $stmt=mysqli_prepare($cn,$sql);
                  if($stmt){
                    $uploaded_dir = 'submitted  assigments/';
                    $filename   = $_FILES["btn_evidence"]["name"];
                    $uploaded_dir.= $filename;
                    $tmp_dir    =$_FILES["btn_evidence"]["tmp_name"];
                    $size       =$_FILES["btn_evidence"]["size"];
                    $file_type    =$_FILES['btn_evidence']['type'];
                    $new_size = $size/1024;   // new size
                    $text     =pathinfo($filename,PATHINFO_EXTENSION);

                    $user_name=$_SESSION['student_logged_in']['first_name'];
                    $user_email=$_SESSION['student_logged_in']['std_email'];
                    $login_student_image=$_SESSION['student_logged_in']['student_image'];
                    $_assigment=$_POST["txt_assigment_name"];

                    $assigment=$_POST["txt_assigment_name"];
                    $assigment_title=$_POST["txt_title"];
                    $assigment_discription=$_POST["txt_description"];
                    $submitted_date=date('m/d/Y h:i A');
                    mysqli_stmt_bind_param($stmt, 'sssssssssss',$user_name,$user_email,$_loggedIn_std_department,$_loggedIn_std_semester,$_loggedIn_std_faculty,$login_student_image,$assigment_title,$assigment_discription,$uploaded_dir,$submitted_date,$lecturer_name);
                    $status_a = mysqli_stmt_execute($stmt);

                    if($status_a){

              $sql="SELECT * FROM `student_whose_submitted` WHERE `email`='$user_email'";
              $done=mysqli_query($cn,$sql);
              if(mysqli_num_rows($done)>0){

                while ($get=mysqli_fetch_assoc($done)) {
                $std_department = $get['department'];
                $Submitter_ID = $get['id'];
                $std_faculty = $get['faculty'];
                $std_semester = $get['semester'];
                $std_image = $get['std_img'];
                $Submitter_email = $get['email'];
                
                }
            }


                    $submitted_on=date('m/d/Y h:i A');
                    $sql_fk="INSERT INTO `submit_assigments`(`std_id`,`assigment`,`evidence`,`submitted_on`, `assigment_was_created_by`) 
                         VALUES ('$Submitter_ID','$_assigment','$uploaded_dir','$submitted_on','$lecturer_name')";
                    $add = mysqli_query($cn,$sql_fk);
                      mysqli_stmt_close($stmt);
                      mysqli_close($cn);
                      return true;
                    }else{

                      return false;
                      mysqli_stmt_close($stmt);
                      mysqli_close($cn);
                    }

                    
                  }else{
                    mysqli_stmt_close($stmt);
                    mysqli_close($cn);
                     return false;
                  }

              }
			
		}

function update_assigment(){
	$cn=db_connection();
	$uploaded_dir = 'assigment_images_pdf/';
	$filename	  = $_FILES["file"]["name"];
	$uploaded_dir.= $filename;
	$tmp_dir 	  =$_FILES["file"]["tmp_name"];
	$size 		  =$_FILES["file"]["size"];
	$file_type    =$_FILES['file']['type'];
	$new_size = $size/1024;   // new size
	$text		  =pathinfo($filename,PATHINFO_EXTENSION);

		$id=$_GET["edit_id"];
		$_faculty=$_POST["select_faculty"];
		$_department=$_POST["select_department"];
		$_semester=$_POST["select_semester"];
		$_batch=$_POST["txt_batch"];
		$_name=$_POST["txt_assgmnt_name"];
		$_session=$_POST["txt_session"];
		$_total_duration=$_POST["txt_duration"];
		$_message=$_POST["txt_message"];
		$_created_on=date('d/m/yy');
		$_created_by=$_SESSION["lecturer_logged_in"]["username"];
	$sql="UPDATE `creat_assigment` SET `faculty`='$_faculty',`department`='$_department',`semester`='$_semester',`batch`='$_batch',`ass_name`='$_name',`session`='$_session',`time_duration`='$_total_duration',`message`='$_message',`document`='$uploaded_dir',`created_on`='$_created_on',`created_by`='$_created_by' WHERE `id`='$id'";
	$run=mysqli_query($cn,$sql);
	if($run){
		return true;
	}else{
		if(file_exists($uploaded_dir)){
			unlink($uploaded_dir);
		}
		return false;
	}
}

function edit_student(){
	$cn=db_connection();
	$uploaded_dir = 'student images/';
	$filename	  = $_FILES["edit_file"]["name"];
	$uploaded_dir.= $filename;
	$tmp_dir 	  =$_FILES["edit_file"]["tmp_name"];
	$size 		  =$_FILES["edit_file"]["size"];
	$file_type    =$_FILES['edit_file']['type'];
	$new_size = $size/1024;   // new size
	$text		  =pathinfo($filename,PATHINFO_EXTENSION);

		$_id=$_SESSION["student_logged_in"]["id"];
		$_faculty=$_POST["edit_faculty"];
		$_department=$_POST["edit_department"];
		$_semester=$_POST["edit_semester"];
		$_email=$_POST["edit_email"];
		$_firstname=$_POST["edit_first_name"];
		$_lastname=$_POST["edit_last_name"];
		$_batch=$_POST["edit_batch"];
		$_session=$_POST["edit_session"];
		$_address=$_POST["edit_address"];
		$_phone=$_POST["edit_phone"];
		$_dob=$_POST["edit_birth"];
	$sql="UPDATE `registred_students` SET `first_name`='$_firstname',`last_name`='$_lastname',`d_o_b`='$_dob',`email`='$_email',`phone`='$_phone',`address`='$_address',`img`='$uploaded_dir',`batch_no`='$_batch',`session`='$_session',`faculty`='$_faculty',`department`='$_department',`semester`='$_semester' WHERE `id`='$_id'";
	$run=mysqli_query($cn,$sql);
	if($run){
		return true;
	}else{
		if(file_exists($uploaded_dir)){
			unlink($uploaded_dir);
		}
		return false;
	}
}

function edit_lecturer(){
	$cn=db_connection();
	$uploaded_dir = 'lecturers images/';
	$filename	  = $_FILES["edit_file"]["name"];
	$uploaded_dir.= $filename;
	$tmp_dir 	  =$_FILES["edit_file"]["tmp_name"];
	$size 		  =$_FILES["edit_file"]["size"];
	$file_type    =$_FILES['edit_file']['type'];
	$new_size = $size/1024;   // new size
	$text		  =pathinfo($filename,PATHINFO_EXTENSION);

		$_id=$_SESSION["lecturer_logged_in"]["id"];
		$_faculty=$_POST["edit_faculty"];
		$_department=$_POST["edit_department"];
		$_email=$_POST["edit_email"];
		$_usrename=$_POST["edit_username"];
		$_gender=$_POST["edit_gender"];
		$_session=$_POST["edit_session"];
		$_address=$_POST["edit_address"];
		$_skill=$_POST["edit_skill"];
		$_phone=$_POST["edit_phone"];
		$_dob=$_POST["edit_birth"];
	$sql="UPDATE `registred_lecturers` SET `username`='$_usrename',`email`='$_email',`address`='$_address',`phone`='$_phone',`dob`='$_dob',`image`='$uploaded_dir',`gender`='$_gender',`skills`='$_skill',`faculty`='$_faculty',`department`='$_department' WHERE `id`='$_id'";
	$run=mysqli_query($cn,$sql);
	if($run){
		return true;
	}else{
		if(file_exists($uploaded_dir)){
			unlink($uploaded_dir);
		}
		return false;
	}
}

function edit_admin($arg){
	$cn=db_connection();
	$uploaded_dir = 'admin image/';
	$filename	  = $_FILES["edit_file"]["name"];
	$uploaded_dir.= $filename;
	$tmp_dir 	  =$_FILES["edit_file"]["tmp_name"];
	$size 		  =$_FILES["edit_file"]["size"];
	$file_type    =$_FILES['edit_file']['type'];
	$new_size = $size/1024;   // new size
	$text		  =pathinfo($filename,PATHINFO_EXTENSION);

		$_id=$_SESSION["admin_logged_in"]["id"];
		$_email=$arg["edit_email"];
		$_usrename=$arg["edit_username"];
		$_gender=$arg["edit_gender"];
		$_address=$arg["edit_address"];
		$_phone=$arg["edit_phone"];
	$sql="UPDATE `tbl_super_admin` SET `username`='$_usrename',`email`='$_email',
		`phone`='$_phone',`img`='$uploaded_dir',`gender`='$_gender',`address`='$_address' WHERE `id`='$_id'";
	$run=mysqli_query($cn,$sql);
	if($run){
		return true;
	}else{
		if(file_exists($uploaded_dir)){
			unlink($uploaded_dir);
		}
		return false;
	}
}

function check_old_pass(){
	$cn=db_connection();
	$_id=$_SESSION["student_logged_in"]["id"];
	$sql="SELECT * FROM `registred_students` WHERE `id`='$_id'";
	$run=mysqli_query($cn,$sql);
	if($run){
		while ($check = mysqli_fetch_array($run)){
			$db_pass=$check['psswrd'];
			$user_input_pass=$_POST['old_pass'];
		}
		if(password_verify($user_input_pass, $db_pass)){
			return true;
		}else{
			return false;
		}

	}else{
		return false;
	}
}

function check_admin_old_pass(){
	$cn=db_connection();
	$_id=$_SESSION["admin_logged_in"]["id"];
	$sql="SELECT * FROM `tbl_super_admin` WHERE `id`='$_id'";
	$run=mysqli_query($cn,$sql);
	if($run){
		while ($check = mysqli_fetch_array($run)){
			$db_pass=$check['pass'];
			$user_input_pass=$_POST['old_pass'];
		}
		if(password_verify($user_input_pass, $db_pass)){
			return true;
		}else{
			return false;
		}

	}else{
		return false;
	}
}

function check_old_pass_lecturer(){
	$cn=db_connection();
	$_id=$_SESSION["lecturer_logged_in"]["id"];
	$sql="SELECT * FROM `registred_lecturers` WHERE `id`='$_id'";
	$run=mysqli_query($cn,$sql);
	if($run){
		while ($check = mysqli_fetch_array($run)){
			$db_pass=$check['pass'];
			$user_input_pass=$_POST['old_pass'];
		}
		if(password_verify($user_input_pass, $db_pass)){
			return true;
		}else{
			return false;
		}

	}else{
		return false;
	}
}

function student_password_change(){
	$cn=db_connection();
	$_id=$_SESSION["student_logged_in"]["id"];
	$_new_pass=$_POST['new_pass'];
	$_confirm_pass=$_POST['confirm_pass'];
	if($_new_pass == $_confirm_pass){
		$_password_hashed=password_hash($_new_pass, PASSWORD_DEFAULT);
		$sql="UPDATE `registred_students` SET `psswrd`='$_password_hashed' WHERE `id`=$_id";
		$run=mysqli_query($cn,$sql);
		if($run){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}

}

function admin_password_change(){
	$cn=db_connection();
	$_id=$_SESSION["admin_logged_in"]["id"];
	$_new_pass=$_POST['new_pass'];
	$_confirm_pass=$_POST['confirm_pass'];
	if($_new_pass == $_confirm_pass){
		$_password_hashed=password_hash($_new_pass, PASSWORD_DEFAULT);
		$sql="UPDATE `tbl_super_admin` SET `pass`='$_password_hashed' WHERE `id`=$_id";
		$run=mysqli_query($cn,$sql);
		if($run){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}

}



function lecturer_password_change(){
	$cn=db_connection();
	$_id=$_SESSION["lecturer_logged_in"]["id"];
	$_new_pass=$_POST['new_pass'];
	$_confirm_pass=$_POST['confirm_pass'];
	if($_new_pass == $_confirm_pass){
		$_password_hashed=password_hash($_new_pass, PASSWORD_DEFAULT);
		$sql="UPDATE `registred_lecturers` SET `pass`='$_password_hashed' WHERE `id`=$_id";
		$run=mysqli_query($cn,$sql);
		if($run){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

function delete_assigment(){
	$cn=db_connection();
	$id=$_GET['remove_id'];
	$sql="DELETE FROM `creat_assigment` WHERE `id`=$id";
	$run=mysqli_query($cn,$sql);
	if($run){
		return true;
	}else{
		return false;
	}
}

	function atuthenticate_lecturer($arg){
			$cn=db_connection();
			$_login_email=$arg["std_login_email"];
			$_login_password=$arg["std_login_password"];
			$sql="SELECT * FROM `registred_lecturers` WHERE `email`=?";
			$stmt = mysqli_prepare($cn,$sql);
			if($stmt){
				mysqli_stmt_bind_param($stmt , 's' ,$arg['std_login_email']);
				mysqli_stmt_bind_result($stmt, $db_lecturer_id,$db_lecturer_username,$db_lecturer_email,$dB_lecturer_address,$db_lecturer_phone,$db_lecturer_dob,$db_lecturer_password,$db_image,$db_lecturer_gender,$db_lecturer_role,$db_lecturer_skills,$db_lecturer_faculty,$db_lecturer_department,$db_lecturer_registry_date);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_fetch($stmt);
				
				if(!empty($db_lecturer_id)){
					if(password_verify($_login_password, $db_lecturer_password)){
						
						return array("id"=>$db_lecturer_id,"username"=>$db_lecturer_username,"lecturer_image"=>$db_image);
						 
					}else{
						return false;
					}
				 
				}
			}

	}

		function atuthenticate_admin($arg){
			$cn=db_connection();
			$_login_email=$arg["std_login_email"];
			$_login_password=$arg["std_login_password"];
			$sql="select * from `tbl_super_admin` where `email`=?";
			$stmt = mysqli_prepare($cn,$sql);
			if($stmt){
				mysqli_stmt_bind_param($stmt , 's' ,$_login_email);
				mysqli_stmt_bind_result($stmt, $db_admin_id,$db_admin_username,$db_admin_email,$db_admin_phone,$db_admin_password,$db_image,$db_admin_gender,$db_admin_address,$db_admin_role,$db_admin_registry_date);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_fetch($stmt);
				
				if(!empty($db_admin_id)){
					if(password_verify($_login_password, $db_admin_password)){
						// $_SESSION["lecturer_logged_in"];
						// header("location:Lecturer_Dashboard.php");
						echo $db_admin_username;
						return array("id"=>$db_admin_id,"username"=>$db_admin_username,"admin_image"=>$db_image);

						 
					}
				 
				}
			}

	}

	function authenticate_student($arg){
		$cn=db_connection();
		$_login_email=$arg["std_login_email"];
		$_login_password=$arg["std_login_password"];
		$sql="select * from `registred_students` where `email`=?";
			$stmt = mysqli_prepare($cn,$sql);
			if($stmt){
				mysqli_stmt_bind_param($stmt , 's' ,$_login_email);
				mysqli_stmt_bind_result($stmt, $db_id,$db_firstname,$db_lastname,$db_dob,$db_email,$db_type,$db_password,$db_phone,$db_address,$db_image,$db_batch,$db_session,$db_faculty,$db_department,$db_semester,$db_registry_date);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_fetch($stmt);
				
				if(!empty($db_id)){
					if(password_verify($_login_password, $db_password)){
						  // $_SESSION["student_logged_in"];
						  // header("location:Student_Dashboard.php");
						return array("id"=>$db_id,"first_name"=>$db_firstname." ".$db_lastname,"student_image"=>$db_image,"std_email"=>$db_email);
						
						 
					}else{
						return false;
					}
				 
				}
			}
			


	}

	function fetch_all_request_data(){
		$cn=db_connection();
		$sql="SELECT * FROM `tbl_students_info`";
		$run=mysqli_query($cn,$sql);
		if(count($run)>0){
			return true;
		}else{
			return false;
		}
}

	function approve_students(){
		$cn=db_connection();
		$id = $_GET['approve_id'];
		$sql="select * from  `tbl_students_requests` where `id`=$id";
		$run=mysqli_query($cn,$sql);
		while ($row=mysqli_fetch_array($run)) {
				$FirstName=$row["first_name"];
				$LastName=$row["last_name"];
				$Dob=$row["d_o_b"];
				$Email=$row["email"];
				$type='Student';
				$Password=$row["psswrd"];
				$Phone=$row["phone"];
				$Address=$row["address"];
				$image=$row["img"];
				$Batch=$row["batch_no"];
				$Session=$row["session"];
				$Faculty=$row['faculty'];
				$Department=$row["department"];
				$date=date('d-m-yy');
		}
		$sql="SELECT `email` FROM `registred_students`";
		$registred_email=mysqli_query($cn,$sql);
		while ($get_email=mysqli_fetch_array($registred_email)) {
			$register_student_email=$get_email["email"];

			if($Email == $register_student_email){
				exit("<script type='text/javascript'>alert('This Student is Already Approved');</script>");
			}
		}
		$sql="INSERT INTO `registred_students`(`first_name`, `last_name`, `d_o_b`, `email`, `type`, `psswrd`, `phone`, `address`, `img`, `batch_no`, `session`, `faculty`, `department`, `registry_date`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
					$stmt=mysqli_prepare($cn,$sql);
					if($stmt){
						mysqli_stmt_bind_param($stmt, 'ssssssssssssss', $FirstName,$LastName,$Dob,$Email,$type,$Password,
						$Phone,$Address,$image,$Batch,$Session,$Faculty,$Department,$date);
						$status=mysqli_stmt_execute($stmt);
						if($status){
							//$template_file=("student_approve_style.php");
							$to = $Email;
							$subject = "REGARDING : Approval";
							$headers="From: Bkuc Assigment Management System";
							$message="<html><body>";
					        $message.="<div style='max-width: 600px;min-width: 200px;background-color: #fff;padding: 20px;margin: auto';>
							<center><img style='max-height: 75px;' src='https://www.bkuc.edu.pk/public/images/top_banner1.png'></a></center>
							<h3>BKUC ASSIGMENT MANAGEMENT SYSTEM</h3>
							<i>Congrates! Your Approval Is Accepted</i>
							<p style='font-size: 8px;'>Assalam U Alikum Dear $FirstName $LastName. Your Approval has been accepted Now You may use Our website BKUC ASSIGMENT MANAGEMENT SYSTEM.ThankYou For Requesting!.</p>
							<p style='font-size: 8px;'><i><strong>Do not forget to share with others.</strong></i></p>
							</div>";
					        $message.="</body></html>";
							$headers .= "Reply-To: aqibullah3312@gmail.com" . "\r\n";
							$headers .= "MIME-Version: 1.0"."\r\n";
							$headers .= "MIME-Version: 1.0"."\r\n";
							$headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
							mail($to, $subject, $message,$headers);
							 $sql =  "DELETE FROM `tbl_students_requests` WHERE `tbl_students_requests`.`id` = '$id'";
			    				  $run=mysqli_query($cn,$sql);
			    				  if($run){
			    				  	?>
			    				  	<script type="text/javascript">
			    				  		window.location='student_requests_page.php';
			    				  	</script>
			    				  	<?php
			    				  }
    				  		mysqli_stmt_close($stmt);
    				  		mysqli_close($cn);
					        return  "Student Approved";
						}
							mysqli_stmt_close($stmt);
							mysqli_close($cn);
					        return  "Error in Approving";
						
					}

					 
	}

		function approve_lecturers(){
		$cn=db_connection();
		$id = $_GET['approve_id'];
		$sql="select * from  `tbl_request_lectureres` where `id`=$id";
		$run=mysqli_query($cn,$sql);
		while ($row=mysqli_fetch_array($run)) {
				$username=$row["username"];
				$Email=$row["email"];
				$Password=$row["pass"];
				$image=$row["image"];
				$role=$row["role"];
				$Faculty=$row["faculty"];
				$date=$row["entry_date"];
		}
		$sql="SELECT `email` FROM `registred_lecturers`";
		$registred_email=mysqli_query($cn,$sql);
		while ($get_email=mysqli_fetch_array($registred_email)) {
			$register_student_email=$get_email["email"];

			if($Email == $register_student_email){
				exit("<script type='text/javascript'>alert('This Teacher is Already Approved You must be Rejecte this Teacher');</script>");
			}
		}
		$sql="INSERT INTO `registred_lecturers`(`username`, `email`, `pass`, `image`, `role`, `faculty`, `entry_date`) VALUES(?,?,?,?,?,?,?)";
					$stmt=mysqli_prepare($cn,$sql);
					if($stmt){
						mysqli_stmt_bind_param($stmt, 'sssssss', $username,$Email,$Password,$image,$role,$Faculty,$date);
						$status=mysqli_stmt_execute($stmt);
						if($status){
							//$template_file = ("lecturer_approve_style.php");
							$to = $Email;
							$subject = "REGARDING : Approval";
							$message="<html><body>";
					        $message.="<div style='max-width: 600px;min-width: 200px;background-color: #fff;padding: 20px;margin: auto';>
							<center><img style='max-height: 75px;' src='https://www.bkuc.edu.pk/public/images/top_banner1.png'></a></center>
							<h3>BKUC ASSIGMENT MANAGEMENT SYSTEM</h3>
							<i>Congrates Sir! Your Approval Is Accepted</i>
							<p style='font-size: 8px;'>Assalam U Alikum Dear Sir $username. Your Approval has been accepted Now You may use Our website BKUC ASSIGMENT MANAGEMENT SYSTEM.ThankYou For Requesting!.</p>
							<p style='font-size: 8px;'><i><strong>Do not forget to share with others.</strong></i></p>
							</div>";
					        $message.="</body></html>";
							$headers="From: BKUC ASSIGMENT MANAGEMENT SYSTEM";
							$headers .= "MIME-Version: 1.0"."\r\n";
							$headers .= "MIME-Version: 1.0"."\r\n";
							$headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
							mail($to, $subject, $message,$headers);
							 $sql =  "DELETE FROM `tbl_request_lectureres` WHERE `tbl_request_lectureres`.`id` = '$id'";
			    				  $run=mysqli_query($cn,$sql);
			    				  if($run){
			    				  	?>
			    				  	<script type="text/javascript">
			    				  		window.location='teacher_requests_page.php';
			    				  	</script>
			    				  	<?php
			    				  }
    				  		mysqli_stmt_close($stmt);
    				  		mysqli_close($cn);
					        return  "Student Approved";
						}
							mysqli_stmt_close($stmt);
							mysqli_close($cn);
					        return  "Error in Approving";
						
					}

					 
	}


	function reject_student(){
		$cn=db_connection();
		$id = $_GET['reject_id'];
		$sql="select * from  `tbl_students_requests` where `id`=$id";
		$run=mysqli_query($cn,$sql);
		while ($row=mysqli_fetch_array($run)) {
				$FirstName=$row["first_name"];
				$LastName=$row["last_name"];
				$Email=$row["email"];
		}
		//$template_file=("student_reject_style.php");
		$to = $Email;
        $subject = "REGARDING : Approval Rejected";
        $message="<html><body>";
        $message.="<div style='max-width: 600px;min-width: 200px;background-color: #fff;padding: 20px;margin: auto';>
		<center><img style='max-height: 75px;' src='https://www.bkuc.edu.pk/public/images/top_banner1.png'></a></center>
		<h3>BKUC ASSIGMENT MANAGEMENT SYSTEM</h3>
		<i>Sorry! Your Approval Has Been Rejected</i>
		<p style='font-size: 8px;'>Sorry Dear $FirstName $LastName! Your Approval has been Rejected From BKUC ASSIGMENT MANAGEMENT SYSTEM.ThankYou For Requesting!.</p>
		<p style='font-size: 8px;'><i><strong>Do not forget to share with others.</strong></i></p>
		</div>";
        $message.="</body></html>";
        $headers  ="From: BKUC ASSIGMENT MANAGEMENT SYSTEM";
        $headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
		mail($to, $subject, $message,$headers);
		$sql =  "DELETE FROM `tbl_students_requests` WHERE `tbl_students_requests`.`id` = '$id'";
		  $run=mysqli_query($cn,$sql);
			 if($run){
			   return true;
			   }
			   else{
			   	return false;
			   }
	}

		function reject_lecturer(){
		$cn=db_connection();
		$id = $_GET['teacher_reject_id'];
		$sql="select * from  `tbl_request_lectureres` where `id`=$id";
		$run=mysqli_query($cn,$sql);
		while ($row=mysqli_fetch_array($run)) {
			$username=$row["username"];
			$Email=$row["email"];
		}
		//$template_file=("lecturer_reject_style.php");
		$to = $Email;
		$message = "<html><body>";
		$message.="<div style='max-width: 600px;min-width: 200px;background-color: #fff;padding: 20px;margin: auto';>
		<center><img style='max-height: 75px;' src='https://www.bkuc.edu.pk/public/images/top_banner1.png'></a></center>
		<h3>BKUC ASSIGMENT MANAGEMENT SYSTEM</h3>
		<i>Sorry Sir! Your Approval Has Been Rejected</i>
		<p style='font-size: 8px;'> Sorry Dear $username! Your Approval has been Rejected From BKUC ASSIGMENT MANAGEMENT SYSTEM.ThankYou For Requesting!.</p>
		<p style='font-size: 8px;'><i><strong>Do not forget to share with others.</strong></i></p>
		</div>";
		$message.= "</body></html>";
        $subject = "REGARDING : Approval Rejected";
        $headers="From: BKUC ASSIGMENT MANAGEMENT SYSTEM";
        $headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
		mail($to, $subject, $message,$headers);
		$sql =  "DELETE FROM `tbl_request_lectureres` WHERE `tbl_request_lectureres`.`id` = '$id'";
		$run=mysqli_query($cn,$sql);
		if($run){
			return true;
		}
		else{
			return false;
			}
	}



function forgot_password($arg){
	$cn=db_connection();
	$usertype=$arg["forgot_user_type"];
	$username=$arg["forgot_userName"];
	$email=$arg["forgt_email"];
	if($usertype == "Student"){
		$sql="SELECT * FROM `registred_students` WHERE `email`='$email'";
		$run=mysqli_query($cn,$sql);
		if($run){
			while ($fetch_data=mysqli_fetch_array($run)) {
				$_id=$fetch_data["id"];
				$_email = $fetch_data["email"];
				return array("id"=>$_id,"email"=>$_email);
				mysqli_close($cn);
			}
			//return false;
		} return false;
	}
	else if($usertype == "Lecturer"){
		$sql="SELECT * FROM `registred_lecturers` WHERE `email`='$email'";
		$done=mysqli_query($cn,$sql);
		if($done){
			//$teacher_role='Lecturer';
			while($_get_data=mysqli_fetch_array($done)) {
				$_lec_id=$_get_data["id"];
				$_lec_email = $_get_data["email"];
				return array("id"=>$_lec_id,"email"=>$_lec_email);
				mysqli_close($cn);
			}
			//return false;
		}
		return false;
	}
	//return false;
		
}

function confirm_forgott_password($arg){
	$cn=db_connection();
	$usertype=$arg["forgot_user_type"];
	$username=$arg["forgot_userName"];
	$email=$arg["forgt_email"];
	$confirmation = 'password pending';
	if($usertype == "Student" and $usertype!= null and $usertype != "Select User Type"){
	$get_sql="SELECT `email` FROM `password_retrieve`";
	$check=mysqli_query($cn,$get_sql);
	while ($done=mysqli_fetch_array($check)) {
			$check_email=$done["email"];
				if($email == $check_email){
		return false;
		}
	}
		$Role=$arg["forgot_user_type"];
		$sql="INSERT INTO `password_retrieve`(`user_name`, `email`,`Role`,`confirmation`) Values(?,?,?,?)";
		$stmt=mysqli_prepare($cn,$sql);
			if($stmt){
				mysqli_stmt_bind_param($stmt, 'ssss', $username,$email,$Role,$confirmation);
				$done=mysqli_stmt_execute($stmt);
				if($done){
					mysqli_stmt_close($stmt);
					mysqli_close($cn);
					return true;
				}else{
					mysqli_stmt_close($stmt);
					mysqli_close($cn);
					return false;
				}
			}
	}else if($usertype == "Lecturer"){
	$get_sql="SELECT `email` FROM `lecturer_password_retreive`";
	$check=mysqli_query($cn,$get_sql);
	while ($done=mysqli_fetch_array($check)) {
			$check_email=$done["email"];
				if($email == $check_email){
		return false;
		}else{
		$Role=$arg["forgot_user_type"];
		$sql="INSERT INTO `lecturer_password_retreive`(`user_name`, `email`,`Role`,`confirmation`) Values(?,?,?,?)";
		$stmt=mysqli_prepare($cn,$sql);
			if($stmt){
				mysqli_stmt_bind_param($stmt, 'ssss', $username,$email,$Role,$confirmation);
				$done=mysqli_stmt_execute($stmt);
				if($done){
					mysqli_stmt_close($stmt);
					mysqli_close($cn);
					return true;
				}else{
					mysqli_stmt_close($stmt);
					mysqli_close($cn);
					return false;
				}
			}
		}
	}
	}else{
		return "Plz Select the user type";
	}

}

function send_new_password(){
	$cn=db_connection();
	$id=$_POST['h_value'];
	$new_pass=$_POST["new_password"];
	if(isset($new_pass) && isset($id)){
	$new_pass_hash=password_hash($new_pass, PASSWORD_DEFAULT);
	$sql="UPDATE `registred_students` SET `psswrd`=?";
	$stmt = mysqli_prepare($cn,$sql);
	mysqli_stmt_bind_param($stmt , 's',$new_pass_hash);
	$status = mysqli_stmt_execute($stmt);
	if($status){
		$get_sql="SELECT * FROM `password_retrieve`";
		$check=mysqli_query($cn,$get_sql);
		while ($done=mysqli_fetch_array($check)) {
			$UserEmail=$done["email"];
			$UserName=$done["user_name"];
		}
		$to = $UserEmail;
		$message = "<html><body>";
		$message.="<div style='max-width: 600px;min-width: 200px;background-color: #fff;padding: 20px;margin: auto';>
		<center><img style='max-height: 75px;' src='https://www.bkuc.edu.pk/public/images/top_banner1.png'></a></center>
		<h3>BKUC ASSIGMENT MANAGEMENT SYSTEM</h3>
		<i>Sucess!</i>
		<p style='font-size: 10px;'>Dear $UserName! Your Password has been Changed From BKUC Administration System.</p>
		<p style='font-size: 11px;'><strong>New Password : <b style='color:green;'>$new_pass</b></strong></p><br>
		<p style='font-size: 10px;color:blue;'><i><strong>Thank You for usig BKUC AMS.</strong></i></p>
		</div>";
		$message .= "</body></html>";
        $subject  = "REGARDING : Password Changed";
        $headers  ="From: BKUC Admin";
        $headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
		mail($to, $subject, $message,$headers);
		$sql =  "DELETE FROM `password_retrieve` WHERE `password_retrieve`.`id` = '$id'";
		$run=mysqli_query($cn,$sql);
		if($run){
		mysqli_stmt_close($stmt);
		mysqli_close($cn);
		return true;
		}else{
		mysqli_stmt_close($stmt);
		mysqli_close($cn);
		return false;
		}
	}else{
		mysqli_stmt_close($stmt);
		mysqli_close($cn);
		return false;
	}
	reset($id);
	reset($new_pass);
	}


}

function lecturer_send_new_password(){
	$cn=db_connection();
	$id=$_POST['h_value'];
	$new_pass=$_POST["new_password"];
	if(isset($new_pass) && isset($id)){
	$new_pass_hash=password_hash($new_pass, PASSWORD_DEFAULT);
	$sql="UPDATE `registred_lecturers` SET `pass`=?";
	$stmt = mysqli_prepare($cn,$sql);
	mysqli_stmt_bind_param($stmt , 's',$new_pass_hash);
	$status = mysqli_stmt_execute($stmt);
	if($status){
		$get_sql="SELECT * FROM `lecturer_password_retreive`";
		$check=mysqli_query($cn,$get_sql);
		while ($done=mysqli_fetch_array($check)) {
			$UserEmail=$done["email"];
			$UserName=$done["user_name"];
			$userRole=$row["Role"];
			$confirmation=$row["confirmation"];
		}
		$to = $UserEmail;
		$message = "<html><body>";
		$message.="<div style='max-width: 600px;min-width: 200px;background-color: #fff;padding: 20px;margin: auto';>
		<center><img style='max-height: 75px;' src='https://www.bkuc.edu.pk/public/images/top_banner1.png'></a></center>
		<h3>BKUC ASSIGMENT MANAGEMENT SYSTEM</h3>
		<i>Sucess!</i>
		<p style='font-size: 10px;'>Dear Sir $UserName! Your Password has been Changed From BKUC Administration System.</p>
		<p style='font-size: 11px;'><strong>New Password : <b style='color:green;'>$new_pass</b></strong></p><br>
		<p style='font-size: 10px;color:blue;'><i><strong>Thank You Sir for usig BKUC AMS.</strong></i></p>
		</div>";
		$message .= "</body></html>";
        $subject  = "REGARDING : Password Changed";
        $headers  ="From: BKUC Admin";
        $headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
		mail($to, $subject, $message,$headers);
		$sql =  "DELETE FROM `lecturer_password_retreive` WHERE `lecturer_password_retreive`.`id` = '$id'";
		$run=mysqli_query($cn,$sql);
		if($run){
		mysqli_stmt_close($stmt);
		mysqli_close($cn);
		return true;
		}else{
		mysqli_stmt_close($stmt);
		mysqli_close($cn);
		return false;
		}
	}else{
		mysqli_stmt_close($stmt);
		mysqli_close($cn);
		return false;
	}
	reset($id);
	reset($new_pass);
	}


}

		function Teacher_reject_password_send(){
		$cn=db_connection();
		$id = $_GET['teacher_reject_id'];
		$sql="select * from  `lecturer_password_retreive` where `id`=$id";
		$run=mysqli_query($cn,$sql);
		while ($row=mysqli_fetch_array($run)) {
			$username=$row["user_name"];
			$userEmail=$row["email"];
			$userRole=$row["Role"];
			$confirmation=$row["confirmation"];
		}
		//$template_file=("lecturer_reject_style.php");
		$to = $userEmail;
		$message = "<html><body>";
		$message.="<div style='max-width: 600px;min-width: 200px;background-color: #fff;padding: 20px;margin: auto';>
		<center><img style='max-height: 75px;' src='https://www.bkuc.edu.pk/public/images/top_banner1.png'></a></center>
		<h3>BKUC ASSIGMENT MANAGEMENT SYSTEM</h3>
		<i>Not Change!</i>
		<p style='font-size: 10px;'>Dear $username! Your Password Request hasn been canceld From BKUC Administration System.</p>
		<p style='font-size: 10px;color:blue'><i><strong>thank You for usig BKUC AMS.</strong></i></p>
		</div>";
		$message .= "</body></html>";
        $subject  = "REGARDING : Request Canceld";
        $headers  ="From: BKUC Admin ";
        $headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
		mail($to, $subject, $message,$headers);
		$sql =  "DELETE FROM `lecturer_password_retreive` WHERE `lecturer_password_retreive`.`id` = '$id'";
		$run=mysqli_query($cn,$sql);
		if($run){
			return true;
		}
		else{
			return false;
			}
	}


		function reject_password_send(){
		$cn=db_connection();
		$id = $_GET['password_reject_id'];
		$sql="select * from  `password_retrieve` where `id`=$id";
		$run=mysqli_query($cn,$sql);
		while ($row=mysqli_fetch_array($run)) {
			$username=$row["user_name"];
			$userEmail=$row["email"];
			$userRole=$row["Role"];
			$confirmation=$row["confirmation"];
		}
		//$template_file=("lecturer_reject_style.php");
		$to = $userEmail;
		$message = "<html><body>";
		$message.="<div style='max-width: 600px;min-width: 200px;background-color: #fff;padding: 20px;margin: auto';>
		<center><img style='max-height: 75px;' src='https://www.bkuc.edu.pk/public/images/top_banner1.png'></a></center>
		<h3>BKUC ASSIGMENT MANAGEMENT SYSTEM</h3>
		<i>Not Change!</i>
		<p style='font-size: 10px;'>Dear $username! Your Password Request hasn been canceld From BKUC Administration System.</p>
		<p style='font-size: 10px;color:blue'><i><strong>thank You for usig BKUC AMS.</strong></i></p>
		</div>";
		$message .= "</body></html>";
        $subject  = "REGARDING : Request Canceld";
        $headers  ="From: BKUC Admin ";
        $headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
		mail($to, $subject, $message,$headers);
		$sql =  "DELETE FROM `password_retrieve` WHERE `password_retrieve`.`id` = '$id'";
		$run=mysqli_query($cn,$sql);
		if($run){
			return true;
		}
		else{
			return false;
			}
	}

?>