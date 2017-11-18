<?php
session_start();
require_once '../accessories/linkup.php';

$doesnothing = $_POST['doesnothing'];

$loggedin = $_SESSION['loggedin'];

$query = mysqli_query($link, "DELETE FROM `klique_clientz` WHERE `username` = '$loggedin'");

if ($query) {
	echo "";
}
else{
	echo "Oooppss!!An error occurred while deleting your account.Please try later";
}

?>