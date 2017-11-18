<?php
require_once '../accessories/linkup.php';
//returns an array of the checked boxes

$contactid = $_POST['contactid'];

$_SESSION['editcont'] = $contactid;

$query = mysqli_query($link, "SELECT * FROM `allcontacts` WHERE `id` ='$contactid'");

while ($row = mysqli_fetch_assoc($query)) {
	$contactname = $row['contactname'];
	$phone       = $row['phone'];

	$data = [$contactname, $phone];

	echo json_encode($data);
}


?>