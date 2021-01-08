<?php  

	// student_record_management_system database connection

	$conn = mysqli_connect("localhost","root",'',"student_record_management_system");

	$id = $_POST['sid']; 

	$sql = "DELETE from student_record_data WHERE ID='$id'";
	$res = mysqli_query($conn,$sql);
	
	if($res)
		echo 1;
?>