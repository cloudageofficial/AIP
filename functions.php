<?php 
session_start();

// connect to database
//$db = mysqli_connect('localhost', 'root', '', 'aiengine');
include('conn.php');
// variable declaration
$first_name = "";
$last_name = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $first_name, $last_name,$email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$first_name    =  e($_POST['first_name']);
	$last_name    =  e($_POST['last_name']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password']);
	$password_2  =  e($_POST['repeat_password']);

	// form validation: ensure that the form is correctly filled
	if (empty($first_name)) { 
		array_push($errors, "First Name is required"); 
	}
	if (empty($last_name)) { 
		array_push($errors, "Last Name is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database
		//$password = $password_1;
		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO ai_user_deatils (ai_user_firstname,ai_user_lastname, ai_user_email, ai_user_pass) 
					  VALUES('$first_name', '$last_name','$email',  '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: /AIP/login.php');
		}else{
			$query = "INSERT INTO ai_user_deatils (ai_user_firstname,ai_user_lastname, ai_user_email, ai_user_pass) 
					  VALUES('$first_name', '$last_name','$email',  '$password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: /AIP/login.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM ai_user_deatils WHERE ai_user_id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: /AIP/login.php");
}
// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $email, $errors;

	// grap form values
	$email = e($_POST['email']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);
		//$password = $password;

		$query = "SELECT * FROM ai_user_deatils WHERE ai_user_email='$email' AND ai_user_pass='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: /AIP/index.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: /AIP/index.php');
			}
		}else {
			array_push($errors, "The Email & Password are incorrect");
		}
	}
}
// ...
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

//Add feeds
// add feed category
if (isset($_POST['submit_category'])) {
	$category = $_POST['category'];
	
	
	$query_cat = "INSERT INTO ai_feeds_cat (ai_cat_name) 
			  VALUES('$category')";
	mysqli_query($db, $query_cat);

	}

// add feeds
	if (isset($_POST['submit_feeds'])) {

	$category_list = $_POST['category_list'];
 	$name = $_POST['name'];

	$question = implode(", ", $name); 

	$response = $_POST['response'];

	 $answer = implode(", ", $response); 
	
	
	// $que= "SELECT ai_feeds_cat.ai_cat_id, ai_feeds_cat.ai_cat_name FROM ai_feeds_cat INNER JOIN ai_feeds_que ON ai_feeds_cat.ai_cat_id = ai_feeds_que.ai_cat_id;"


	$query_cat = "INSERT INTO ai_feeds_que (ai_cat_name,ai_question,ai_answer) 
			  VALUES('$category_list','$question','$answer')";
	// $query_cat;
	mysqli_query($db, $query_cat);

	}