
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <title>Student Record Management System Login Panel</title>

    <style type="text/css">
		    	
		* {
		    margin: 0;
		    padding: 0;
		    box-sizing: border-box;
		    font-family: 'Montserrat', sans-serif;
		    color: #303433;
		}

		body {
		    min-height: 100vh;
		    width: 100%;
		    display: grid;
		    grid-template-columns: 1fr 1fr;
		}

		section {
		    display: flex;
		    justify-content: center;
		    align-items: center;
		}

		section.side {
		    background: url(images/bk.png) no-repeat;
		    background-size: 100% 102%;
		}

		.side img {
		    width: 50%;
		    max-width: 50%;
		}

		.forms-container 
		{
		  position: absolute;
		  width: 100%;
		  height: 100%;
		  top: 0;
		  left: 0;
		}

		.signin-signup 
		{
		  position: absolute;
		  top: 45%;
		  transform: translate(-76%,-65%);
		  left: 75%;
		  width: 50%;
		  display: grid;
		  grid-template-columns: 1fr;
		  z-index: 1;
		}

		form 
		{
		  display: flex;
		  align-items: center;
		  justify-content: center;
		  flex-direction: column;
		  grid-column: 1 / 2;
		  grid-row: 1 / 2;
		  padding: 0 5rem;
		  overflow: hidden;
		}

		.title 
		{
		  font-size: 3rem;
		  font-family: sans-serif;
		  color:black;
		  margin-bottom: 10px;
		  font-weight: bolder;
		}

		.input_field 
		{	
		  max-width: 380px;
		  width: 100%;
		  height: 50px;
		  background-color: #f0f0f0;
		  margin: 12.5px 0;
		  border-radius: 55px;
		  display: grid;
		  grid-template-columns: 15% 85%;
		}

		.input_field i 
		{
		  text-align: center;
		  line-height: 50px;
		  color: grey;
		  font-size: 20px;
		}

		.input_field input 
		{
		  background: none;
		  outline: none;
		  border: none;
		  line-height: 1;
		  font-weight: bolder;
		  color:black;
		  font-size: 18px;
		}

		.input_field input::placeholder 
		{
		  color:black;
		  font-weight: normal;
		}

		.button 
		{
		  width: 150px;
		  height: 50px;
		  border: none;
		  outline: none;
		  border-radius: 50px;
		  cursor: pointer;
		  background-color: steelblue;
		  text-decoration: none;
		  padding: 5px 12px;
		  color: snow;
		  letter-spacing: 3px;
		  font-size: 20px;
		  text-transform: uppercase;
		  font-weight : bolder;
		  margin: 20px 0;
		  margin-top:40px;
		  transition: 0.5s;
		}

		.button:hover
		{
		  text-decoration: none;
		  background-color: steelblue;
		}

    </style>

</head>
<body>

    <section class="side">
        <img src="images/img.svg" alt="">
    </section>

    <section class="main">
        <div class="forms-container">
        	<h3 style="font-family: sans-serif; font-size: 52px; letter-spacing: 2px; color: steelblue; 
        			   padding-top: 30px; text-align: center; font-weight: bold;">
        		STUDENT RECORD SYSTEM LOGIN PANEL
        	</h3>
            <div class="signin-signup">
                <form class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                        <div class="input_field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Username" id="loginUser">
                        </div>
                        <div class="input_field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" id="loginPass">
                        </div><br>
                        <button type="button" id="loginBtn" class="button solid">
                           	Login
                        </button>                                                    
                </form>
            </div>
        </div>
    </section>

    <script type="text/javascript">
    	
    	$(document).ready(function(){

    		$('#loginBtn').click(function(){    			

    			var username = $('#loginUser').val();
    			var password = $('#loginPass').val();

    			if(username == 'admin' && password == 'student_record_system')
    			{
    				location.href="admin_panel.php";
    			}

    			else
    			{
    				if(username !='' && password !='')
    					alert("Input Login Credentials are invalid!");

    				else if(username == '' && password == '')
    					alert("Check Login Credentials!");

    				else if(username == '')
    					alert("Check Username Credential!");
    				
    				else if(password == '')
    					alert("Check Password Credential!");
    			}
    		});

    	});

    </script>
    
</body>
</html>