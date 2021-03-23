<?php session_start();
?>
<html>
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
<link href="login.css" rel="stylesheet" id="bootstrap-css">
<script src="js/login.js"></script>
<script src="js/login1.js"></script>
</head>
<style>
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 40%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
</style>
<body>
<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "feedback";

if ($_SERVER['REQUEST_METHOD'] == "POST" ) {
if (isset($_POST['us'])) {
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "SELECT password from accounts where user_name='" . $_POST['us'] . "'";
$result = $conn->query($sql);
  if($row = $result->fetch_assoc()) {
		 

	if (!empty($_POST['us'])){
		if ($_POST['pwd'] == $row['password']) {
			$_SESSION['valid'] = True;
			$_SESSION['usr'] = $_POST['us'];
			$url = 'http://localhost/turf/home.php';
			header("Location: " . $url);
			die();
		}
		echo '<script language=javascript>';
		echo 'alert("Invalid User name or password");';
		echo '</script>';
	}

}
}
}else {


$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
	if($_POST['password'] == $_POST['confpassword']){
	$user_name = $_POST['username'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	$phno = $_POST['phno'];
	$sql = "INSERT INTO accounts VALUES('$user_name', '$pass', '$email', '$phno')";
	if($conn->query($sql)){
		echo '<script language=javascript>';
		echo 'alert("Registered");';
		echo '</script>';
	}
	else {
		echo '<script language=javascript>';
		echo 'alert("User name alredy exist");';
		echo '</script>';
	}
}
else{
	echo '<script language=javascript>';
		echo 'alert("Password not matching");';
		echo '</script>';
}
}
	
}
}


?>
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
				         <li class="menu-active"><a href="index.html">Home</a></li>
				          <li><a href="bookings.html">Bookings</a></li>
				          <li><a href="leagues and tournaments.html">Leagues and Tournaments</a></li>
				          <li><a href="contact us.html">Contact Us</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header>
			  
			  <!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white"></br>
								Login / Register</br>		
							</h1>	
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			   
<div class="login-form"style="padding-top: 5%;">
<div class="main-div" style="
    position: absolute;
    left: 15%;
">
    <div class="panel">
    <h2 style="font-weight:bold;color: black;position: relative;font-size: x-large;top: -87px;">User Login</h2>
    </div>
	<div style="
    position: absolute;
    left: -5%;
    top: 69%;
">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
	<div class="form-group">
	<input type="text" class="form-control" placeholder="username" name="us" style="width: 150%;">
	</div>
	<div class="form-group">
	<input type="password" class="form-control" placeholder="Password" name = "pwd" style="width: 150%;">
	</div>
	<button style="
    position: absolute;
    left: 35%;
    top: 185%;
    width: 75%;
	" type="submit" class="btn btn-primary">Login</button>
    </form>
	</div>
</div></div>

<div class="login-form"style="padding-top: 1%;">
<div class="main-div">
    <div class="panel">
   <h2 style="font-weight:bold;color: black;position: absolute;font-size: x-large;bottom: 53%;left: 851px;">New User registration</h2>
   </div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
	<div style="
    position: absolute;
    left: 62%;
    width: 505px;
    top: 50%;
">
	
	<div class="form-group">

			
            <input type="text" class="form-control" placeholder="User Name" name="username" style="width: 60%;">

        </div>

        <div class="form-group">


            <input type="email" class="form-control" name="email" placeholder="Email Address" style="width: 60%;">

        </div>
		
		 <div class="form-group">

            <input type="text" class="form-control" placeholder="Mobile Number" name="phno" style="width: 60%;">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" name="password" placeholder="Password" style="width: 60%;">

        </div>
		
		<div class="form-group">


            <input type="password" class="form-control" name="confpassword" placeholder="Confirm Password" style="width: 60%;">

        </div>
		</div>
  
        <button type="submit" class="btn btn-primary" style="
    position: absolute;
    top: 85%;
    left: 66%;
    width: 15%;
">Register</button>

    </form>
</div></div>
</br></br></br></br></br></br></br></br></br></br></br></br></br>
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
			                            	<button class="click-btn btn btn-default" style="padding-bottom: 16px;">
											<span class="lnr lnr-arrow-right" style="position: relative;top: 4px;"></span></button>
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
