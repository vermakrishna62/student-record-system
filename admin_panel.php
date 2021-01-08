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

        <title>Student Record Management System Admin Panel</title>
</head>
<body>

<?php require_once('header.php'); ?>
<div class="container-fluid" style="background: #EEE7FF;">
	<div class="row px-5 py-4">
		<div class="col">
			<div id="demo" class="carousel slide" data-ride="carousel">

				<!-- Indicators -->
				<ul class="carousel-indicators">
			  	  <li data-target="#demo" data-slide-to="0" class="active"></li>
				  <li data-target="#demo" data-slide-to="1"></li>
				  <li data-target="#demo" data-slide-to="2"></li>
				</ul>

				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
				    	<img src="images/image4.png" style="width: 100%; height: 785px;">
				    </div>
				    <div class="carousel-item">
				    	<img src="images/image4.jpg" style="width: 100%; height: 785px;">
				    </div>
				    <div class="carousel-item">
				    	<img src="images/image5.jpg" style="width: 100%; height: 785px;">
				    </div>
				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
				    <span><i class="fa fa-chevron-left text-dark font-weight-bolder" style="font-size: 45px;" aria-hidden="true"></i></span>
				 </a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
				    <span><i class="fa fa-chevron-right text-dark font-weight-bolder" style="font-size: 45px;" aria-hidden="true"></i></span>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg-dark text-light" style="height: 46px;">
	<p style="font-size: 21px; text-align:center; padding: 9px 0px;">
		<i class="fas fa-copyright"></i>
		2020 Copyright : All rights reserved by Batch CM3 Students 18CM058-63.
	</p>
</div>

<script type="text/javascript">
	
	$(document).ready(function(){

		$("#logout").click(function(){
			var val = confirm("Do you want to Logout from System?");

			if(val==true)
			{				
				alert("Logged Out Successfully");
				location.href="https://student-record-management-sys.herokuapp.com/";
			}

		});

	});

</script>

</body>
</html>
