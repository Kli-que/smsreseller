<?php

require_once '../accessories/functions.php';
require_once '../accessories/linkup.php';

date_default_timezone_set("Africa/Nairobi");

if (empty($_POST['username'])) {
	die("Please enter your username");
}

elseif (returnNumberofRows2('klique_clientz', 'username', $_POST['username']) >= 1) {
	die("Sorry, the username is already taken");
}

elseif (empty($_POST['phone'])) {
	die("Please enter your phone number");
}

elseif (!ctype_digit($_POST['phone'])) {
	die("Please enter a valid phone number.");
}

elseif (empty($_POST['password'])) {
	die("Please enter your password");
}

elseif (strlen($_POST['password']) < 8) {
	die("Your password must be at least 8 characters");
}

elseif (empty($_POST['confirmpass'])) {
	die("Please confirm your password");
}

elseif ($_POST['password'] != $_POST['confirmpass']) {
	die("Passwords entered do not match");
}

else{

	$username = $_POST['username'];
	$phone    = $_POST['phone'];
	$password = md5($_POST['password']);
	$date = date('Y/m/d H:i:s');

	//insert the data to the database
	$query = mysqli_query($link, "INSERT INTO `klique_clientz` (`username`,`phone`,`password`,`date_created`) VALUES ('$username','$phone','$password','$date')");

	//if the data is successfully inserted, redirect to the next page
	if ($query) {
		die("");
	}
	else{
		die("Ooopps!! An error occurred while processing your data");
	}
}


?>