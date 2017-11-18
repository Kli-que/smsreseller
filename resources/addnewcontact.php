<?php
session_start();
require_once '../accessories/linkup.php';
require_once '../accessories/functions.php';
$contactphone = $_POST['contactphone'];
$loggedin = $_SESSION['loggedin'];
date_default_timezone_set("Africa/Nairobi");

$date = date('Y/m/d H:i:s');

if (empty($_POST['contactname'])) {
	die("Please enter the contact name");
}

elseif (!ctype_alpha($_POST['contactname'])) {
	die("Please enter a valid name");
}

elseif (empty($_POST['contactphone'])) {
	die("Please enter your phone number");
}

elseif (!ctype_digit($_POST['contactphone'])) {
	die("Please enter a valid phone number");
}

elseif (searchExistingContact($_POST['contactphone'], $_SESSION['loggedin']) >= 1 ) {
	die("The phone number is already in the system.");
}

else{

	$contactname = $_POST['contactname'];
	$contactphone = $_POST['contactphone'];
	$user         = $_SESSION['loggedin'];

	$query = mysqli_query($link, "INSERT INTO allcontacts (`contactname`,`phone`,`user`,`date_created`) VALUES ('$contactname','$contactphone','$user','$date')");

	if ($query) {
		die("");
	}
	else{
		die("Oooppss!!An error occurred.Please contact the admin.");
	}
}


?>