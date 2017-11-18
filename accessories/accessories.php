<?php
session_start();

if (isset($_SESSION['loggedin'])) {
	require_once 'functions.php';
	require_once 'linkup.php';
}

?>