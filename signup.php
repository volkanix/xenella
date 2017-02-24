<?php
session_start();

if(!empty($_SESSION['user_id'])){
	header('location:index.php');
}

	if (isset($_POST['join'])) {

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$cnf_password = $_POST['cnf_password'];

		if( $password == $cnf_password ){
			
			$checking_email_exists = "SELECT email FROM users WHERE email='$email'";
			$checked_email_exists = $conn->query($checking_email_exists);

			if($checked_email_exists->num_rows > 0) {
				echo "<script>alert('EMAIL ALREADY EXISTS');</script>";
			}
			else{	
					$password_encrypt = md5($password);			
					
					$select_last_id = "SELECT id FROM users ORDER BY id DESC";
						$selected_id = $conn->query($select_last_id);
						$extract_id = $selected_id->fetch_assoc();
						$id = $extract_id['id'];

						$id_new = $id + 1;

						$user_id = "8".$id_new."11".$id_new."1993".$id_new;

					$adding_user = "INSERT INTO users VALUES ('','$user_id','$email','$first_name','$last_name','$phone','$password_encrypt',now())";
					$added_user = $conn->query($adding_user);

					if($added_user){
						$_SESSION['user_id'] = $user_id;
						header("location:myworld.php");
					}			
			}
		}else{
			echo "<script>alert('WRONG EMAIL PASSWORD COMBINATION');</script>";
		}
		

	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up | Xenella</title>

	<link rel="icon" href="assets/img/logo.png" type="image/png" sizes="16x16">

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<link rel="stylesheet" href="http://bookanix.com/Academic_and_professional/fonts/berkshire.css" />
	<link rel="stylesheet" href="http://bookanix.com/Academic_and_professional/fonts/Laila.css" />

<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
    <link href="assets/css/signup.css" rel="stylesheet"/>


</head>

<body class="signup-page">

<!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="index.php">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="assets/img/logo.png" alt="Xenella">
	                </div>
	                <div class="brand">
	                    Xenella
	                </div>
				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="index.php">
						<i class="material-icons">home</i> Home
					</a>
				</li>
				<li>
					<a href="contact-us.php">
						<i class="material-icons">contact_mail</i> Contact
					</a>
				</li>
				<li>
					<a href="#signin" data-toggle="modal" data-target="#myModal">
						<i class="material-icons">fingerprint</i> Sign In
					</a>
				</li>
				<li>
					<a href="signup.php">
						<i class="material-icons">person_add</i> Sign Up
					</a>
				</li>
				
	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
	<!-- Area for header image and brand name written -->
	<div class="header header-filter" style="background-image: url('assets/img/bg-2.jpg');">
	</div>
	<!-- End for header image and brand name written -->

	<div class="main main-raised">
		<div class="container">
			<div class="row" style="box-shadow:0px 1px 0px 0px #f0f0f0">
				<div class="col-md-10 col-md-offset-1">
					<h2>Register</h1>
				</div>
			</div>
			<div class="row" style="margin-top:30px;margin-bottom:30px">
				<div class="col-md-5">
					<div class="social text-center">
                        <button class="btn btn-just-icon btn-round btn-twitter" style="background-color:#55acee">
                            <i class="fa fa-twitter"></i>
                        </button>
                        <button class="btn btn-just-icon btn-round btn-dribbble" style="background-color:#ea4c89">
                            <i class="fa fa-dribbble"></i>
                        </button>
                        <button class="btn btn-just-icon btn-round btn-facebook" style="background-color:#3b5998">
                            <i class="fa fa-facebook"> </i>
                        </button>
                            <h4 style="font-size:15px;"> Or be classical </h4>
                    </div>
					<form role="form" id="contact-form" method="post" action="signup.php">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group label-floating">
									<label class="control-label">FIRST NAME</label>
									<input type="text" name="first_name" class="form-control" required />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group label-floating">
									<label class="control-label">LAST NAME</label>
									<input type="text" name="last_name" class="form-control" required />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group label-floating">
									<label class="control-label">EMAIL</label>
									<input type="email" name="email" class="form-control" required />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">	
								<div class="form-group label-floating">
									<label class="control-label">PHONE</label>
									<input type="text" name="phone" class="form-control" required />
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-md-6">	
								<div class="form-group label-floating">
									<label class="control-label">PASSWORD</label>
									<input type="password" name="password" class="form-control" required />
								</div>
							</div>
							<div class="col-md-6">	
								<div class="form-group label-floating">
									<label class="control-label">CONFIRM PASSWORD</label>
									<input type="password" name="cnf_password" class="form-control" required />
								</div>
							</div>	
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="optionsCheckboxes" checked required>
									I agree to the <a href="#something">terms and conditions</a>.
							</label>
						</div>
						<div class="row" style="margin-top:20px">	
							<div class="col-md-12">
								<div class="submit text-center">
									<button class="btn btn-success" name="join">JOIN XENELLA</button>
								</div>
							</div>	
						</div>
					</form>
				</div>
						
				<div class="col-md-5 col-md-offset-2">
					<div class="info info-horizontal">
            			<div class="icon icon-rose">
            				<i class="material-icons">verified_user</i>
            			</div>
            			<div class="description">
            				<h4 class="info-title">Verified User</h4>
            				<p class="description">
            					Connect with verified users.
            				</p>
            			</div>
            		</div>	
            		<div class="info info-horizontal" style="margin-top:-60px">
            			<div class="icon icon-info">
            				<i class="material-icons">group</i>
            			</div>
            			<div class="description">
            				<h4 class="info-title">Active Social Groups</h4>
            				<p class="description">
            					Join intersting groups.
            				</p>
            			</div>
            		</div>
            		<div class="info info-horizontal" style="margin-top:-60px">
            			<div class="icon icon-primary">
            				<i class="material-icons">chat</i>
            			</div>
            			<div class="description">
            				<h4 class="info-title">Unlimited Chat</h4>
            				<p class="description">
            					Chat with your friends, family and collegues. 
            				</p>
            			</div>
            		</div>
				</div>	
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<nav class="pull-left">
				<ul>
					<li><a href="index.php"> XANELLA</a></li>
					<li><a href="contact-us.php">CONTACT US</a></li>
					<li><a href="#signin" data-toggle="modal" data-target="#myModal">SIGN IN</a></li>
					<li><a href="signup.php">SIGN UP</a></li>
				</ul>
			</nav>
			<div class="copyright pull-right">
			Copyright 2017 &copy xenella.com
			</div>
		</div>
	</footer>
</div>

<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Xenella Sign In</h4>
      </div>
      	<form role="form" id="contact-form" method="post">
      		
      		<div class="alert alert-danger" style="margin-top:30px;display:none">
	    		<div class="container-fluid">
				  	<div class="alert-icon">
						<i class="material-icons">error_outline</i>
					</div>
					
					<b>WRONG EMAIL PASSWORD COMBINATION...</b>
				</div>
			</div>
      		
      		<div class="modal-body" style="margin-top:-20px;">
	        	<div class="row">
					<div class="col-md-12">
						<div class="form-group label-floating">
							<label class="control-label">Email</label>
							<input type="email" name="email" class="form-control" id="email" required />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">	
						<div class="form-group label-floating">
							<label class="control-label">Password</label>
							<input type="password" name="password" class="form-control" id="password" required />
						</div>
					</div>			
     			</div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-info btn-simple" onclick="submit_signin()">SIGN IN</button>
		    </div>
    	</form>
    </div>
  </div>
</div>


</body>
	
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js" type="text/javascript"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

	
<script type="text/javascript">
	
	function submit_signin(){

	  var email = document.getElementById("email").value;
	  var password = document.getElementById("password").value;

	  if((email=='')||(password==''))
	  {   
	      if(email==''){
	      $('#email').focus(); 
	      }
	      else if(password==''){
	      $('#password').focus(); 
	      }
	      exit();
	  }
	  
	  var xmlhttp;
	    if(window.XMLHttpRequest)
	    { //code for IE7+, firefox, chrome, opera,safari
	      xmlhttp = new XMLHttpRequest();
	    }else{
	      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	    }
	      var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function(){
	     if(xmlhttp.readyState==4 && xmlhttp.status==200){
	      var check = xmlhttp.responseText;
	        if (check=="not_found"){
	         $('.alert').css('display','block'); 
	        }else if (check=="allow"){
	         window.location = 'index.php';   
	        }
	     }
	    }
	  xmlhttp.open('GET','helpers/forsignin.php?email='+email+'&password='+password,true);
	  xmlhttp.send(); 

	}

</script>


</html>
