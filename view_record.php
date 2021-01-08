<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

         <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/style.css" />

        <title>View Data</title>
        <style type="text/css">

        </style>
</head>
<body>

<?php require_once('header.php'); ?>
<div class="container-fluid" style="height: 800px;">

	<div class="row" style="background: #EEE7FF;">
			<div class="col">
				<h4 class="mb-0" style="margin-left:240px; padding: 13px; font-size: 22px; letter-spacing: 1.5px; word-spacing: 2px;">
					View Student Record
				</h4>
			</div>
	</div>

	<div class="row mt-5">
		<div class="col-1"></div>
		<div class="col-10">
			 <table class="table table-bordered table-hover">
			    <thead class="sticky-top" style="background: steelblue; color: snow;">
			      <tr class="text-center" style="font-size: 18px; letter-spacing: 1.5px;">
			        <th>ID</th>
			        <th>First Name</th>
			        <th>Middle Name</th>
			        <th>Last Name</th>
			        <th>Age</th>
			        <th>Gender</th>
			        <th>Contact No</th>
			        <th>Email Id</th>
			        <th>Address</th>
			        <th>Action</th>
			      </tr>
			    </thead>
			    <tbody class="bg-light text-dark">
			    	<?php  
						$conn = mysqli_connect("localhost","root",'',"student_record_management_system");

						$sql = "SELECT * FROM student_record_data";
						$res = mysqli_query($conn,$sql);

						if(mysqli_num_rows($res) > 0)
						{
				    		while($row = mysqli_fetch_assoc($res))
				    		{
			    	?>
			      <tr>
			        <td>
			        	<span id="stu_id<?php echo $row['ID']; ?>"><?php echo $row['ID']; ?></span>
			        </td>
			        <td>
			        	<span id="stu_firstName<?php echo $row['ID'];?>"><?php echo $row['First_Name'];?></span>
			        </td>
			        <td>
			        	<span id="stu_middleName<?php echo $row['ID'];?>"><?php echo $row['Middle_Name']; ?></span>
		        	</td>
			        <td>
			        	<span id="stu_lastName<?php echo $row['ID'];?>"><?php echo $row['Last_Name']; ?></span>
			        </td>
			        <td>
			        	<span id="stu_age<?php echo $row['ID'];?>"><?php echo $row['Age']; ?></span>
			        </td>
			        <td>
			        	<span id="stu_gender<?php echo $row['ID'];?>"><?php echo $row['Gender']; ?></span>
			        </td>
			        <td>
			        	<span id="stu_contactNo<?php echo $row['ID'];?>"><?php echo $row['Contact_No']; ?></span>
			        </td>
			        <td>
			        	<span id="stu_emailId<?php echo $row['ID'];?>"><?php echo $row['Email_Id']; ?></span>
			        </td>
			        <td id="stu_address<?php echo $row['ID'];?>" style="width: 200px;">
			        	<?php echo $row['Address']; ?>
			        </td>
			        <td>&nbsp;
			        	<button class="btn btn-info updateBtn" data-toggle="modal" data-target="#updateModal" 
			        			value="<?php echo $row['ID']; ?>">
			        		Update
			        	</button>&nbsp;&nbsp;&nbsp;&nbsp;
			        	<button class="btn btn-danger" id="deleteData" value="<?php echo $row['ID']; ?>">
			        		Delete
			        	</button>
			        </td>
			      </tr>
			       <?php } ?>
			    </tbody>
			  </table>

			  <!-- Update Modal -->
				<div class="modal fade " id="updateModal">
				  <div class="modal-dialog modal-dialog-centered">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title" style="font-family: sans-serif; color: brown">Update Record</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body" style="font-size:30px;">

				      	<!-- ID -->
				      	<h5 style="font-size: 16px; color: black; padding-bottom: 6px; letter-spacing: 1.5px;">
				      		Student ID :- <span id="studentId"></span>
				      	</h5>
				        
				      	<!-- First Name -->
				      	<div class="form-group">
						    <input type="text" class="form-control" id="stufirstname" placeholder="First Name">
					    </div>
					    <!-- Middle Name -->
					    <div class="form-group">
						    <input type="text" class="form-control" id="stumiddlename" placeholder="Middle Name">
					    </div>
					    <!-- Last Name -->
					    <div class="form-group">
						    <input type="text" class="form-control" id="stulastname" placeholder="Last Name">
					    </div>
					    <!-- Age -->
					    <div class="form-group">
						    <input type="number" class="form-control" id="stuage" placeholder="Age">						   
					    </div>
					    <!-- Gender -->
					    <div class="form-group" style="color: grey; font-size: 18px;">						    
						    <div class="form-check-inline pr3">
								  <label class="form-check-label">
								    <input type="radio" class="form-check-input" id="genMale" value="male" name="gender">&nbsp;Male
								  </label>
							</div>
							<div class="form-check-inline">
								  <label class="form-check-label">
								    <input type="radio" class="form-check-input" id="genFemale" value="female" name="gender">&nbsp;Female
								  </label>
							</div>
					    </div>
					    <!-- Contact No -->
					    <div class="form-group">
						    <input type="text" class="form-control" id="stucontactno" placeholder="Contact No">
					    </div>
					    <!-- Email ID -->
					    <div class="form-group">
						    <input type="text" class="form-control" id="stuemailid" placeholder="Email Id">
					    </div>
					    <!-- Address -->
					    <div class="form-group">
					    	<input type="text" class="form-control" id="stuaddress" placeholder="Address">
					    </div>
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer justify-content-center" 
				      	   style="font-size: 18px; letter-spacing: 1.5px;">
				           <input type="submit" class="btn btn-success" id="updateData" data-dismiss="modal" 
				           value="Update Record">
				      </div>

				    </div>
				  </div>
				</div>

				<!-- Delete Modal -->
				<div class="modal fade ">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Record Deleted</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>
				    </div>
				  </div>
				</div>

		</div>
	<?php } ?><div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
		<div class="col-1"></div>
	</div>
</div>

<script type="text/javascript">

	$(document).ready(function(){

		$(document).on('click','#deleteData',function(){

			var id = $(this).val();
			var studentId = $('#stu_id'+id).text();

			$.ajax({

				url: 'delete_record.php',
				method: 'POST',
				data : {sid:studentId},
				success : function(data)
				{
					if(data==1)
						alert("Record Deleted");

					else
						alert("Record can't be Deleted");
				}

			});
		});


		$(document).on('click','.updateBtn',function(){

			var id = $(this).val();
			var studentId = $('#stu_id'+id).text();
			var firstname =$('#stu_firstName'+id).text();
			var middlename = $('#stu_middleName'+id).text();
			var lastname = $('#stu_lastName'+id).text();
			var age = $('#stu_age'+id).text();
			var gender = $('#stu_gender'+id).text();
			var contactno = $('#stu_contactNo'+id).text();
			var emailid = $('#stu_emailId'+id).text();
			var address = $('#stu_address'+id).text();

			// console.log(firstname);
			// console.log(middlename);
			// console.log(lastname);
			// console.log(age);
			// console.log(gender);
			// console.log(contactno);
			// console.log(emailid);
			// console.log(address);

			$('#studentId').html(studentId);
			$('#stufirstname').val(firstname.trim());
			$('#stumiddlename').val(middlename.trim());
			$('#stulastname').val(lastname.trim());
			$('#stuage').val(age);
			$('#stucontactno').val(contactno.trim());
			$('#stuemailid').val(emailid.trim());
			$('#stuaddress').val(address.trim());

			if(gender=='male' || gender=='Male')
			{
				 document.getElementById("genMale").checked = true;  
			}

			else if(gender=='female' || gender=='Female')
			{
				document.getElementById("genFemale").checked = true;  
			}


		});

		$("#updateData").click(function(){
			
			var stuid = $("#studentId").text();
			var firstname = ($("#stufirstname").val()).trim();
			var middlename = ($("#stumiddlename").val()).trim();
			var lastname = ($("#stulastname").val()).trim();
			var stuage = $("#stuage").val();
			var gender = $("input[name='gender']:checked").val();
			var contactno = ($("#stucontactno").val()).trim();
			var emailid = ($("#stuemailid").val()).trim();
			var address = ($("#stuaddress").val()).trim();

			// alert(stuid+firstname+middlename+lastname+stuage+gender+contactno+emailid+address);

			$.ajax({

				url: 'update_data.php',
				method: 'POST',
				data : {id:stuid,fn:firstname,mn:middlename,ln:lastname,age:stuage,gen:gender,cn:contactno,email:emailid,add:address},
				success : function(data)
				{
					alert("Record Updated Successfully");
				}

			});
		});

	});

</script>

</body>
</html>