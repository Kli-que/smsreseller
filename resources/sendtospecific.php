<?php
session_start();
require_once '../accessories/linkup.php';

$contactid = $_POST['contactselected'];

foreach ($contactid as $contactselected) {
	$query = mysqli_query($link, "SELECT * FROM `allcontacts` WHERE `id` = '$contactselected'");

	while ($row = mysqli_fetch_assoc($query)) {
		$phonenumber = $row['phone'];

		$data = [$phonenumber];

		echo json_encode($data);
	}
}

?>