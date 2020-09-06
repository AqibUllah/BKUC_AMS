<?php
function input_recieved($arg){
	if(is_array($arg)){
		foreach ($arg as $input) {
			if($input == "" or $input == null){
				return "missing_input";
			}
		}
	}
	return true;
}
function display_error($index_name){
	$error=array("missing_input" 				=> "Error:missing input fields",
				 "incorrect_credintials" 		=> "Error : Invalid Email or password",
				 "invalid_email_format"			=> "Error : Invlid Email Formate",
				 "invlaid first name formate"	=> "Error : Invalid First Name Formate",
				 "email_exists"					=> "Error : This email is already exists",
				 "mismatch_confirm_password"	=> "Error : Confirm password should match.");
	echo "<div id='error_id'>".$error[$index_name]."</div>";
}

function validate_sanitize_login_inputs($arg){
	$_std_login_email=filter_var($arg["std_login_email"], FILTER_SANITIZE_EMAIL);
	$_std_login_password=$arg["std_login_password"];

	$_std_email=filter_var($arg["std_login_email"], FILTER_VALIDATE_EMAIL);
	if(!$_std_email){
		return "invalid_email_format";
	}
	return array("std_login_email"=>$_std_email, "std_login_password"=>$_std_login_password);
}

function validate_sanitize_forgott_password_inputs($arg){
	$_forgott_email=filter_var($arg["forgt_email"], FILTER_SANITIZE_EMAIL);
	$_forgott_username=filter_var($arg["forgot_userName"], FILTER_SANITIZE_STRING) ;
	$_forgott_usertype=filter_var($arg["forgot_user_type"], FILTER_SANITIZE_STRING);
	$_forgott_email=filter_var($arg["forgt_email"], FILTER_VALIDATE_EMAIL);
	if(!$_forgott_email){
		return false;
	}
	return array("forgt_email"=>$_forgott_email, "forgot_userName"=>$_forgott_username,"forgot_user_type"=>$_forgott_usertype);
}

function validate_sanitize_student_SignUp_inputs($arg){
	$_std_firstName=filter_var($arg["std_first_name"],FILTER_SANITIZE_STRING);
	$_std_lasstName=filter_var($arg["std_last_name"],FILTER_SANITIZE_STRING);
	$_std_dob=filter_var($arg["std_DOB"],FILTER_SANITIZE_NUMBER_INT);
	$_std_mob=filter_var($arg["std_mob_no"],FILTER_SANITIZE_NUMBER_INT);
	$_std_email=filter_var($arg["std_email"], FILTER_SANITIZE_EMAIL);
	$_std_address=filter_var($arg["std_address"], FILTER_SANITIZE_STRING);
	$_std_password=password_hash($arg["std_psswrd"], PASSWORD_DEFAULT);
	$_std_batch_no=filter_var($arg["std_batch_no"],FILTER_SANITIZE_NUMBER_INT);
	$_std_session=filter_var($arg["std_session"],FILTER_SANITIZE_NUMBER_INT);
	$_std_Faculty=filter_var($arg["std_faculty"], FILTER_SANITIZE_STRING);
	$_std_Department=filter_var($arg["std_department"], FILTER_SANITIZE_STRING);
	$_std_email=filter_var($arg["std_email"], FILTER_VALIDATE_EMAIL);
	if(!$_std_email){
		return "invalid_email_format";
	}
	return array("std_first_name"=>$_std_firstName,"std_last_name"=>$_std_lasstName,"std_DOB"=>$_std_dob,"std_mob_no"=>$_std_mob,"std_email"=>$_std_email,"std_address"=>$_std_address,"std_psswrd"=>$_std_password,"std_batch_no"=>$_std_batch_no,"std_session"=>$_std_session,"std_faculty"=>$_std_Faculty,"std_department"=>$_std_Department);
}

function validate_sanitize_student_Update_inputs($arg){
	$_std_firstName=filter_var($arg["edit_first_name"],FILTER_SANITIZE_STRING);
	$_std_lasstName=filter_var($arg["edit_last_name"],FILTER_SANITIZE_STRING);
	$_std_dob=filter_var($arg["edit_birth"],FILTER_SANITIZE_NUMBER_INT);
	$_std_mob=filter_var($arg["edit_phone"],FILTER_SANITIZE_NUMBER_INT);
	$_std_email=filter_var($arg["edit_email"], FILTER_SANITIZE_EMAIL);
	$_std_address=filter_var($arg["edit_address"], FILTER_SANITIZE_STRING);
	$_std_batch_no=filter_var($arg["edit_batch"],FILTER_SANITIZE_NUMBER_INT);
	$_std_session=filter_var($arg["edit_session"],FILTER_SANITIZE_NUMBER_INT);
	$_std_Faculty=filter_var($arg["edit_faculty"], FILTER_SANITIZE_STRING);
	$_std_Department=filter_var($arg["edit_department"], FILTER_SANITIZE_STRING);
	$_std_email=filter_var($arg["edit_email"], FILTER_VALIDATE_EMAIL);
	if(!$_std_email){
		return "invalid_email_format";
	}
	return array("edit_first_name"=>$_std_firstName,"edit_last_name"=>$_std_lasstName,"edit_birth"=>$_std_dob,"edit_phone"=>$_std_mob,"edit_email"=>$_std_email,"edit_address"=>$_std_address,"edit_batch"=>$_std_batch_no,"edit_session"=>$_std_session,"edit_faculty"=>$_std_Faculty,"edit_department"=>$_std_Department);
}

function validate_sanitize_creat_assigment_inputs($arg){
	$_faculty=filter_var($arg["select_faculty"],FILTER_SANITIZE_STRING);
	$_department=filter_var($arg["select_department"],FILTER_SANITIZE_STRING);
	$_semester=filter_var($arg["select_semester"],FILTER_SANITIZE_STRING);
	$_batch=filter_var($arg["txt_batch"],FILTER_SANITIZE_STRING);
	$_name=filter_var($arg["txt_assgmnt_name"], FILTER_SANITIZE_STRING);
	$_session=filter_var($arg["txt_session"], FILTER_SANITIZE_STRING);
	$_total_duration=filter_var($arg["txt_duration"],FILTER_SANITIZE_STRING);
	$_message=filter_var($arg["txt_message"],FILTER_SANITIZE_STRING);
	return array("select_faculty"=>$_faculty,"select_department"=>$_department,"select_semester"=>$_semester,
				 "txt_batch"=>$_batch,"txt_assgmnt_name"=>$_name,"txt_session"=>$_session,
				 "txt_duration"=>$_total_duration,"txt_message"=>$_message);	
}

function validate_sanitize_admin_SignUp_inputs($arg){
	$_admin_user_name=filter_var($arg["admin_username"],FILTER_SANITIZE_STRING);
	$_admin_email=filter_var($arg["admin_email"],FILTER_SANITIZE_EMAIL);
	$_admin_password=password_hash($arg["admin_psswrd"], PASSWORD_DEFAULT);
	$_admin_faculty=filter_var($arg["admin_faculty"],FILTER_SANITIZE_STRING);
	$_admin_role=filter_var($arg["admin_role"], FILTER_SANITIZE_STRING);
	$_admin_email=filter_var($arg["admin_email"], FILTER_VALIDATE_EMAIL);
	if(!$_admin_email){
		return "invalid_email_format";
	}
	return array("admin_username"=>$_admin_user_name,"admin_email"=>$_admin_email,"admin_psswrd"=>$_admin_password,
					"admin_faculty"=>$_admin_faculty,"admin_role"=>$_admin_role);
}

function match_password_confirm($arg){
	$admin_password=$arg["admin_psswrd"];
	$admin_confirm_password=$arg["admin_confirm_psswrd"];
	if($admin_password == $admin_confirm_password){
		return true;
	}else{
		return "mismatch_confirm_password";
	}
}
?>