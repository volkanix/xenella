<?php
session_start();

$conn = new MySQLi("localhost","root","","xenella");
  
  if (empty($_SESSION['user_id'])) {
    header('location:index.php');
  }


  $user_id = $_SESSION['user_id'];  
            
  $query_select_name = "SELECT * FROM users WHERE user_id='$user_id'";
  $newresult_name = $conn->query($query_select_name);
  $row_name = $newresult_name->fetch_assoc();
  $first_name = $row_name['first_name'];
  $last_name = $row_name['last_name'];


?>


<!DOCTYPE html>
<html>
<head>
  <title>My World | Xenella</title>

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

    <link href="assets/css/myworld.css" rel="stylesheet"/>


</head>
<body class="myworld-page">

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
        
        </ul>
      </div>
  </div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
      
    <div id="mySidenav" class="sidenav">
      <a href="home.php" id="home" style="font-family:calibri;color:#3f51b5;font-size:22px;font-weight:100;">
        <i class="material-icons">donut_small</i> &nbsp&nbsp&nbspMy World
      </a>
      <a href="#" id="featured" style="font-family:calibri;font-size:22px;color:#a0a0a0;font-weight:100;">
        <i class="material-icons">loyalty</i> &nbsp&nbsp&nbspFeatured</a>
      <a href="#" id="news" style="font-family:calibri;font-size:22px;font-weight:100;color:#a0a0a0;"><i class="fa fa-newspaper-o" aria-hidden="true"></i> &nbsp&nbsp&nbspNews</a>
      <a href="#" id="confession" style="font-family:calibri;font-size:22px;font-weight:100;color:#a0a0a0;"><i class="fa fa-heartbeat" aria-hidden="true"></i> &nbsp&nbsp&nbspConfessions</a>
      <a href="#" id="opinion" style="font-family:calibri;font-size:22px;font-weight:100;color:#a0a0a0;"><i class="fa fa-bar-chart" aria-hidden="true"></i> &nbsp&nbsp&nbspOpinions</a>
      <a href="#" id="trending" style="font-family:calibri;font-size:22px;font-weight:100;color:#a0a0a0;"><i class="fa fa-line-chart" aria-hidden="true"></i> &nbsp&nbsp&nbspTrending</a>
      <a href="#" id="lifestyle" style="font-family:calibri;font-size:22px;font-weight:100;color:#a0a0a0;"><i class="fa fa-bullhorn" aria-hidden="true"></i> &nbsp&nbsp&nbspShouts</a>
    </div>

    <div id="mySidenav_after" class="sidenav_after">
      <a href="home.php" id="home" style="font-family:calibri;color:#3f51b5;font-size:22px;font-weight:100;">
        <i class="material-icons">donut_small</i>
      </a>
      <a href="#" id="featured" style="font-family:calibri;font-size:22px;color:#a0a0a0;font-weight:100;">
        <i class="material-icons">loyalty</i>
      </a>
      <a href="#" id="news" style="font-family:calibri;font-size:22px;font-weight:100;color:#a0a0a0;">
        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
      </a>
      <a href="#" id="confession" style="font-family:calibri;font-size:22px;font-weight:100;color:#a0a0a0;">
        <i class="fa fa-heartbeat" aria-hidden="true"></i>
      </a>
      <a href="#" id="opinion" style="font-family:calibri;font-size:22px;font-weight:100;color:#a0a0a0;">
        <i class="fa fa-bar-chart" aria-hidden="true"></i>
      </a>
      <a href="#" id="trending" style="font-family:calibri;font-size:22px;font-weight:100;color:#a0a0a0;">
        <i class="fa fa-line-chart" aria-hidden="true"></i>
      </a>
      <a href="#" id="lifestyle" style="font-family:calibri;font-size:22px;font-weight:100;color:#a0a0a0;">
        <i class="fa fa-bullhorn" aria-hidden="true"></i>
      </a>
    </div>  



    <div id="complete_suggesto_area" class="container-fluid" style="width:600px;">
      <div class="row" data-toggle="modal" data-target="#myModal">
        <div class="col-sm-12">
          <div class="thumbnail" style="cursor:pointer">
            <div class="row">
                <div class="col-xs-2"><i class="material-icons" style="font-size:48px;margin-left:10px;margin-top:5px;color:#3f51b5">face</i></div>
                <div class="col-xs-8" style="margin-top:14px;"><h8>What's in your mind ?</h8></div>
                <div class="col-xs-2" style="margin-top:15px;"><i class="fa fa-camera fa-2x" aria-hidden="true" style="color:#e0e0e0"></i></div>
            </div>
          </div>
        </div>          
      </div>
  
        <?php    
  
            $user_id = $_SESSION['user_id'];

            $checking_posts_exists = "SELECT * FROM posts";
            $checked_posts_exists = $conn->query($checking_posts_exists);

            if($checked_posts_exists->num_rows == 0){
        ?>
          
          <div class="row" style="margin-top:150px">
            <div class="col-sm-12">
              <center><h8>Looks Like you've reached the end</h8></center>
            </div>
          </div>           

        <?php } ?>  
        
        <?php       
            $query = $conn->query("SELECT * FROM posts order By id DESC");
            while($extract = $query->fetch_assoc()){
            $first_name = $extract['first_name'];
            $last_name = $extract['last_name'];
            $post = $extract['post'];
        
        ?>

          <div class="row">
            <div class="col-sm-12">
              <div class="thumbnail">
                <div class="row">
                      <div class="col-xs-1"><i class="material-icons" style="font-size:48px;margin-left:10px;margin-top:5px;color:#3f51b5">face</i></div>
                      <div class="col-xs-8" style="margin-top:16px;margin-left:15px;"><h8><?php echo $first_name.' '.$last_name; ?></h8></div>
                </div>
                <div class="row centered" style="background-color:#f0f0f0;margin-top:5px">
                    <div class="col-xs-12 centered"></div>
                </div>
                <div class="row centered" style="padding-top:5px;padding-bottom:7px;word-wrap:break-word;">
                    <div class="col-xs-12"><h8><?php echo $post ?></h8></div>
                </div>
                <div class="row centered" style="padding-top:5px;padding-bottom:7px;word-wrap:break-word;box-shadow:0px -1px 0px 0px #f0f0f0">
                    <div class="col-xs-2"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></div>
                    <div class="col-xs-2"><i class="fa fa-thumbs-up fa-2x" aria-hidden="true"></i></div>
                    <div class="col-xs-2"><i class="fa fa-thumbs-down fa-2x" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>
          </div>

      <?php } ?>

    </div>  

</div>


      <?php    
  
            $user_id = $_SESSION['user_id'];

            $query = $conn->query("SELECT * FROM users WHERE user_id='$user_id'");
            $extract = $query->fetch_assoc();
            $first_name = $extract['first_name'];
            $last_name = $extract['last_name'];
           
      ?>


<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <!--<h20 class="modal-title"><img id="image_on_post" class="img-circle" src="6.jpg" alt="Paris" style="margin-top:-10px;margin-bottom:-10px" /> &nbsp&nbsp<+/?php echo $name ?></h20> -->
        <h4 class="modal-title" id="myModalLabel">
          <i class="material-icons" style="font-size:48px;margin-bottom:-10px;color:#3f51b5;">face</i>&nbsp&nbsp<?php echo "<p style='margin-top:-40px;margin-left:50px;'>".$first_name.' '.$last_name."<p>"; ?>
        </h4>
      </div>
        <form role="form" id="contact-form" method="post">
          <div class="modal-body" style="margin-top:-20px;">
            <div class="row">
          <div class="col-md-12">
            <div class="form-group label-floating">
              <label class="control-label">What's in your mind ?</label>
                <textarea name="message" class="form-control" id="comment" rows="6"></textarea>
            </div>
          </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info btn-simple" onclick="submit_post()">POST</button>
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

<script>

function submit_post(){
  
  var comment = document.getElementById("comment").value; 

  if($.trim($('#comment').val()).length == 0)
  {   
    $('#comment').focus();
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
     if(xmlhttp.readyState ==4 && xmlhttp.status==200){
      var check = xmlhttp.responseText;
        if (check=="wrong"){
         $('#comment').focus(); 
        }else if (check=="success"){
         window.location = 'myworld.php';   
        }
     }
    }
  xmlhttp.open('GET','helpers/forpost.php?comment='+comment,true);
  xmlhttp.send();
}


function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script>



</html>