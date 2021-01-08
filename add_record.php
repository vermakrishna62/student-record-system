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

        <title>Insert Data</title>
</head>
<body>

<?php require_once('header.php'); ?>
<div class="container-fluid ">

	<div class="row" style="background: #EEE7FF;">
			<div class="col">
				<h4 class="mb-0" style="margin-left:240px; padding: 13px; font-size: 22px; letter-spacing: 1.5px; word-spacing: 2px;">
					Add Student Record
				</h4>
			</div>
	</div>

	<!-- <div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-4">
						First Name
					</div>

					<div class="col-7">
						<div class="form-group">
						    <input type="text" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						Middle Name
					</div>

					<div class="col-7">
						<div class="form-group">
						    <input type="text" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						Last Name
					</div>

					<div class="col-7">
						<div class="form-group">
						    <input type="text" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						Student Age
					</div>

					<div class="col-7">
						<div class="form-group">
						    <input type="text" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						Contact No
					</div>

					<div class="col-7">
						<div class="form-group">
						    <input type="text" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						Email Id
					</div>

					<div class="col-7">
						<div class="form-group">
						    <input type="text" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						Address
					</div>

					<div class="col-7">
						<div class="form-group">
						    <textarea class="form-control" rows="5"></textarea>
						</div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-3"></div>
					<div class="col-">
						<button type="button" class="btn btn-outline-info btn-lg" 
								style="font-size: 19px; letter-spacing:2px; font-family: sans-serif;">
							Success
						</button>
					</div>
				</div>
			</div> -->

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-7">
			<div class="container-fluid" style="border-bottom: 0.6px solid #EEE7FF;">
				<div class="row my-5">
					<div class="col-md-6" style="font-size: 19.5px;color:steelblue;font-family:sans-serif; letter-spacing: 1.5px;">
						Student Personal Details
					</div>
				</div>
				<div class="row my-2">
					<div class="col-md-1"></div>
					<div class="col-md-3">
						First Name
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">
						    <input type="text" class="form-control" id="firstName" placeholder="First Name">
					    </div>
					</div>
				</div>
				<div class="row my-2">
					<div class="col-md-1"></div>
					<div class="col-md-3">
						Middle Name
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">
						    <input type="text" class="form-control" id="middleName" placeholder="Middle Name">
					    </div>
					</div>
				</div>
				<div class="row my-2">
					<div class="col-md-1"></div>
					<div class="col-md-3">
						Last Name
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">
						    <input type="text" class="form-control" id="lastName" placeholder="Last Name">
					    </div>
					</div>
				</div>
				<div class="row my-2">
					<div class="col-md-1"></div>
					<div class="col-md-3">
						Student Age
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">
						    <input type="number" class="form-control" id="stuAge" placeholder="Age">  
					    </div>
					</div>
				</div>
				<div class="row my-2">
					<div class="col-md-1"></div>
					<div class="col-md-3">
						Gender
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">						    
						    <div class="form-check-inline pr-5">
								  <label class="form-check-label">
								    <input type="radio" class="form-check-input" value="male" name="gender">Male
								  </label>
							</div>
							<div class="form-check-inline">
								  <label class="form-check-label">
								    <input type="radio" class="form-check-input" value="female" name="gender">Female
								  </label>
							</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-7">
			<div class="container-fluid" style="border-bottom: 0.6px solid #EEE7FF;">
				<div class="row my-5">
					<div class="col-md-6" style="font-size: 19.5px;color:steelblue;font-family:sans-serif; letter-spacing: 1.5px;">
						Student Contact Details
					</div>
				</div>
				<div class="row my-2">
					<div class="col-md-1"></div>
					<div class="col-md-3">
						Contact No
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">
						    <input type="text" class="form-control" id="contactNo" placeholder="Contact No">
					    </div>
					</div>
				</div>
				<div class="row my-2">
					<div class="col-1"></div>
					<div class="col-md-3">
						Email Id
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">
						    <input type="text" class="form-control" id="emailId" placeholder="Email Id">
					    </div>
					</div>
				</div>
				<div class="row my-2">
					<div class="col-md-1"></div>
					<div class="col-3">
						Address
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">
						    <textarea class="form-control" rows="5" id="address" placeholder="Address"></textarea>
					    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-2"></div>
	</div>

	<div class="row my-5">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<button type="button" class="btn btn-outline-info btn-lg" id="saveBtn"
					style="font-size: 19px; letter-spacing:2px; font-family: sans-serif;">
				Save Record
			</button>
		</div>
	</div>
</div>

<script type="text/javascript">

	$(document).ready(function(){

		$('#saveBtn').click(function(){
			
			var firstname = ($("#firstName").val()).trim();
			var middlename = ($("#middleName").val()).trim();
			var lastname = ($("#lastName").val()).trim();
			var stuage = $("#stuAge").val();
			var gender = $("input[name='gender']:checked").val();
			var contactno = ($("#contactNo").val()).trim();
			var emailid = ($("#emailId").val()).trim();
			var address = ($("#address").val()).trim();

			// alert(firstname+middlename+lastname+stuage+gender+contactno+emailid+address);

			$.ajax({

				url: 'insert_data.php',
				method: 'POST',
				data : {fn:firstname,mn:middlename,ln:lastname,age:stuage,gen:gender,cn:contactno,email:emailid,
						add:address},
				success : function(data)
				{
					alert("Record Saved Successfully");
				}

			});
		});

	});

</script>

</body>
</html>