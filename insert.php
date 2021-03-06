<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Adding Medicine</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.php"><img  class="pk" src="images/apple-touch-icon.png" alt="image">E-MEDICOS</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
						<li><a class="nav-link" href="#contact">Contact</a></li>
						<li><a class="nav-link active" href="login1.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12"> 								
                                <p id="ck"></p>                           
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12"> 
							<!--	<div class="about-m">	-->
									<ul id="banner">
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$con = mysqli_connect('localhost','root','','insertdb');
if(!$con)
{
	echo mysql_error();
}
	
	/*
	if(isset($_POST['submit'])){
		$aname = $_POST['aname'];
		$apurpose = $_POST['apurpose'];
		$asalts = $_POST['asalts'];
		$aphoto = addslashes (file_get_contents($_FILES['aphoto']['tmp_name']));
		$image = getimagesize($_FILES['aphoto']['tmp_name']);
		$imgtype = $image['mime'];
	}
	
	$con = mysqli_connect('localhost','root','','insertdb');
	
	$query = "INSERT INTO `medicine1`(`aname`, `apurpose`, `asalts`,`aphoto`, `aphototype`) VALUES ('$aname', '$apurpose', '$asalts', '$aphoto', '$imgtype')";
	
	$run = mysqli_query($con,$query);
	
	if($run == TRUE)
		echo "<a href='medicinefillform.php'><button>Click here to insert more data</button></a>";
	else
		echo "Error !";*/
$aname = $_POST['aname'];
$apurpose = $_POST['apurpose'];
$asalts = $_POST['asalts'];

$q="INSERT INTO `medicine1`(`aname`, `apurpose`, `asalts`) VALUES ('$aname','$apurpose','$asalts')";
$r = mysqli_query($con, $q);
if($r)
{
	echo "<a href='medicinefillform.php'><button>Click here to insert more data</button></a>";
}
else
{
	echo "Error";
}
?> 
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12"> 								
                                <p id="ck"></p>                           
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12"> 
							<!--	<div class="about-m">	-->
									<ul id="banner">
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
    <div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>CONTACT</h2>
                        <p>For any suggestions and queries contact us</p>
                        <h4>E-MEDICOS</h4>
                                <a href="#"><strong>Emedicos@gmail.com</strong></a>
						<div class="me-line">
							<div class="-b">
								<i class="" aria-hidden="true"></i>
							</div>
                            

							<div class="media-body dit-right">
								<h4></h4>
								<a href="#"></a><br>
                                <p></p>
							</div>
						</div>
                       <div class="media cont-line" col-sm-12>
							<div class="">
								<i class="" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4> </h4>
								<a href="#"></a>
                                <P></P>

							</div>
						</div>
						<div class="media cont-line">
							<div class="">
								<i class="3" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								
                                <P></P>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	<!-- End Contact -->
	
	<!-- Start Subscribe -
	<div class="subscribe-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="subscribe-inner text-center clearfix">
						<h2>Subscribe</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<form action="#" method="post">
							<div class="form-group">
								<input class="form-control-1" id="email-1" name="email" placeholder="Email Address" required="" type="text">
							</div>
							<div class="form-group">
								<button type="submit" class="new-btn-d br-2">
									Subscribe
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Subscribe -->
	
	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved &copy; 2020<a href="#">E-Medicos </a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>