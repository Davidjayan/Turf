	<?php
session_start();
if ($_SESSION['valid'] != True){
	$url = 'http://localhost/turf/success.php';
	header("Location: " . $url);
	die();
}
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Success</h2>
        <img src="img/succ.svg" style="width: 15%;">
        <h3><?php echo "Dear " . $_SESSION['usr']; ?></h3>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for booking, We have sent you an email with your booking details.</p>
        <a href="home.php" class="btn btn-success">     Home     </a>
    <br><br>
        </div>
        
	</div>
</div>
</body>
</html>