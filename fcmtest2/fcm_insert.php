<?php


require 'index.php';

$fcm_token=$_POST["fcm_token"];
$email=$_POST["email"];
$latitude=$_POST["latitude"];
$longitude=$_POST["longitude"];

$sql="insert into fcm_info(fcm_token,email,latitude,longitude) values('$fcm_token','$email','$latitude','$longitude');";

mysqli_query($con, $sql);
mysqli_close($con);

?>

