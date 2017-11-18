<?php
require_once '../accessories/linkup.php';
//returns an array of the checked boxes

$contactid = $_POST['contactid'];

$query = mysqli_query($link, "DELETE FROM `allcontacts` WHERE id =".$contactid);

if ($query) 
{
	echo "";
}else{
	echo "Oooppss!!An error occurred.Please contact the admin";
}	

?>