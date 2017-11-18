<?php
session_start();
require_once '../accessories/linkup.php';

if (empty($_POST['newname'])) {
	die ("Name is required");
}

elseif (!ctype_alpha($_POST['newname'])) {
	die ("Please enter a valid name");
}


elseif (empty($_POST['newphone'])) {
	die("Phone number is required");
}

elseif (!ctype_digit($_POST['newphone'])) {
	die("Please enter a valid phone number");
}

else{
	$newname  = $_POST['newname'];
	$newphone = $_POST['newphone'];

	//update the data

	$query = mysqli_query($link, "UPDATE `allcontacts` SET `contactname` = '$newname', `phone` = '$newphone' WHERE `id` = '".$_SESSION['editcont']."'");

	if ($query) {
		echo "";
	}
	else{
		echo "Oooppss!!An error occurred.Please contact the admin.";
	}
}


?>