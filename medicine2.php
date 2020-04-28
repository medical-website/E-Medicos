<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   <style>
		table,th,td{
			border: 1px solid black;
			width: 1100px;
			background-color: white;
		}
	</style>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Search Box</title>  
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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        function action1()
        {
        document.getElementById("ak").innerHTML="The typical symptoms of a cold include cough, runny nose, sneezing, nasal congestion, and a sore throat, sometimes accompanied by muscle ache, fatigue, headache, and loss of appetite."
        }
         function action2()
        {
        document.getElementById("bk").innerHTML="The only useful ways to reduce the spread of cold viruses are physical measures such as using correct handwashing technique and face masks; in the healthcare environment, gowns and disposable gloves are also used."
        }
         function action3()
        {
        document.getElementById("ck").innerHTML="1. Nasal decongestants:" +" "+ "2. Cough suppressants" +" "+ "3. CExpectorants:" +" "+ "4. D-Cold Total:" +" "+ " 5. vicks vaporub"
        }
    </script>
</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->
	
	<!-- Start top bar --
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<a class="new-btn-d br-2" href="#"><span>Book Appointment</span></a>
						<div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> demo@gmail.com</a></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p>Welcome to Our Health Lab!</p>
					</div>
					<div class="right-top">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End top bar -->
	
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.php"><img  class="pk" src="rk.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="index.php">Home</a></li>
                         <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          comman problems
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="fever.html">FEVER</a>
          <a class="dropdown-item" href="cold.html">COLD </a>
          <a class="dropdown-item" href="cough.html">COUGH </a>
          <a class="dropdown-item" href="headache.html">HEADACHE </a>
          <a class="dropdown-item" href="bloodpressure.html">BLOOD PRESSURE </a>
          <a class="dropdown-item" href="diabetes.html">DIABETES </a>


        </div>
      </li> -->
						<li><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	
	
	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>SEARCH BY MEDICINE OR BY DISEASE NAME</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div id="search1" class="contact-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="title-box">
					<h2> SEARCH MEDICINES</h2>


					<form method="post">
					<label>Search</label>
					<input type="text" name="search" class="form-control" placeholder="ENTER THE NAME OF MEDICINE YOU WANT TO ENQUIRE ABOUT"/>
					<input type="submit" name="submit" value="SEARCH INFO ABOUT MEDICINE" class="btn btn-success"/>
					<input type="submit" name="submit1" value="SEARCH INFO ABOUT DIESEASE" class="btn btn-success"/>
					</form>
					
					<?php
					$str1 = $_POST["search"];
					$con = mysqli_connect('localhost','root','','insertdb');
					$db = mysqli_select_db($con,'three38inc');
					$query = "SELECT * FROM `medicines` WHERE name = '$str1'";
					
					
					$result = mysqli_query($con, $query);
					if(mysqli_num_rows($result) > 0)
					{
						
						echo "<table border = '1' style = 'width:100%'>";
						echo "<tr>";
						echo "<th>Name</th>";
						echo "<th>Purpose</th>";
						echo "<th>Salt</th>";
						echo "<th>images</th>";
						echo "</tr>";
						echo "<table>";
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<tr>";
										echo "<td>".$row['Name']."</td>";
										echo "<td>".$row['Purpose']."</td>";
										echo "<td>".$row['Salts']."</td>";
							echo "</tr>";
						}
						echo "</table>";
					} 
					else 
					{
						echo "<h2> <font color=black > 0 results </font> </h2>";
					}
					
					?>
					



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
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>RAGHAV KAPOOR</h4>
								<a href="#">+91 7906384205</a><br>
                                <p>raghavkapoor021428@gmail.com</p>
							</div>
						</div>
                        <div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>KAUSTUBH ASTHANA</h4>
								<a href="#">+91 8449525994</a>
                                <P>kaustubhasthana2@gmail.com</P>

							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>ANSHUL CHAUDHARY</h4>
								<a href="#">+91 9837421121</a>
                                <P>chaudharyanshul1407@gmail.com</P>
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