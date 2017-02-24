<?php
session_start();

if(!empty($_SESSION['user_id'])){
	header('location:index.php');
}

$conn=new MySQLi("localhost","root","","xenella");

	if (isset($_POST['send_message'])){
	   
	   $email = $_POST['email'];
	   $name = $_POST['name'];
	   $phone = $_POST['phone'];
	   $message = $_POST['message']; 
	   
	   $addingvalues = "INSERT INTO contact_us VALUES('','$name','$email','$phone','$message',now())"; 
	   $r= $conn->query($addingvalues); 

	   header("Location:index.php");
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us | Xenella</title>

	<link rel="icon" href="assets/img/logo.png" type="image/png" sizes="16x16">



	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<link rel="stylesheet" href="http://bookanix.com/Academic_and_professional/fonts/berkshire.css" />
	<link rel="stylesheet" href="http://bookanix.com/Academic_and_professional/fonts/Laila.css" />

<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
    <link href="assets/css/contact-us.css" rel="stylesheet"/>


</head>
<body class="contact-us-page">

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
					<a href="#" data-toggle="modal" data-target="#myModal">
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

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28021.527456470518!2d77.21539525546217!3d28.609047375310798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x717971125923e5d!2sIndia+Gate!5e0!3m2!1sen!2sin!4v1487727854973" width="100%" height="450"></iframe>

		<div class="main main-raised">
			<div class="container" style="padding-bottom:40px">
				<div class="row" style="margin-top:30px">
					<div class="col-md-5">
						<h3>Send us a message</h3>
						<div class="row">
							<div class="col-md-12">
								<form role="form" id="contact-form" method="post" action="contact-us.php">
									<div class="form-group label-floating">
										<label class="control-label">Your name</label>
										<input type="text" name="name" class="form-control" required>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Email address</label>
										<input type="email" name="email" class="form-control" required/>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Phone</label>
										<input type="text" name="phone" class="form-control" required/>
									</div>
									<div class="form-group label-floating">
										<label class="control-label">Your message</label>
										<textarea name="message" class="form-control" id="message" rows="6" required></textarea>
									</div>
									<div class="submit text-center">
										<button class="btn btn-primary" name="send_message">CONTACT US</button>
									</div>
								</form>
							</div>
						</div>	
					</div>
					
					<div class="col-md-5 col-md-offset-2">
						<div class="office">
							<div class="info info-horizontal">
								<div class="icon icon-primary">
									<i class="material-icons">pin_drop</i>
								</div>
								<div class="description">
									<h4 class="info-title">Office Address</h4>
									<p>
									C-91, VANDANA VIHAR <br/>
									WEST DELHI, <BR/>
									DELHI - 110041.
									</p>
								</div>
							</div>
						</div>
						<div class="contact-number">
							<div class="info info-horizontal">
								<div class="icon icon-primary">
									<i class="material-icons">phone</i>
								</div>
								<div class="description">
									<h4 class="info-title">Contact Number</h4>
									<p>
									+91 9958029883<br/>
									+91 8374936088
									</p>
								</div>
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
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="cursor:pointer">&times;</button>
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