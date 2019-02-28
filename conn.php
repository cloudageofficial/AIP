<?php


	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'aiengine');
// check connection
if($db->connect_error) {
    die("Connection Failed : " . $connect->error);
} else {
    //echo "Successfully Connected";   
}
