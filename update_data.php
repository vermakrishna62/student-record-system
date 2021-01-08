<?php  

	// student_record_management_system database connection

	$conn = mysqli_connect("remotemysql.com","Yo8XLI7jJz","NjkyqMR4cj","Yo8XLI7jJz");

	$sql = "SELECT * from student_record_data";
	$res = mysqli_query($conn,$sql);

	// Values from POST

	$id = $_POST['id']; 
	$firstname = trim(ucfirst($_POST['fn'])); 
	$middlename = trim(ucfirst($_POST['mn'])); 
	$lastname = trim(ucfirst($_POST['ln'])); 
	$age = (int)$_POST['age']; 
	$gender = trim(ucfirst($_POST['gen'])); 
	$contactno = trim($_POST['cn']); 
	$emailid = trim($_POST['email']); 
	$address = trim(ucwords($_POST['add'])); 

	// echo $id." ".$firstname." ".$middlename." ".$lastname." ".$age." ".$gender." ".$contactno." ".$emailid." ".$address;

	$insert_sql = "UPDATE student_record_data SET First_Name='$firstname',Middle_Name='$middlename',
				   Last_Name='$lastname',Age='$age',Gender='$gender',Contact_No='$contactno',
				   Email_Id='$emailid',Address='$address' WHERE ID='$id'";

	$req = mysqli_query($conn,$insert_sql);
	if($req)
	 	echo "Success";
	else
	 	echo "Fail";
?>
