<?php
session_start();
require_once '../accessories/linkup.php';

if (empty($_POST['username'])) {
	die("Please enter your username");
}

elseif (empty($_POST['password'])) {
	die("Please enter your password");
}

else{
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = mysqli_query($link, "SELECT * FROM `klique_clientz` WHERE `username` = '$username' AND `password` = '$password'");

	$row = mysqli_fetch_assoc($query);

	if ($row['username'] == $username && $row['password'] == $password) {
		$_SESSION['loggedin'] = $username;
		die("");
	}else{
		die("Please enter a valid username or password.");
	}
}

?>