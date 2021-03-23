	<?php
session_start();
if ($_SESSION['valid'] != True){
	$url = 'http://localhost/turf/bookings.php';
	header("Location: " . $url);
	die();
}
$count = 0;
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
	<script type="text/javascript">
	var fare = 0;
	function count_s(){
		var x = document.getElementById("1");
		x.style.color = "red";
	}
	</script>

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
body
{
font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

#Username
{
border:none;
border-bottom:1px solid;
}

.screen
{
width:100%;
height:20px;
background:#4388cc;
color:#fff;
line-height:20px;
font-size:15px;
}

.smallBox::before
{
content:".";
width:15px;
height:15px;
float:left;
margin-right:10px;
}
.greenBox::before
{
content:"";
background:Green;
}
.redBox::before
{
content:"";
background:Red;
}
.emptyBox::before
{
content="";
box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
  background-color:#ccc;
}

.seats
{
border:1px solid red;background:yellow;
}



.seatGap
{
width:40px;
}

.seatVGap
{
height:40px;
}

table
{
text-align:center;
}


.Displaytable
{
text-align:center;
}
.Displaytable td, .Displaytable th {
  border: 1px solid;
  text-align: left;
}

textarea
{
border:none;
background:transparent;
}



input[type=checkbox] {
  width:0px;
  margin-right:18px;
}

input[type=checkbox]:before {
  content: "";
  width: 15px;
  height: 15px;
  display: inline-block;
  vertical-align:middle;
  text-align: center;
  box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
  background-color:#ccc;
}

input[type=checkbox]:checked:before {
  background-color:green;
  font-size: 15px;
}

.res input[type=checkbox]{
  background-color:red;
  color: red;
  font-size: 15px;
}
.but{
	height:15px;
}

</style>
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
			        <a href="index.html"><img src="img/logo.png" alt="" title="" style="width: 31%;" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
				             <li class="menu-active"><a href="home.php">Home</a></li>
				          <li><a href="bookings.php">Bookings</a></li>
				          <li><a href="leagues_and_tournaments.php">Leagues and Tournaments</a></li>
				          <li><a href="contact us.php">Contact Us</a></li>
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
						<h1 class="text-white" style="padding-top: 5%;">
							Book Your <span style="color:#FFBA00;">Slots Now!</span>
						</h1>
					</div>
				</div>
			</div>
		</section>
		<!-- End banner Area -->

		<section class="schedule-area section-gap relative" id="schedule">
			<div class="container"></br>
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-70 col-lg-8">
						<div class="title text-center" style="
  left: -40%;
  position: relative;
  top: -76%;
">
							<h1 class="mb-10">Select your slots</h1>
							<p>Plese note that all slotes are for 60 minutes </br> and each slotes costs Rs. 500/-.</p>
						
						</div>
					</div>
				</div>
				<div class="row">

					<div class="table-wrap col-lg-12"></section>
						<section><table id="seatsBlock">
<p id="notification"></p>
<tr>

  <td rowspan="20" style="position: absolute;top: 62%;left: 39px;">
    <div class="smallBox greenBox">Selected Slot</div> <br/>
    <div class="smallBox redBox">Reserved Slot</div><br/>
    <div class="smallBox emptyBox">Empty Slot</div><br/>
  </td>

  <br/>
	<?php

	$dbhost = "localhost";
	$username = "root";
	$password = "";
	$database = "feedback";

	$conn = new mysqli($dbhost, $username, $password, $database);
	if ($conn->connect_error) {
	  die("Couldn't connect");
	}

	$sql = "SELECT status FROM booked ORDER BY slotno";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		echo "";
	} else {
		die("Nope");
	}
	?>
<img src="img/bg.jpg" style="width: 683px;height: 60%;position: relative;left: 3%;bottom: 253px;">
					<div class="table-wrap col-lg-12">
						<table  style="position: absolute;top: 36%;left: 50px;color: black;">
							  <thead class="thead-light">
							    <tr>
								<th class="head" scope="col" style="width: 11%;"></th>
							      <th class="head" scope="col">mon</th>
							      <th class="head" scope="col">tue</th>
							      <th class="head" scope="col">wed</th>
							      <th class="head" scope="col">thu</th>
							      <th class="head" scope="col">fri</th>
								   <th class="head" scope="col">sat</th>
								    <th class="head" scope="col">sun</th>
							    </tr>
							  </thead>
							  <?php $flag1="false";?>
							  <?php $flag2="false";?>
							  <?php $flag3="false";?>
							  <?php $flag4="false";?>
							  <?php $flag5="false";?>
							  <?php $flag6="false";?>
							  <?php $flag7="false";?>
							  <?php $flag8="false";?>
							  <?php $flag9="false";?>
							  <?php $flag10="false";?>
							  <?php $flag11="false";?>
							  <?php $flag12="false";?>
							  <?php $flag13="false";?>
							  <?php $flag14="false";?>
							  <?php $flag15="false";?>
							  <?php $flag16="false";?>
							  <?php $flag17="false";?>
							  <?php $flag18="false";?>
							  <?php $flag19="false";?>
							  <?php $flag20="false";?>
							  <?php $flag21="false";?>
							  <?php $flag22="false";?>
							  <?php $flag23="false";?>
							  <?php $flag24="false";?>
							  <?php $flag25="false";?>
							  <?php $flag26="false";?>
							  <?php $flag27="false";?>
							  <?php $flag28="false";?>
							  <?php $flag29="false";?>
							  <?php $flag30="false";?>
							  <?php $flag31="false";?>
							  <?php $flag32="false";?>
							  <?php $flag33="false";?>
							  <?php $flag34="false";?>
							  <?php $flag35="false";?>
							  <?php $flag36="false";?>
							  <?php $flag37="false";?>
							  <?php $flag38="false";?>
							  <?php $flag39="false";?>
							  <?php $flag40="false";?>
							  <?php $flag41="false";?>
							  <?php $flag42="false";?>
							  <?php $flag43="false";?>
							  <?php $flag44="false";?>
							  <?php $flag45="false";?>
							  <?php $flag46="false";?>
							  <?php $flag47="false";?>
							  <?php $flag48="false";?>
							  <?php $flag49="false";?>
							  <?php $flag50="false";?>
							  <?php $flag51="false";?>
							  <?php $flag52="false";?>
							  <?php $flag53="false";?>
							  <?php $flag54="false";?>
							  <?php $flag55="false";?>
							  <?php $flag56="false";?>
							  <?php $flag57="false";?>
							  <?php $flag58="false";?>
							  <?php $flag59="false";?>
							  <?php $flag60="false";?>
							  <?php $flag61="false";?>
							  <?php $flag62="false";?>
							  <?php $flag63="false";?>
							  <?php $flag64="false";?>
							  <?php $flag65="false";?>
							  <?php $flag66="false";?>
							  <?php $flag67="false";?>
							  <?php $flag68="false";?>
							  <?php $flag69="false";?>
							  <?php $flag70="false";?>
							  <?php $flag71="false";?>
							  <?php $flag72="false";?>
							  <?php $flag73="false";?>
							  <?php $flag74="false";?>
							  <?php $flag75="false";?>
							  <?php $flag76="false";?>
							  <?php $flag77="false";?>
							  <?php $flag78="false";?>
							  <?php $flag79="false";?>
							  <?php $flag80="false";?>
							  <?php $flag81="false";?>
							  <?php $flag82="false";?>
							  <?php $flag83="false";?>
							  <?php $flag84="false";?>
							  <?php $flag85="false";?>
							  <?php $flag86="false";?>
							  <?php $flag87="false";?>
							  <?php $flag88="false";?>
							  <?php $flag89="false";?>
							  <?php $flag90="false";?>
							  <?php $flag91="false";?>
							  <?php $flag92="false";?>
							  <?php $flag93="false";?>
							  <?php $flag94="false";?>
							  <?php $flag95="false";?>
							  <?php $flag96="false";?>
							  <?php $flag97="false";?>
							  <?php $flag98="false";?>
							  <?php $flag99="false";?>
							  <?php $flag100="false";?>
							  <?php $flag101="false";?>
							  <?php $flag102="false";?>
							  <?php $flag103="false";?>
							  <?php $flag104="false";?>
							  <?php $flag105="false";?>
							  <?php $flag106="false";?>
							  <?php $flag107="false";?>
							  <?php $flag108="false";?>
							  <?php $flag109="false";?>
							  <?php $flag110="false";?>
							  <?php $flag111="false";?>
							  <?php $flag112="false";?>
							  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".1").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag1="<?php $flag1="true"; echo $flag1?>";
				document.getElementById("flag1").value=flag1;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag1="<?php $flag1="flase"; echo $flag1?>";
				document.getElementById("flag1").value=flag1;
				
            }   
        });
    });
    </script>
							   <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".2").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag2="<?php $flag2="true"; echo $flag2?>";
				document.getElementById("flag2").value=flag2;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag2="<?php $flag2="flase"; echo $flag2?>";
				document.getElementById("flag2").value=flag2;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".3").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag3="<?php $flag3="true"; echo $flag3?>";
				document.getElementById("flag3").value=flag3;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag3="<?php $flag3="flase"; echo $flag3?>";
				document.getElementById("flag3").value=flag3;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".4").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag4="<?php $flag4="true"; echo $flag4?>";
				document.getElementById("flag4").value=flag4;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag4="<?php $flag4="flase"; echo $flag4?>";
				document.getElementById("flag4").value=flag4;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".5").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag5="<?php $flag5="true"; echo $flag5?>";
				document.getElementById("flag5").value=flag5;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag5="<?php $flag5="flase"; echo $flag5?>";
				document.getElementById("flag5").value=flag5;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".6").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag6="<?php $flag6="true"; echo $flag6?>";
				document.getElementById("flag6").value=flag6;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag6="<?php $flag6="flase"; echo $flag6?>";
				document.getElementById("flag6").value=flag6;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".7").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag7="<?php $flag7="true"; echo $flag7?>";
				document.getElementById("flag7").value=flag7;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag7="<?php $flag7="flase"; echo $flag7?>";
				document.getElementById("flag7").value=flag7;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".8").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag8="<?php $flag8="true"; echo $flag8?>";
				document.getElementById("flag8").value=flag8;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag8="<?php $flag8="flase"; echo $flag8?>";
				document.getElementById("flag8").value=flag8;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".9").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag9="<?php $flag9="true"; echo $flag9?>";
				document.getElementById("flag9").value=flag9;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag9="<?php $flag9="flase"; echo $flag9?>";
				document.getElementById("flag9").value=flag9;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".10").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag10="<?php $flag10="true"; echo $flag10?>";
				document.getElementById("flag10").value=flag10;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag10="<?php $flag10="flase"; echo $flag10?>";
				document.getElementById("flag10").value=flag10;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".11").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag11="<?php $flag11="true"; echo $flag11?>";
				document.getElementById("flag11").value=flag11;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag11="<?php $flag11="flase"; echo $flag11?>";
				document.getElementById("flag11").value=flag11;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".12").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag12="<?php $flag12="true"; echo $flag12?>";
				document.getElementById("flag12").value=flag12;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag12="<?php $flag12="flase"; echo $flag12?>";
				document.getElementById("flag12").value=flag12;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".13").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag13="<?php $flag13="true"; echo $flag13?>";
				document.getElementById("flag13").value=flag13;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag13="<?php $flag13="flase"; echo $flag13?>";
				document.getElementById("flag13").value=flag13;        
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".14").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag14="<?php $flag14="true"; echo $flag14?>";
				document.getElementById("flag14").value=flag14;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag14="<?php $flag14="flase"; echo $flag14?>";
				document.getElementById("flag14").value=flag14;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".15").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag15="<?php $flag15="true"; echo $flag15?>";
				document.getElementById("flag15").value=flag15;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag15="<?php $flag15="flase"; echo $flag15?>";
				document.getElementById("flag15").value=flag15;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".16").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag16="<?php $flag16="true"; echo $flag16?>";
				document.getElementById("flag16").value=flag16;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag16="<?php $flag16="flase"; echo $flag16?>";
				document.getElementById("flag16").value=flag16;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".17").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag17="<?php $flag17="true"; echo $flag17?>";
				document.getElementById("flag17").value=flag17;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag17="<?php $flag17="flase"; echo $flag17?>";
				document.getElementById("flag17").value=flag17;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".18").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag18="<?php $flag18="true"; echo $flag18?>";
				document.getElementById("flag18").value=flag18;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag18="<?php $flag18="flase"; echo $flag18?>";
				document.getElementById("flag18").value=flag18;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".19").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag19="<?php $flag19="true"; echo $flag19?>";
				document.getElementById("flag19").value=flag19;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag19="<?php $flag19="flase"; echo $flag19?>";
				document.getElementById("flag19").value=flag19;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".20").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag20="<?php $flag20="true"; echo $flag20?>";
				document.getElementById("flag20").value=flag20;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag20="<?php $flag20="flase"; echo $flag20?>";
				document.getElementById("flag20").value=flag20;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".21").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag21="<?php $flag21="true"; echo $flag21?>";
				document.getElementById("flag21").value=flag21;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag21="<?php $flag21="flase"; echo $flag21?>";
				document.getElementById("flag21").value=flag21;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".22").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag22="<?php $flag22="true"; echo $flag22?>";
				document.getElementById("flag22").value=flag22;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag22="<?php $flag22="flase"; echo $flag22?>";
				document.getElementById("flag22").value=flag22;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".23").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag23="<?php $flag23="true"; echo $flag23?>";
				document.getElementById("flag23").value=flag23;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag23="<?php $flag23="flase"; echo $flag23?>";
				document.getElementById("flag23").value=flag23;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".24").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag24="<?php $flag24="true"; echo $flag24?>";
				document.getElementById("flag24").value=flag24;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag24="<?php $flag24="flase"; echo $flag24?>";
				document.getElementById("flag24").value=flag24;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".25").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag25="<?php $flag25="true"; echo $flag25?>";
				document.getElementById("flag25").value=flag25;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag25="<?php $flag25="flase"; echo $flag25?>";
				document.getElementById("flag25").value=flag25;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".26").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag26="<?php $flag26="true"; echo $flag26?>";
				document.getElementById("flag26").value=flag26;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag26="<?php $flag26="flase"; echo $flag26?>";
				document.getElementById("flag26").value=flag26;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".27").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag27="<?php $flag27="true"; echo $flag27?>";
				document.getElementById("flag27").value=flag27;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag27="<?php $flag27="flase"; echo $flag27?>";
				document.getElementById("flag27").value=flag27;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".28").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag28="<?php $flag28="true"; echo $flag28?>";
				document.getElementById("flag28").value=flag28;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag28="<?php $flag28="flase"; echo $flag28?>";
				document.getElementById("flag28").value=flag28;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".29").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag29="<?php $flag29="true"; echo $flag29?>";
				document.getElementById("flag29").value=flag29;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag29="<?php $flag29="flase"; echo $flag29?>";
				document.getElementById("flag29").value=flag29;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".30").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag30="<?php $flag30="true"; echo $flag30?>";
				document.getElementById("flag30").value=flag30;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag30="<?php $flag30="flase"; echo $flag30?>";
				document.getElementById("flag30").value=flag30;
				
            }   
        });
    });
    </script>
	<script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".31").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag31="<?php $flag31="true"; echo $flag31?>";
				document.getElementById("flag31").value=flag31;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag31="<?php $flag31="flase"; echo $flag31?>";
				document.getElementById("flag31").value=flag31;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".32").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag32="<?php $flag32="true"; echo $flag32?>";
				document.getElementById("flag32").value=flag32;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag32="<?php $flag32="flase"; echo $flag32?>";
				document.getElementById("flag32").value=flag32;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".33").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag33="<?php $flag33="true"; echo $flag33?>";
				document.getElementById("flag33").value=flag33;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag33="<?php $flag33="flase"; echo $flag33?>";
				document.getElementById("flag33").value=flag33;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".34").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag34="<?php $flag34="true"; echo $flag34?>";
				document.getElementById("flag34").value=flag34;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag34="<?php $flag34="flase"; echo $flag34?>";
				document.getElementById("flag34").value=flag34;
				
            }   
        });
    });
    </script>
	<script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".35").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag35="<?php $flag35="true"; echo $flag35?>";
				document.getElementById("flag35").value=flag35;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag35="<?php $flag35="flase"; echo $flag35?>";
				document.getElementById("flag35").value=flag35;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".36").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag36="<?php $flag36="true"; echo $flag36?>";
				document.getElementById("flag36").value=flag36;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag36="<?php $flag36="flase"; echo $flag36?>";
				document.getElementById("flag36").value=flag36;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".37").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag37="<?php $flag37="true"; echo $flag37?>";
				document.getElementById("flag37").value=flag37;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag37="<?php $flag37="flase"; echo $flag37?>";
				document.getElementById("flag37").value=flag37;
				
            }   
        });
    });
    </script>
	<script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".38").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag38="<?php $flag38="true"; echo $flag38?>";
				document.getElementById("flag38").value=flag38;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag38="<?php $flag38="flase"; echo $flag38?>";
				document.getElementById("flag38").value=flag38;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".39").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag39="<?php $flag39="true"; echo $flag39?>";
				document.getElementById("flag39").value=flag39;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag39="<?php $flag39="flase"; echo $flag39?>";
				document.getElementById("flag39").value=flag39;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".40").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag40="<?php $flag40="true"; echo $flag40?>";
				document.getElementById("flag40").value=flag40;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag40="<?php $flag40="flase"; echo $flag40?>";
				document.getElementById("flag40").value=flag40;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".41").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag41="<?php $flag41="true"; echo $flag41?>";
				document.getElementById("flag41").value=flag41;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag41="<?php $flag41="flase"; echo $flag41?>";
				document.getElementById("flag41").value=flag41;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".42").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag42="<?php $flag42="true"; echo $flag42?>";
				document.getElementById("flag42").value=flag42;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag42="<?php $flag42="flase"; echo $flag42?>";
				document.getElementById("flag42").value=flag42;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".43").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag43="<?php $flag43="true"; echo $flag43?>";
				document.getElementById("flag43").value=flag43;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag43="<?php $flag43="flase"; echo $flag43?>";
				document.getElementById("flag43").value=flag43;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".44").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag44="<?php $flag44="true"; echo $flag44?>";
				document.getElementById("flag44").value=flag44;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag44="<?php $flag44="flase"; echo $flag44?>";
				document.getElementById("flag44").value=flag44;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".45").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag45="<?php $flag45="true"; echo $flag45?>";
				document.getElementById("flag45").value=flag45;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag45="<?php $flag45="flase"; echo $flag45?>";
				document.getElementById("flag45").value=flag45;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".46").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag46="<?php $flag46="true"; echo $flag46?>";
				document.getElementById("flag46").value=flag46;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag46="<?php $flag46="flase"; echo $flag46?>";
				document.getElementById("flag46").value=flag46;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".47").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag47="<?php $flag47="true"; echo $flag47?>";
				document.getElementById("flag47").value=flag47;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag47="<?php $flag47="flase"; echo $flag47?>";
				document.getElementById("flag47").value=flag47;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".48").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag48="<?php $flag48="true"; echo $flag48?>";
				document.getElementById("flag48").value=flag48;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag48="<?php $flag48="flase"; echo $flag48?>";
				document.getElementById("flag48").value=flag48;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".49").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag49="<?php $flag49="true"; echo $flag49?>";
				document.getElementById("flag49").value=flag49;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag49="<?php $flag49="flase"; echo $flag49?>";
				document.getElementById("flag49").value=flag49;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".50").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag50="<?php $flag50="true"; echo $flag50?>";
				document.getElementById("flag50").value=flag50;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag50="<?php $flag50="flase"; echo $flag50?>";
				document.getElementById("flag50").value=flag50;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".51").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag51="<?php $flag51="true"; echo $flag51?>";
				document.getElementById("flag51").value=flag51;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag51="<?php $flag51="flase"; echo $flag51?>";
				document.getElementById("flag51").value=flag51;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".52").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag52="<?php $flag52="true"; echo $flag52?>";
				document.getElementById("flag52").value=flag52;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag52="<?php $flag52="flase"; echo $flag52?>";
				document.getElementById("flag52").value=flag52;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".53").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag53="<?php $flag53="true"; echo $flag53?>";
				document.getElementById("flag53").value=flag53;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag53="<?php $flag53="flase"; echo $flag53?>";
				document.getElementById("flag53").value=flag53;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".54").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag54="<?php $flag54="true"; echo $flag54?>";
				document.getElementById("flag54").value=flag54;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag54="<?php $flag54="flase"; echo $flag54?>";
				document.getElementById("flag54").value=flag54;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".55").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag55="<?php $flag55="true"; echo $flag55?>";
				document.getElementById("flag55").value=flag55;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag55="<?php $flag55="flase"; echo $flag55?>";
				document.getElementById("flag55").value=flag55;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".56").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag56="<?php $flag56="true"; echo $flag56?>";
				document.getElementById("flag56").value=flag56;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag56="<?php $flag56="flase"; echo $flag56?>";
				document.getElementById("flag56").value=flag56;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".57").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag57="<?php $flag57="true"; echo $flag57?>";
				document.getElementById("flag57").value=flag57;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag57="<?php $flag57="flase"; echo $flag57?>";
				document.getElementById("flag57").value=flag57;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".58").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag58="<?php $flag58="true"; echo $flag58?>";
				document.getElementById("flag58").value=flag58;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag58="<?php $flag58="flase"; echo $flag58?>";
				document.getElementById("flag58").value=flag58;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".59").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag59="<?php $flag59="true"; echo $flag59?>";
				document.getElementById("flag59").value=flag59;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag59="<?php $flag59="flase"; echo $flag59?>";
				document.getElementById("flag59").value=flag59;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".60").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag60="<?php $flag60="true"; echo $flag60?>";
				document.getElementById("flag60").value=flag60;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag60="<?php $flag60="flase"; echo $flag60?>";
				document.getElementById("flag60").value=flag60;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".61").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag61="<?php $flag61="true"; echo $flag61?>";
				document.getElementById("flag61").value=flag61;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag61="<?php $flag61="flase"; echo $flag61?>";
				document.getElementById("flag61").value=flag61;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".62").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag62="<?php $flag62="true"; echo $flag62?>";
				document.getElementById("flag62").value=flag62;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag62="<?php $flag62="flase"; echo $flag62?>";
				document.getElementById("flag62").value=flag62;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".63").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag63="<?php $flag63="true"; echo $flag63?>";
				document.getElementById("flag63").value=flag63;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag63="<?php $flag63="flase"; echo $flag63?>";
				document.getElementById("flag63").value=flag63;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".64").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag64="<?php $flag64="true"; echo $flag64?>";
				document.getElementById("flag64").value=flag64;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag64="<?php $flag64="flase"; echo $flag64?>";
				document.getElementById("flag64").value=flag64;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".65").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag65="<?php $flag65="true"; echo $flag65?>";
				document.getElementById("flag65").value=flag65;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag65="<?php $flag65="flase"; echo $flag65?>";
				document.getElementById("flag65").value=flag65;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".66").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag66="<?php $flag66="true"; echo $flag66?>";
				document.getElementById("flag66").value=flag66;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag66="<?php $flag66="flase"; echo $flag66?>";
				document.getElementById("flag66").value=flag66;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".67").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag67="<?php $flag67="true"; echo $flag67?>";
				document.getElementById("flag67").value=flag67;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag67="<?php $flag67="flase"; echo $flag67?>";
				document.getElementById("flag67").value=flag67;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".68").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag68="<?php $flag68="true"; echo $flag68?>";
				document.getElementById("flag68").value=flag68;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag68="<?php $flag68="flase"; echo $flag68?>";
				document.getElementById("flag68").value=flag68;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".69").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag69="<?php $flag69="true"; echo $flag69?>";
				document.getElementById("flag69").value=flag69;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag69="<?php $flag69="flase"; echo $flag69?>";
				document.getElementById("flag69").value=flag69;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".70").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag70="<?php $flag70="true"; echo $flag70?>";
				document.getElementById("flag70").value=flag70;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag70="<?php $flag70="flase"; echo $flag70?>";
				document.getElementById("flag70").value=flag70;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".71").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag71="<?php $flag71="true"; echo $flag71?>";
				document.getElementById("flag71").value=flag71;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag71="<?php $flag71="flase"; echo $flag71?>";
				document.getElementById("flag71").value=flag71;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".72").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag72="<?php $flag72="true"; echo $flag72?>";
				document.getElementById("flag72").value=flag72;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag72="<?php $flag72="flase"; echo $flag72?>";
				document.getElementById("flag72").value=flag72;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".73").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag73="<?php $flag73="true"; echo $flag73?>";
				document.getElementById("flag73").value=flag73;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag73="<?php $flag73="flase"; echo $flag73?>";
				document.getElementById("flag73").value=flag73;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".74").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag74="<?php $flag74="true"; echo $flag74?>";
				document.getElementById("flag74").value=flag74;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag74="<?php $flag74="flase"; echo $flag74?>";
				document.getElementById("flag74").value=flag74;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".75").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag75="<?php $flag75="true"; echo $flag75?>";
				document.getElementById("flag75").value=flag75;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag75="<?php $flag75="flase"; echo $flag75?>";
				document.getElementById("flag75").value=flag75;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".76").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag76="<?php $flag76="true"; echo $flag76?>";
				document.getElementById("flag76").value=flag76;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag76="<?php $flag76="flase"; echo $flag76?>";
				document.getElementById("flag76").value=flag76;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".77").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag77="<?php $flag77="true"; echo $flag77?>";
				document.getElementById("flag77").value=flag77;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag77="<?php $flag77="flase"; echo $flag77?>";
				document.getElementById("flag77").value=flag77;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".78").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag78="<?php $flag78="true"; echo $flag78?>";
				document.getElementById("flag78").value=flag78;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag78="<?php $flag78="flase"; echo $flag78?>";
				document.getElementById("flag78").value=flag78;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".79").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag79="<?php $flag79="true"; echo $flag79?>";
				document.getElementById("flag79").value=flag79;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag79="<?php $flag79="flase"; echo $flag79?>";
				document.getElementById("flag79").value=flag79;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".80").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag80="<?php $flag80="true"; echo $flag80?>";
				document.getElementById("flag80").value=flag80;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag80="<?php $flag80="flase"; echo $flag80?>";
				document.getElementById("flag80").value=flag80;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".81").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag81="<?php $flag81="true"; echo $flag81?>";
				document.getElementById("flag81").value=flag81;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag81="<?php $flag81="flase"; echo $flag81?>";
				document.getElementById("flag81").value=flag81;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".82").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag82="<?php $flag82="true"; echo $flag82?>";
				document.getElementById("flag82").value=flag82;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag82="<?php $flag82="flase"; echo $flag82?>";
				document.getElementById("flag82").value=flag82;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".83").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag83="<?php $flag83="true"; echo $flag83?>";
				document.getElementById("flag83").value=flag83;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag83="<?php $flag83="flase"; echo $flag83?>";
				document.getElementById("flag83").value=flag83;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".84").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag84="<?php $flag84="true"; echo $flag84?>";
				document.getElementById("flag84").value=flag84;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag84="<?php $flag84="flase"; echo $flag84?>";
				document.getElementById("flag84").value=flag84;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".85").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag85="<?php $flag85="true"; echo $flag85?>";
				document.getElementById("flag85").value=flag85;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag85="<?php $flag85="flase"; echo $flag85?>";
				document.getElementById("flag85").value=flag85;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".86").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag86="<?php $flag86="true"; echo $flag86?>";
				document.getElementById("flag86").value=flag86;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag86="<?php $flag86="flase"; echo $flag86?>";
				document.getElementById("flag86").value=flag86;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".87").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag87="<?php $flag87="true"; echo $flag87?>";
				document.getElementById("flag87").value=flag87;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag87="<?php $flag87="flase"; echo $flag87?>";
				document.getElementById("flag87").value=flag87;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".88").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag88="<?php $flag88="true"; echo $flag88?>";
				document.getElementById("flag88").value=flag88;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag88="<?php $flag88="flase"; echo $flag88?>";
				document.getElementById("flag88").value=flag88;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".89").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag89="<?php $flag89="true"; echo $flag89?>";
				document.getElementById("flag89").value=flag89;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag89="<?php $flag89="flase"; echo $flag89?>";
				document.getElementById("flag89").value=flag89;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".90").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag90="<?php $flag90="true"; echo $flag90?>";
				document.getElementById("flag90").value=flag90;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag90="<?php $flag90="flase"; echo $flag90?>";
				document.getElementById("flag90").value=flag90;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".91").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag91="<?php $flag91="true"; echo $flag91?>";
				document.getElementById("flag91").value=flag91;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag91="<?php $flag91="flase"; echo $flag91?>";
				document.getElementById("flag91").value=flag91;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".92").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag92="<?php $flag92="true"; echo $flag92?>";
				document.getElementById("flag92").value=flag92;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag92="<?php $flag92="flase"; echo $flag92?>";
				document.getElementById("flag92").value=flag92;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".93").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag93="<?php $flag93="true"; echo $flag93?>";
				document.getElementById("flag93").value=flag93;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag93="<?php $flag93="flase"; echo $flag93?>";
				document.getElementById("flag93").value=flag93;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".94").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag94="<?php $flag94="true"; echo $flag94?>";
				document.getElementById("flag94").value=flag94;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag94="<?php $flag94="flase"; echo $flag94?>";
				document.getElementById("flag94").value=flag94;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".95").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag95="<?php $flag95="true"; echo $flag95?>";
				document.getElementById("flag95").value=flag95;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag95="<?php $flag95="flase"; echo $flag95?>";
				document.getElementById("flag95").value=flag95;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".96").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag96="<?php $flag96="true"; echo $flag96?>";
				document.getElementById("flag96").value=flag96;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag96="<?php $flag96="flase"; echo $flag96?>";
				document.getElementById("flag96").value=flag96;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".97").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag97="<?php $flag97="true"; echo $flag97?>";
				document.getElementById("flag97").value=flag97;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag97="<?php $flag97="flase"; echo $flag97?>";
				document.getElementById("flag97").value=flag97;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".98").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag98="<?php $flag98="true"; echo $flag98?>";
				document.getElementById("flag98").value=flag98;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag98="<?php $flag98="flase"; echo $flag98?>";
				document.getElementById("flag98").value=flag98;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".99").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag99="<?php $flag99="true"; echo $flag99?>";
				document.getElementById("flag99").value=flag99;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag99="<?php $flag99="flase"; echo $flag99?>";
				document.getElementById("flag99").value=flag99;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".100").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag100="<?php $flag100="true"; echo $flag100?>";
				document.getElementById("flag100").value=flag100;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag100="<?php $flag100="flase"; echo $flag100?>";
				document.getElementById("flag100").value=flag100;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".101").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag101="<?php $flag101="true"; echo $flag101?>";
				document.getElementById("flag101").value=flag101;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag101="<?php $flag101="flase"; echo $flag101?>";
				document.getElementById("flag101").value=flag101;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".102").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag102="<?php $flag102="true"; echo $flag102?>";
				document.getElementById("flag102").value=flag102;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag102="<?php $flag102="flase"; echo $flag102?>";
				document.getElementById("flag102").value=flag102;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".103").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag103="<?php $flag103="true"; echo $flag103?>";
				document.getElementById("flag103").value=flag103;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag103="<?php $flag103="flase"; echo $flag103?>";
				document.getElementById("flag103").value=flag103;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".104").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag104="<?php $flag104="true"; echo $flag104?>";
				document.getElementById("flag104").value=flag104;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag104="<?php $flag104="flase"; echo $flag104?>";
				document.getElementById("flag104").value=flag104;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".105").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag105="<?php $flag105="true"; echo $flag105?>";
				document.getElementById("flag105").value=flag105;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag105="<?php $flag105="flase"; echo $flag105?>";
				document.getElementById("flag105").value=flag105;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".106").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag106="<?php $flag106="true"; echo $flag106?>";
				document.getElementById("flag106").value=flag106;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag106="<?php $flag106="flase"; echo $flag106?>";
				document.getElementById("flag106").value=flag106;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".107").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag107="<?php $flag107="true"; echo $flag107?>";
				document.getElementById("flag107").value=flag107;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag107="<?php $flag107="flase"; echo $flag107?>";
				document.getElementById("flag107").value=flag107;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".108").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag108="<?php $flag108="true"; echo $flag108?>";
				document.getElementById("flag108").value=flag108;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag108="<?php $flag108="flase"; echo $flag108?>";
				document.getElementById("flag108").value=flag108;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".109").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag109="<?php $flag109="true"; echo $flag109?>";
				document.getElementById("flag109").value=flag109;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag109="<?php $flag109="flase"; echo $flag109?>";
				document.getElementById("flag109").value=flag109;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".110").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag110="<?php $flag110="true"; echo $flag110?>";
				document.getElementById("flag110").value=flag110;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag110="<?php $flag110="flase"; echo $flag110?>";
				document.getElementById("flag110").value=flag110;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".111").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag111="<?php $flag111="true"; echo $flag111?>";
				document.getElementById("flag111").value=flag111;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag111="<?php $flag111="flase"; echo $flag111?>";
				document.getElementById("flag111").value=flag111;
				
            }   
        });
    });
    </script>
								  <script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".112").click(function(){
            if(clicked){
                $(this).css('background-color', 'green');
                clicked  = false;
				var flag112="<?php $flag112="true"; echo $flag112?>";
				document.getElementById("flag112").value=flag112;
				
            } else {
                $(this).css('background-color', '#ccc');
                clicked  = true;
				var flag112="<?php $flag112="flase"; echo $flag112?>";
				document.getElementById("flag112").value=flag112;
				
            }   
        });
    });
    </script>
<form action="testthis.php" method="post">
							  <tbody>
							  <div style="display:none;">
							  <input type="text" name="flag1" id="flag1">
							  <input type="text" name="flag2" id="flag2">
							  <input type="text" name="flag3" id="flag3">
							  <input type="text" name="flag4" id="flag4">
							  <input type="text" name="flag5" id="flag5">
							  <input type="text" name="flag6" id="flag6">
							  <input type="text" name="flag7" id="flag7">
							  <input type="text" name="flag8" id="flag8">
							  <input type="text" name="flag9" id="flag9">
							  <input type="text" name="flag10" id="flag10">
							  <input type="text" name="flag11" id="flag11">
							  <input type="text" name="flag12" id="flag12">
							  <input type="text" name="flag13" id="flag13">
							  <input type="text" name="flag14" id="flag14">
							  <input type="text" name="flag15" id="flag15">
							  <input type="text" name="flag16" id="flag16">
							  <input type="text" name="flag17" id="flag17">
							  <input type="text" name="flag18" id="flag18">
							  <input type="text" name="flag19" id="flag19">
							  <input type="text" name="flag20" id="flag20">
							  <input type="text" name="flag21" id="flag21">
							  <input type="text" name="flag22" id="flag22">
							  <input type="text" name="flag23" id="flag23">
							  <input type="text" name="flag24" id="flag24">
							  <input type="text" name="flag25" id="flag25">
							  <input type="text" name="flag26" id="flag26">
							  <input type="text" name="flag27" id="flag27">
							  <input type="text" name="flag28" id="flag28">
							  <input type="text" name="flag29" id="flag29">
							  <input type="text" name="flag30" id="flag30">
							  <input type="text" name="flag31" id="flag31">
							  <input type="text" name="flag32" id="flag32">
							  <input type="text" name="flag33" id="flag33">
							  <input type="text" name="flag34" id="flag34">
							  <input type="text" name="flag35" id="flag35">
							  <input type="text" name="flag36" id="flag36">
							  <input type="text" name="flag37" id="flag37">
							  <input type="text" name="flag38" id="flag38">
							  <input type="text" name="flag39" id="flag39">
							  <input type="text" name="flag40" id="flag40">
							  <input type="text" name="flag41" id="flag41">
							  <input type="text" name="flag42" id="flag42">
							  <input type="text" name="flag43" id="flag43">
							  <input type="text" name="flag44" id="flag44">
							  <input type="text" name="flag45" id="flag45">
							  <input type="text" name="flag46" id="flag46">
							  <input type="text" name="flag47" id="flag47">
							  <input type="text" name="flag48" id="flag48">
							  <input type="text" name="flag49" id="flag49">
							  <input type="text" name="flag50" id="flag50">
							  <input type="text" name="flag51" id="flag51">
							  <input type="text" name="flag52" id="flag52">
							  <input type="text" name="flag53" id="flag53">
							  <input type="text" name="flag54" id="flag54">
							  <input type="text" name="flag55" id="flag55">
							  <input type="text" name="flag56" id="flag56">
							  <input type="text" name="flag57" id="flag57">
							  <input type="text" name="flag58" id="flag58">
							  <input type="text" name="flag59" id="flag59">
							  <input type="text" name="flag60" id="flag60">
							  <input type="text" name="flag61" id="flag61">
							  <input type="text" name="flag62" id="flag62">
							  <input type="text" name="flag63" id="flag63">
							  <input type="text" name="flag64" id="flag64">
							  <input type="text" name="flag65" id="flag65">
							  <input type="text" name="flag66" id="flag66">
							  <input type="text" name="flag67" id="flag67">
							  <input type="text" name="flag68" id="flag68">
							  <input type="text" name="flag69" id="flag69">
							  <input type="text" name="flag70" id="flag70">
							  <input type="text" name="flag71" id="flag71">
							  <input type="text" name="flag72" id="flag72">
							  <input type="text" name="flag73" id="flag73">
							  <input type="text" name="flag74" id="flag74">
							  <input type="text" name="flag75" id="flag75">
							  <input type="text" name="flag76" id="flag76">
							  <input type="text" name="flag77" id="flag77">
							  <input type="text" name="flag78" id="flag78">
							  <input type="text" name="flag79" id="flag79">
							  <input type="text" name="flag80" id="flag80">
							  <input type="text" name="flag81" id="flag81">
							  <input type="text" name="flag82" id="flag82">
							  <input type="text" name="flag83" id="flag83">
							  <input type="text" name="flag84" id="flag84">
							  <input type="text" name="flag85" id="flag85">
							  <input type="text" name="flag86" id="flag86">
							  <input type="text" name="flag87" id="flag87">
							  <input type="text" name="flag88" id="flag88">
							  <input type="text" name="flag89" id="flag89">
							  <input type="text" name="flag90" id="flag90">
							  <input type="text" name="flag91" id="flag91">
							  <input type="text" name="flag92" id="flag92">
							  <input type="text" name="flag93" id="flag93">
							  <input type="text" name="flag94" id="flag94">
							  <input type="text" name="flag95" id="flag95">
							  <input type="text" name="flag96" id="flag96">
							  <input type="text" name="flag97" id="flag97">
							  <input type="text" name="flag98" id="flag98">
							  <input type="text" name="flag99" id="flag99">
							  <input type="text" name="flag100" id="flag100">
							  <input type="text" name="flag101" id="flag101">
							  <input type="text" name="flag102" id="flag102">
							  <input type="text" name="flag103" id="flag103">
							  <input type="text" name="flag104" id="flag104">
							  <input type="text" name="flag105" id="flag105">
							  <input type="text" name="flag106" id="flag106">
							  <input type="text" name="flag107" id="flag107">
							  <input type="text" name="flag108" id="flag108">
							  <input type="text" name="flag109" id="flag109">
							  <input type="text" name="flag110" id="flag110">
							  <input type="text" name="flag111" id="flag111">
							  <input type="text" name="flag112" id="flag112">
							  </div>  <tr>
							      <th >06:00 AM</th>
										  <td width="8%"><?php $row = $result->fetch_assoc();?>
																				
													<button type="button" name="1" class="but 1" id="1" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="2" class="but 2" value="true"  <?php if($row['status'] == 'true') echo 'style="background-color:red;" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="3" class="but 3" id="3" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="4" class="but 4" id="4" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="5" class="but 5" id="5" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="6" class="but 6" id="6" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="7" class="but 7" id="7" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
							    <tr>
							      <th >07:00 AM</th>
							      <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="8" class="but 8" id="8" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="9" class="but 9" id="9" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="10" class="but 10" id="10" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="11" class="but 11" id="11" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="12" class="but 12" id="12" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="13" class="but 13" id="13" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="14" class="but 14" id="14" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
							    <tr>
							     <th >08:00 AM</th>
							      <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="15" class="but 15" id="15" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="16" class="but 16" id="16" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="17" class="but 17" id="17" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="18" class="but 18" id="18" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="19" class="but 19" id="19" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="20" class="but 20" id="20" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="21" class="but 21" id="21" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
							    <tr>
							      <th >09:00 AM</th>
							      <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="22" class="but 22" id="22" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="23" class="but 23" id="23" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="24" class="but 24" id="24" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="25" class="but 25" id="25" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="26" class="but 26" id="26" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="27" class="but 27" id="27" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="28" class="but 28" id="28" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
							    <tr>
							      <th >10:00 AM</th>
							      <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="29" class="but 29" id="29" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="30" class="but 30" id="30" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="31" class="but 31" id="31" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="32" class="but 32" id="32" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="33" class="but 33" id="33" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="34" class="but 34" id="34" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="35" class="but 35" id="35" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
							    <tr>
							      <th >11:00 AM</th>
							     <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="36" class="but 36" id="36" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="37" class="but 37" id="37" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="38" class="but 38" id="38" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="39" class="but 39" id="39" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="40" class="but 40" id="40" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="41" class="but 41" id="41" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="42" class="but 42" id="42" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
								<tr>
							     <th >12:00 PM</th>
							     <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="43" class="but 43" id="43" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="44" class="but 44" id="44" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="45" class="but 45" id="45" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="46" class="but 46" id="46" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="47" class="but 47" id="47" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="48" class="but 48" id="48" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="49" class="but 49" id="49" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
								<tr>
							     <th >01:00 PM</th>
							      <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="50" class="but 50" id="50" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="51" class="but 51" id="51" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="52" class="but 52" id="52" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="53" class="but 53" id="53" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="54" class="but 54" id="54" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="55" class="but 55" id="55" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="56" class="but 56" id="56" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
								<tr>
							     <th >02:00 PM</th>
							      <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="57" class="but 57" id="57" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="58" class="but 58" id="58" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="59" class="but 59" id="59" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="60" class="but 60" id="60" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="61" class="but 61" id="61" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="62" class="but 62" id="62" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="63" class="but 63" id="63" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
								<tr>
							     <th >03:00 PM</th>
							      <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="64" class="but 64" id="64" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="65" class="but 65" id="65" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="66" class="but 66" id="66" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="67" class="but 67" id="67" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="68" class="but 68" id="68" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="69" class="but 69" id="69" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="70" class="but 70" id="70" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
								<tr>
							     <th >04:00 PM</th>
							     <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="71" class="but 71" id="71" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="72" class="but 72" id="72" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="73" class="but 73" id="73" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="74" class="but 74" id="74" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="75" class="but 75" id="75" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="76" class="but 76" id="76" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="77" class="but 77" id="77" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
								<tr>
							     <th >05:00 PM</th>
							     <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="78" class="but 78" id="78" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="79" class="but 79" id="79" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="80" class="but 80" id="80" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="81" class="but 81" id="81" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="82" class="but 82" id="82" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="83" class="but 83" id="83" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="84" class="but 84" id="84" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
								<tr>
							     <th >06:00 PM</th>
							     <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="85" class="but 85" id="85" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="86" class="but 86" id="86" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="87" class="but 87" id="87" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="88" class="but 88" id="88" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="89" class="but 89" id="89" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="90" class="but 90" id="90" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="91" class="but 91" id="91" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
								<tr>
							     <th >07:00 PM</th>
							     <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="92" class="but 92" id="92" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="93" class="but 93" id="93" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="94" class="but 94" id="94" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="95" class="but 95" id="95" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="96" class="but 96" id="96" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="97" class="but 97" id="97" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="98" class="but 98" id="98" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
								<tr>
							     <th >08:00 PM</th>
							      <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="99" class="but 99" id="99" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="100" class="but 100" id="100" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="101" class="but 101" id="101" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="102" class="but 102" id="102" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="103" class="but 103" id="103" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="104" class="but 104" id="104" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="105" class="but 105" id="105" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>
								<tr>
							     <th >09:00 PM</th>
							    <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="106" class="but 106" id="106" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="107" class="but 107" id="107" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="108" class="but 108" id="108" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="109" class="but 109" id="109" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="110" class="but 110" id="110" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="111" class="but 111" id="111" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
                                          <td width="8%"><?php $row = $result->fetch_assoc();?>
                                              		<button type="button" name="112" class="but 112" id="112" <?php if($row['status'] == 'true') echo 'style="background-color:red" disabled'; ?>></button>
                                          </td>
							    </tr>

							  </tbody>
</table>

<input type="submit" value="Book Slot" class="primary-btn text-uppercase" style="position: absolute;left: 560px;top: 62%;"></button>
<input type="text" style="display:none;" name="user" id="user" value="<?php echo $_SESSION['usr'];?>">;
</form>
		</section>

<section>
<div class="textwidget"><h1 style="padding-left: 69%;position: absolute;top: 26%;"> We <span style="color:#FFBA00;">Offer!</span></h1></div>
<hr>
<div>
<div style="left: 63%;position: absolute;top: 574px;">
<div align="center "  class="half"><img  src="http://turfside.in/wp-content/uploads/2015/05/parking.png" alt="parking" height="75" width="75"></p>
<h4 style="margin-top:-25px;" ></br>Parking</h4></br></br></br>
</div>
<div align="center "      class="half last"><img  src="http://turfside.in/wp-content/uploads/2015/05/football.png" alt="bibs" height="75" width="75"></p>
<h4 style="margin-top:-25px;" ></br>Football</h4></br></br></br>
</div>
<div align="center "    class="half"><img  src="http://turfside.in/wp-content/uploads/2015/05/shower.png" alt="bibs" height="75" width="75"></p>
<h4  style="margin-top:-25px;"></br>Shower</h4>
</div>
</div>
<div style="position: absolute;left: 81%;top: 574px;">
<div align="center "    class="half last"><img  src="http://turfside.in/wp-content/uploads/2015/05/locker.png" alt="bibs" height="75" width="75"></p>
<h4  style="margin-top:-25px;"></br>Locker</h4></br></br></br>
</div>
<div align="center "    class="half "><img  src="http://turfside.in/wp-content/uploads/2015/09/score.png" alt="parking" height="75" width="75"></p>
<h4 style="margin-top:-25px;"></br>Score Board</h4></br></br></br>
</div>
<div align="center "    class="half last"><img  src="http://turfside.in/wp-content/uploads/2015/05/lights.png" alt="parking" height="75" width="75"></p>
<h4 style="margin-top:-25px;"></br>Flood lights</h4></br>
</div>
</div>
</br>
</div>

</section>


		<!-- start footer Area -->
		<footer class="footer-area section-gap">
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
		                            	<button class="click-btn btn btn-default" style="height: 40px;"><span class="lnr lnr-arrow-right"></span></button>
		                            	<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="true" <?php if($row['status'] == 'true') echo 'checked'; ?>="" type="text">
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
