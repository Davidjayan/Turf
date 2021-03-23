<?php
session_start();
session_destroy();
$url = 'http://localhost/turf/login.php';
header("Location: " . $url);

?>