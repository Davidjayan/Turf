		<?php
session_start();
if ($_SESSION['valid'] != True){
	$url = 'http://localhost/turf/leagues_and_tournaments.php';
	header("Location: " . $url);
	die();
}
?>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/logo_1.ico">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Turf</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			  	<div class="container header-top">
			  		<div class="row">
				  		<div class="col-6 top-head-left">				  			
				  			<ul>
		  						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
				  			</ul>
				  		</div>
				  		<div class="col-6 top-head-right">
				  			<ul>
				  				<li><a href="tel:+91 9600000852"><span>+91 9600000852</span> <span class="lnr lnr-phone-handset"></span></a></li>
				  				<li><a href="#"><?php echo "Welcome " . $_SESSION['usr']; ?></a></li>&ensp;
								<li><a href="logout.php">Log out</a></li>
				  			</ul>
				  		</div>			  			
			  		</div>
			  	</div>
			  	<hr>
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" style="width: 31%;"/></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				            <li class="menu-active"><a href="home.php">Home</a></li>
				          <li><a href="bookings.php">Bookings</a></li>
				          <li><a href="leagues_and_tournaments.php">Leagues and Tournaments</a></li>
				          <li><a href="contact us.php">Contact Us</a></li>
				        </ul>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Leagues and Tournaments</br>	<span Style="font:28px verdana; color:orange;">Join A League Now!</span>		
							</h1>	
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			<!-- Start service Area -->
			<section class="service-area service-page-service section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">NFC Leagues and Tournaments</h1>
								<p>Who are in extremely love with Football</p>
							</div>
						</div>
					</div>						
			
			<!-- End service Area -->			
						
						<h1>Chennai Kickoff <span style="color:#FFBA00;">Tournament</span></h1>
</br>
<p style="font-size:20px;">
<b>Chennai Kickoff Tournament</b> conducted every year at <b>NFC - Chennai</b>. Football is not just about goal tallies and revenue figures but also inspiration and style! Sports and games offer useful lessons for entrepreneurs about the importance of teamwork, preparation, passion, attitude, definitions of success, dealing with failure and having a sense of humour at the end of the day. So why dely take part in chennai's greatest football tournament..!!

 <span style="color:#FFBA00; font-weight:700;font-family: "chunkfiveregular;">--North Coast Football</span>
</p></br></br>

			<!-- start footer Area -->		
			<footer class="footer-area section-gap" style="position: absolute;left: 0%;width: 100%;">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									 Chennai's largest and finest five-a-side football arena with international quality Turf standards and state of the art infrastructure.
								</p>
																
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest news</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-whatsapp"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



