<?php
if(isset($_POST['new_data'])){
$check_email = $_POST['new_data'];
include('db_page_2.php');
$cn=db_connection();
$sql="select * from `registred_students` where `email`='$check_email'";
$run = mysqli_query($cn,$sql);
	if(mysqli_num_rows($run)>0){
		echo "<script>alert('matched');
				stepper.next();
				</script>";
	}else{
		echo "did not matched";
	}
}
?>