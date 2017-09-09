<?php
include("index.php");


function updateData($latitude,$longitude,$email){
	global $con;
	$result=mysqli_query($con , "UPDATE `fcm_info` SET `latitude`='$latitude',
	`longitude`='$longitude' WHERE email = '$email'")or die(mysqli_error($con));
	return $result;
}
?>