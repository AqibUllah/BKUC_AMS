<?php
	include('db_page.php');
	$cn=db_connection();
    $id = $_GET['id'];
    $sql="select * from  `tbl_students_requests` where `id`='$id'";
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
        $Batch=$row["batch_no"];
        $Session=$row["session"];
        $Faculty=$row['faculty'];
        $Department=$row["department"];
        $date=date('d-m-yy');
            $sql="INSERT INTO `registred_students`(`first_name`, `last_name`, `d_o_b`, `email`, `type`, `psswrd`, `phone`,
             `address`, `batch_no`, `session`, `faculty`, `department`, `registry_date`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
          $stmt=mysqli_prepare($cn,$sql);
          if($stmt){
            mysqli_stmt_bind_param($stmt, 'sssssssssssss', $FirstName,$LastName,$Dob,$Email,$type,$Password,
            $Phone,$Address,$Batch,$Session,$Faculty,$Department,$date);
            $status=mysqli_stmt_execute($stmt);
            if($status){
              $sql =  "DELETE FROM `tbl_students_requests` WHERE `tbl_students_requests`.`id` = '$id'";
              mysqli_stmt_close($stmt);
              mysqli_close($cn);
              echo "Student Approved";
            }
              mysqli_stmt_close($stmt);
              mysqli_close($cn);
            
          }else{
          	echo "Error in approving";
          }


    }
?>