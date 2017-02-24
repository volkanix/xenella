<?php
session_start();

$conn=new MySQLi("localhost","root","","xenella");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home | Xenella</title>

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
    <link href="assets/css/home.css" rel="stylesheet"/>


</head>
<body class="index-page">

<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
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
				<?php 
				
					if(empty($_SESSION['user_id'])){ 
				
				?>
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
				
				<?php } else { 

						$user_id = $_SESSION['user_id'];	
						
						$query_select_name = "SELECT * FROM users WHERE user_id='$user_id'";
						$newresult_name = $conn->query($query_select_name);
						$row_name = $newresult_name->fetch_assoc();
						$first_name = $row_name['first_name'];
						$last_name = $row_name['last_name'];
					
					?>
	    			
	    			<li>
			          <a href="myworld.php">
			            <i class="material-icons">donut_small</i> My World
			          </a>
			        </li>
			        <li>
			          <a href="#" class="btn btn-simple dropdown-toggle" data-toggle="dropdown" style="color:white">
			            <i class="material-icons">face</i> <?php echo $first_name.' '.$last_name; ?>
			            &nbsp&nbsp<b class="caret"></b>
			          </a>
			          <ul class="dropdown-menu" style="margin-right:20px">
			            <li><a href="#"><i class="material-icons">account_circle</i> &nbspView Profile</a></li>
			            <li><a href="#"><i class="material-icons">mode_edit</i> &nbspMy Contents</a></li>
			            <li><a href="#"><i class="material-icons">trending_up</i> &nbspMy Opinions</a></li>
			            <li class="divider"></li>
			            <li><a href="#"><i class="material-icons" style="margin-top:-3px">lock</i> &nbspPrivacy Policies</a></li>
			            <li><a href="#"><i class="material-icons"">warning</i> &nbspTerms Of Use</a></li>
			            <li class="divider"></li>
			            <li><a href="#"><i class="material-icons"">settings</i> &nbspSettings</a></li>
			            <li><a href="signout.php"><i class="material-icons">power_settings_new</i> &nbspSign Out</a></li>
			          </ul>
			        </li>
	    		
	    		<?php } ?>
	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">

	<!-- Area for header image and brand name written -->
	<div class="header header-filter" style="background-image: url('assets/img/bg-1.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h1>Xenella</h1>
						<h3>Come for what you love<br/>Stay for what you discover</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End for header image and brand name written -->

	<!-- Starts White color raised area -->
	<div class="main main-raised">
		
		<!-- Featured collection Area -->	
		
		<div class="section-featured">
			<div class="row">
				<div class="col-lg-12">
					<div class="title" style="box-shadow:0px 1px 0px 0px #f0f0f0">
						<h3>Featured Collections</h3>
					</div>
					<div class="row" style="margin-top:100px">							
						<div class="col-md-4 slideanim">
							<div class="card">
								<div class="card-image">
									<a href="#"><img src="assets/img/featured/card-3.jpg" width="100%" height="100%" /></a>	
								</div>
								<div class="card-title">
									<h4>Space And Time</h4>
								</div>
								<div class="card-description">
									<p>
										In physics, spacetime is any mathematical model that combines space and time into a single interwoven continuum. Since 300 BCE, the spacetime of our universe has historically been interpreted from a Euclidean space perspective, which regards space as consisting of three dimensions...<br/><br/>   
									</p>
								</div>
								<div class="card-footer">
									<div class='location pull-right'>
										<p class="category">
											<i class="material-icons">place</i><br/>Delhi, India
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 slideanim">
							<div class="card second">
								<div class="card-image">
									<a href="#"><img src="assets/img/featured/card-2.jpg" width="100%" height="100%" /></a>	
								</div>
								<div class="card-title">
									<h4>Aquatic Habitates</h4>
								</div>
								<div class="card-description">
									<p>
										Marine ecosystems cover approximately 71% of the Earth's surface and contain approximately 97% of the planet's water. They generate 32% of the world's net primary production. They are distinguished from freshwater ecosystems by the presence of dissolved compounds....<br/><br/>   
									</p>
								</div>
								<div class="card-footer">
									<div class='location pull-right'>
										<p class="category">
											<i class="material-icons">place</i><br/>Mumbai, India
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 slideanim">
							<div class="card third">
								<div class="card-image">
									<a href="#"><img src="assets/img/featured/card-1.jpg" width="100%" height="100%" /></a>	
								</div>
								<div class="card-title">
									<h4>String Theory</h4>
								</div>
								<div class="card-description">
									<p>
										In physics, string theory is a theoretical framework in which the point-like particles of particle physics are replaced by one-dimensional objects called strings. It describes how these strings propagate through space and interact with each other. On distance scales larger than the string scale...<br/><br/>   
									</p>
								</div>
								<div class="card-footer">
									<div class='location pull-right'>
										<p class="category">
											<i class="material-icons">place</i><br/>Bengaluru, India
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row" style="margin-top:100px">	

						<div class="col-md-4 slideanim">
							<div class="card">
								<div class="card-image">
									<a href="#"><img src="assets/img/featured/card-5.jpg" width="100%" height="100%" /></a>	
								</div>
								<div class="card-title">
									<h4>Technical Power</h4>
								</div>
								<div class="card-description">
									<p>
										The principles of technical power are derived from hundreds of years of financial market data. Some aspects of technical analysis began to appear in Joseph de la Vega's accounts of the Dutch markets in the 17th century and the avaliablity of the concept is consider as remarkable...<br/><br/>   
									</p>
								</div>
								<div class="card-footer">
									<div class='location pull-right'>
										<p class="category">
											<i class="material-icons">place</i><br/>Delhi, India
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 slideanim">
							<div class="card second">
								<div class="card-image">
									<a href="#"><img src="assets/img/featured/card-6.jpg" width="100%" height="100%" /></a>	
								</div>
								<div class="card-title">
									<h4>Nature</h4>
								</div>
								<div class="card-description">
									<p>
										Nature, in the broadest sense, is the natural, physical, or material world or universe. "Nature" can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large part of science. Although humans are part of nature and wisdom of the creatures and its habitate....<br/><br/>   
									</p>
								</div>
								<div class="card-footer">
									<div class='location pull-right'>
										<p class="category">
											<i class="material-icons">place</i><br/>Hyderabad, India
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 slideanim">
							<div class="card third">
								<div class="card-image">
									<a href="#"><img src="assets/img/featured/card-7.jpg" width="100%" height="100%" /></a>	
								</div>
								<div class="card-title">
									<h4>Ocean Of Games</h4>
								</div>
								<div class="card-description">
									<p>
										PC games, also known as computer games or personal computer games, are video games played on a personal computer rather than a dedicated video game console or arcade machine. Their defining characteristics include a lack of any centralized controlling authority, a greater degree of user control over the video-gaming....<br/><br/>   
									</p>
								</div>
								<div class="card-footer">
									<div class='location pull-right'>
										<p class="category">
											<i class="material-icons">place</i><br/>Pune, India
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row" style="margin-top:100px">	

						<div class="col-md-4 slideanim">
							<div class="card">
								<div class="card-image">
									<a href="#"><img src="assets/img/featured/card-9.png" width="100%" height="100%" /></a>	
								</div>
								<div class="card-title">
									<h4>Mathematics</h4>
								</div>
								<div class="card-description">
									<p>
										Mathematicians seek out patterns and use them to formulate new conjectures. Mathematicians resolve the truth or falsity of conjectures by mathematical proof. When mathematical structures are good models of real phenomena, then mathematical reasoning can provide insight or predictions about nature...<br/><br/>   
									</p>
								</div>
								<div class="card-footer">
									<div class='location pull-right'>
										<p class="category">
											<i class="material-icons">place</i><br/>Indore, India
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 slideanim">
							<div class="card second">
								<div class="card-image">
									<a href="#"><img src="assets/img/featured/card-10.jpg" width="100%" height="100%" /></a>	
								</div>
								<div class="card-title">
									<h4>Alcohol</h4>
								</div>
								<div class="card-description">
									<p>
										In chemistry, an alcohol is any organic compound in which the hydroxyl functional group is bound to a saturated carbon atom. The term alcohol originally referred to the primary alcohol ethanol (ethyl alcohol), the predominant alcohol in alcoholic beverages. The suffix -ol appears in the IUPAC chemical name of all substances....<br/><br/>   
									</p>
								</div>
								<div class="card-footer">
									<div class='location pull-right'>
										<p class="category">
											<i class="material-icons">place</i><br/>New York, USA
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 slideanim">
							<div class="card third">
								<div class="card-image">
									<a href="#"><img src="assets/img/featured/card-11.jpg" width="100%" height="100%" /></a>	
								</div>
								<div class="card-title">
									<h4>Cars</h4>
								</div>
								<div class="card-description">
									<p>
										A car is a wheeled, self-powered motor vehicle used for transportation and a product of the automotive industry. Most definitions of the term specify that cars are designed to run primarily on roads, to have seating for one to eight people, to typically have four wheels with tyres, and to be constructed principally for the transport....<br/><br/>   
									</p>
								</div>
								<div class="card-footer">
									<div class='location pull-right'>
										<p class="category">
											<i class="material-icons">place</i><br/>Mumbai, India
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Featured collection Area -->

		<!-- Fun section Area -->

		<div class="section-fun">
			<div class="row">
				<div class="col-lg-12">
					<div class="title" style="box-shadow:0px 1px 0px 0px #f0f0f0">
							<h3>We Are Fun</h3>
					</div>

					<div class="row" style="margin-top:50px">
						<div class="col-md-8 col-md-offset-2">
							<div class="card card-raised card-carousel">
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
										
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-example-generic" data-slide-to="1"></li>
										<li data-target="#carousel-example-generic" data-slide-to="2"></li>
										<li data-target="#carousel-example-generic" data-slide-to="3"></li>
										<li data-target="#carousel-example-generic" data-slide-to="4"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<img src="assets/img/carousel/carousel-1.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">open_with</i> Connects Society.</h4>
											</div>
										</div>
										<div class="item">
											<img src="assets/img/carousel/carousel-2.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">info</i> Share Wild Life Info.</h4>
											</div>
										</div>
										<div class="item">
											<img src="assets/img/carousel/carousel-3.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">settings_remote</i> Share Environmental issues.</h4>
											</div>
										</div>
										<div class="item">
											<img src="assets/img/carousel/carousel-4.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">volume_up</i> Speaks Your Heart Out.</h4>
											</div>
										</div>
										<div class="item">
											<img src="assets/img/carousel/carousel-5.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">send</i> Share And Read Stories.</h4>
											</div>
										</div>
									</div>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
										<i class="material-icons">keyboard_arrow_left</i>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
										<i class="material-icons">keyboard_arrow_right</i>
									</a>
								</div>
							</div>	
						</div>
					</div>	
				</div>
			</div>
		</div>	

		<!-- End of Fun section Area -->

		<!-- We are the best section -->

		<div class="section-best">
			<div class="row">
				<div class="col-lg-12">
					<div class="title" style="box-shadow:0px 1px 0px 0px #f0f0f0">
						<h3>We Are Best</h3>
					</div>
					<h5 class="describe-best">Xenella's service is constantly updating. To stay in contention as one of the best social networking websites, Xenella is realizing that it must add features and change the site layout frequently to stay ahead of the curve and keep from becoming stagnant.
					You also can't go wrong with its great mobile app, connecting you to your friends whenever you feel like it. Xenella is definitely the go-to service for staying in touch with friends and family, reuniting with old friends, and making new connections.
					</h5>

					<div class="row">
						<div class="col-md-4">
							<center>
								<div class="info">
									<div class="icon icon-info">
										<i class="material-icons">chat</i>
									</div>
									<h4 class="info-title">Free Chat</h4>
									<p>Xenella Provide Free and secured chat facility to our users. With no subscription or hidden charges. Along with facility of created discussion forums, groups and chat logs. Communication distribution is so advance on Xanella.</p>
								</div>
							</center>	
						</div>
						
						<div class="col-md-4">
							<center>
								<div class="info">
									<div class="icon icon-success">
										<i class="material-icons">thumb_up</i>
									</div>
									<h4 class="info-title">Verified Users</h4>
									<p>Xenella Provide access only to verified users. Each and very activity and communication is totally facce and secured in Xenella. Users can always enjoy security features thorugh their emails and contact numbers.</p>
								</div>	
							</center>
						</div>

						<div class="col-md-4">
							<center>
								<div class="info">
									<div class="icon icon-danger">
										<i class="material-icons">fingerprint</i>
									</div>
									<h4 class="info-title">Secured Password</h4>
									<p>Xenella Provide secured password facility to their users. Passwords are created either automatically (using randomizing equipment) or by a human, the latter case is more common. </p>
								</div>	
							</center>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<center>
								<div class="info">
									<div class="icon icon-success">
										<i class="material-icons">location_on</i>
									</div>
									<h4 class="info-title">Location Intergrated</h4>
									<p>Xenella Provide Free and secured facility to our integrate location and share it with your friends and family. Naviagtion direction facilities are also added with the location coordinates.</p>
								</div>
							</center>	
						</div>
						
						<div class="col-md-4">
							<center>
								<div class="info">
									<div class="icon icon-danger">
										<i class="material-icons">touch_app</i>
									</div>
									<h4 class="info-title">Mobile App</h4>
									<p>Xanella provides the facility of mobile app to its users. Having wide range and variety of features, with messanger and drive facility, which users can enjoy anywhere anytime with no problem.</p>
								</div>	
							</center>
						</div>

						<div class="col-md-4">
							<center>
								<div class="info">
									<div class="icon icon-info">
										<i class="material-icons">group_work</i>
									</div>
									<h4 class="info-title">Collaboration</h4>
									<p>Xenella Provide access only to advance features. Basically in a single unit. Xanella provides the collaboration of all social network experincing features in a single unit to the users.</p>
								</div>	
							</center>
						</div>

					</div>

				</div>
			</div>
		</div>

		<!-- End of we are the best section -->

		<!-- Team section -->
		<div class="section-team" style="background:url('assets/img/bg-3.jpg');background-size: 100% 100%;background-repeat: no-repeat;">
			<div class="row">
				<div class="col-lg-12">
					<div class="title">
						<h3 style="color:#fff">Technical Team</h3>
					</div>
					<div class="row" style="margin-top:50px">
						<div class="col-md-4">
							<div class="card card-profile">
								<div class="card-avatar">
									<img class="img" src="assets/img/team/abhishek.jpg" width="100%" height="100%" />
								</div>
								<h4 class="title">Abhishek</h4>
								<h6>Web Developer</h6>
								<p class="card-description">
									Design is not just what it looks like and feels like. Design is how it works.....<br/>
									- Steve Jobs
								</p>
								<div class="footer">
									<a class="btn btn-just-icon btn-linkedin btn-round"><i class="fa fa-linkedin"></i></a>
									<a class="btn btn-just-icon btn-twitter btn-round"><i class="fa fa-twitter"></i></a>
									<a class="btn btn-just-icon btn-dribbble btn-round"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4 second">
							<div class="card card-profile">
								<div class="card-avatar">
									<img class="img" src="assets/img/team/abhishek_mishra.jpg" width="100%" height="100%" />
								</div>
								<h4 class="title">Abhishek Mishra</h4>
								<h6>Backend Developer</h6>
								<p class="card-description">
									Nature your mind with great thoughts. To believe in the heroic makes makes heroes...<br/>
									- Benjamin Disraeli
								</p>
								<div class="footer">
									<a class="btn btn-just-icon btn-linkedin btn-round"><i class="fa fa-linkedin"></i></a>
									<a class="btn btn-just-icon btn-twitter btn-round"><i class="fa fa-twitter"></i></a>
									<a class="btn btn-just-icon btn-dribbble btn-round"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4 third">
							<div class="card card-profile">
								<div class="card-avatar">
									<img class="img" src="assets/img/team/himanshu.jpg" width="100%" height="100%" />
								</div>
								<h4 class="title">Himanshu Sharma</h4>
								<h6>Full Stack Developer</h6>
								<p class="card-description">
									One individual may be die for an idea, but that idea will incarnate itself in a thousand lives...<br/>
									- Netaji Subhash Chandra Bose
								</p>
								<div class="footer">
									<a class="btn btn-just-icon btn-linkedin btn-round"><i class="fa fa-linkedin"></i></a>
									<a class="btn btn-just-icon btn-twitter btn-round"><i class="fa fa-twitter"></i></a>
									<a class="btn btn-just-icon btn-dribbble btn-round"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
						</div>
					</div>


					<div class="row" style="margin-top:40px;margin-bottom:100px">
						<div class="col-md-4">
							<div class="card card-profile">
								<div class="card-avatar">
									<img class="img" src="assets/img/team/vikram.jpg" width="100%" height="100%" />
								</div>
								<h4 class="title">Vikram Thakur</h4>
								<h6>Backend Developer</h6>
								<p class="card-description">
									Smile and let everyone know that today, you're a lot stronger than you were yesterday...<br/>
									- Drake
								</p>
								<div class="footer">
									<a class="btn btn-just-icon btn-linkedin btn-round"><i class="fa fa-linkedin"></i></a>
									<a class="btn btn-just-icon btn-twitter btn-round"><i class="fa fa-twitter"></i></a>
									<a class="btn btn-just-icon btn-dribbble btn-round"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4 second">
							<div class="card card-profile">
								<div class="card-avatar">
									<img class="img" src="assets/img/team/deepak.jpg" width="100%" height="100%" />
								</div>
								<h4 class="title">Deepak Kushwaha</h4>
								<h6>Web Developer</h6>
								<p class="card-description">
									A professional writer is like an ameature who didn't quit...<br/>
									- Richard Bach
								</p>
								<div class="footer">
									<a class="btn btn-just-icon btn-linkedin btn-round"><i class="fa fa-linkedin"></i></a>
									<a class="btn btn-just-icon btn-twitter btn-round"><i class="fa fa-twitter"></i></a>
									<a class="btn btn-just-icon btn-dribbble btn-round"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4 third">
							<div class="card card-profile">
								<div class="card-avatar">
									<img class="img" src="assets/img/team/chirag.jpg" width="100%" height="100%" />
								</div>
								<h4 class="title">Chirag</h4>
								<h6>Backend Developer</h6>
								<p class="card-description">
									Be not be afraid of life. Believe that life is worth living, and your belief will help create the fact...<br/>
									- William James
								</p>
								<div class="footer">
									<a class="btn btn-just-icon btn-linkedin btn-round"><i class="fa fa-linkedin"></i></a>
									<a class="btn btn-just-icon btn-twitter btn-round"><i class="fa fa-twitter"></i></a>
									<a class="btn btn-just-icon btn-dribbble btn-round"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End of team section-->
		
		<!-- End Of Thank You Area -->

		<div class="section-thankyou">
			<div class="row" style="padding-bottom:30px">
				<div class="col-lg-12">
					<div class="title">
						<h3>Thank You For Joining Us</h3>	
					</div>
					<div class="footer">
						<a class="btn btn-twitter">
	                        <i class="fa fa-twitter"></i>
	                        Tweet
	                    </a>
	                    <a class="btn btn-facebook">
	                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
	                         &nbspShare
	                    </a>
						<a class="btn btn-google-plus">
	                        <i class="fa fa-google-plus"></i>
	                        Share
	                    </a>
						<a class="btn btn-github">
	                        <i class="fa fa-github"></i>
	                    	Star
	                    </a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Of Thank You Area -->
	</div>	
	<!-- Starts White color raised area -->

	<footer class="footer">
		<div class="container">
			<nav class="pull-left">
				<ul>
						<li><a href="index.php"> XANELLA</a></li>
						
					<?php 
					if(empty($_SESSION['user_id'])){
					?>	
						<li><a href="contact-us.php">CONTACT US</a></li>
						<li><a href="#signin" data-toggle="modal" data-target="#myModal">SIGN IN</a></li>
						<li><a href="signup.php">SIGN UP</a></li>
					
					<?php } else { 

						$user_id = $_SESSION['user_id'];	
						
						$query_select_name = "SELECT * FROM users WHERE user_id='$user_id'";
						$newresult_name = $conn->query($query_select_name);
						$row_name = $newresult_name->fetch_assoc();
						$first_name = $row_name['first_name'];
						$last_name = $row_name['last_name'];
					
					?>

						<li><a href="myworld.php">My World</a></li>
						<li><a href="#"><?php echo $first_name.' '.$last_name; ?></a></li>

					<?php } ?>	
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
							<input type="email" name="email" class="form-control" id="email" autocomplete="off" required />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">	
						<div class="form-group label-floating">
							<label class="control-label">Password</label>
							<input type="password" name="password" class="form-control" id="password" autocomplete="off" required />
						</div>
					</div>		
     			</div>

		    <div class="modal-footer">
		        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-info btn-simple" name="signin" onclick="submit_signin()">SIGN IN</button>
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

	<!--  Plugin for the Sliders -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>



<script type="text/javascript">

$(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });


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