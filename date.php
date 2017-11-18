<?php
session_start();
// require_once 'accessories/functions.php';
date_default_timezone_set("Africa/Nairobi");

$date = date('Y/m/d H:i:s');

// echo $date;

// getAllContacts();
echo $_SESSION['loggedin'];

// echo returnFieldByField('klique_clientz', 'username', 'vgichira')['username'];

?>