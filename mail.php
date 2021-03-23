<?php

$name = $_POST['name'];
$email  = $_POST['email'];
$subject = $_POST['subject'];
$message = isset($_POST['message']) ? $_POST['message'] : '';



if (!empty($name) || !empty($email) || !empty($subject) || !empty($message) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "feedback";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT Into feedback (name , email ,subject, message )values('$name','$email','$subject','$message')";
if($conn->query($sql))
{
      echo "Feedback sent sucessfully";
     } else {
      echo "error";
     }
}} else {
 echo "All field are required";
 die();
}
?>