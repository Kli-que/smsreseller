<?php
session_start();
require_once '../accessories/linkup.php';
date_default_timezone_set("Africa/Nairobi");

$date = date('Y/m/d H:i:s');

if (empty($_POST['grpname'])) {
	die("Please enter the group name");
}

else{
	$grpname = $_POST['grpname'];
	$user    = $_SESSION['loggedin'];

	//insert the group name to the database

	$query = mysqli_query($link, "INSERT INTO groups (`groupname`,`groupowner`,`date_created`) VALUES ('$grpname','$user','$date')");


	if ($query) 
	{
		die("");
	}else{
		die("Ooppss!!An error occurred.Please contact the admin.");
	}
}


?>