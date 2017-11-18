<?php
session_start();
require_once '../accessories/linkup.php';
require_once '../accessories/functions.php';

if (empty($_POST['oldpassword'])) {
	die("Please enter your old password");
}

elseif (returnFieldByField('klique_clientz','username',$_SESSION['loggedin'])['password'] != md5($_POST['oldpassword']))
{
	die("Your password does not match your current password");
}

elseif (empty($_POST['newpassword'])) {
	die("Please enter your new password");
}

elseif (strlen($_POST['newpassword']) < 8) {
	die("Your password must be at least 8 characters");
}

elseif ($_POST['newpassword'] != $_POST['newpassconfirm']) {
	die("New passwords do not match");
}

else{
	$newpassword = mysqli_real_escape_string($link, md5($_POST['newpassword']));
	$user        = $_SESSION['loggedin'];

	$query = mysqli_query($link, "UPDATE `klique_clientz` SET `password` = '$newpassword' WHERE `username` = '$user'");

	if ($query) {
		die("Password was changed successfully.You will use the password the next time you sign in.");
	}
}


?>