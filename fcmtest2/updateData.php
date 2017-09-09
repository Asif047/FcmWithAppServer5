<?php

include ('db_function.php');
$response = array();
 
//Getting post data 
$email = $_REQUEST["email"];
$latitude = $_REQUEST["latitude"];
$longitude = $_REQUEST['longitude'];


if (isset($email) && isset($latitude)&&isset($longitude) ){
 
	$result=updateData($latitude,$longitude,$email);
	if ($result) {
        $response["success"] = 1;
        $response["message"] = "Successfully updated"; 
        echo json_encode($response);
    } 
	else {
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred."; 
        echo json_encode($response);
    }
	
} 
else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";  
    echo json_encode($response);
}
?>