<?php  

	// student_record_management_system database connection

	$conn = mysqli_connect("remotemysql.com","Yo8XLI7jJz","NjkyqMR4cj","Yo8XLI7jJz");

	$sql = "SELECT * from student_record_data";
	$res = mysqli_query($conn,$sql);

	$row = mysqli_num_rows($res);
	$id = $row+1;

	// Values from POST

	$firstname = trim(ucfirst($_POST['fn'])); 
	$middlename = trim(ucfirst($_POST['mn'])); 
	$lastname = trim(ucfirst($_POST['ln'])); 
	$age = $_POST['age']; 
	$gender = trim(ucfirst($_POST['gen'])); 
	$contactno = trim($_POST['cn']); 
	$emailid = trim($_POST['email']); 
	$address = trim(ucwords($_POST['add'])); 

	// echo $id." ".$firstname." ".$middlename." ".$lastname." ".$age." ".$gender." ".$contactno." ".$emailid." ".$address;

	$insert_sql = "INSERT INTO student_record_data VALUES ('$id','$firstname','$middlename','$lastname','$age',
				  '$gender','$contactno','$emailid','$address')";

	$req = mysqli_query($conn,$insert_sql);
	if($req)
		echo "Success";
	else
		echo "Fail";
?>
